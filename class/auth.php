<?php
    class Auth{

        public $connection, $auth, $email, $password, $stmt, $id;

        public function __construct(){
            require $_SERVER['DOCUMENT_ROOT'] . '/controller/connection/conn.php';

            $this->connection = $conn;
            $this->email      = $_POST['email'] ?? null;
            $this->password   = $_POST['password'] ?? null;
            
        } 

        public function authCheck($referer, $type = 2){
            
            $type = $type == 2 ? array(2) : array(1,3);
            if(isset($_SESSION['auth']) && !empty($_SESSION['auth']) && in_array($_SESSION['auth']['user_type'],$type)){
                return $this;
            }else{
                ob_start();
                header("location: ".$referer);
                exit();
            }
        }

        public function redirectIfLogin($referer, $type = 2){
            if(isset($_SESSION['auth']) && !empty($_SESSION['auth']) && $_SESSION['auth']['user_type'] == $type){
                ob_start();
                header("location: ".$referer);
                exit();
            }else{
               return $this;
            }
        }

        public function logout($user_type){
            $referer = $user_type == 1 ? '/login' : '/';
            session_unset();
            
            ob_start();
            header("location: ".$referer);
            exit();
        }

        public function login($referer="/", $user_type = 2){
            $sqlQuery = $user_type == 2 ? $this->connection->prepare('SELECT id, password, activated FROM tbl_users WHERE email = ? AND user_type = 2 AND deleted_at IS NULL') :  $this->connection->prepare('SELECT id, password, activated FROM tbl_users WHERE email = ? AND user_type IN (1,3) AND deleted_at IS NULL');
            if ($this->stmt = $sqlQuery) {
                // Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
                $this->stmt->bind_param('s', $this->email);
                $this->stmt->execute();
                // Store the result so we can check if the account exists in the database.
                $this->stmt->store_result();

                // $this->stmt->close();
            }

            if ($this->stmt->num_rows > 0) {
                $this->stmt->bind_result($id, $password, $activated);
                $this->stmt->fetch();
                if (password_verify($this->password, $password)) {
                    $this->id = $id;
                    $user = $this->getUser();
                   
                    if($user['activated'] != 1){
                        $_SESSION['error'] = 'Confirm account, Check your email for account confirmation';
                        ob_start();
                        header('location: ' . $_SERVER['HTTP_REFERER']);
                        exit();
                    }

                    session_regenerate_id();
                    $_SESSION['loggedin'] = TRUE;
                    $_SESSION['auth'] = $user;
                    $referer = $referer ?? $_SERVER['HTTP_REFERER'];

                    if($user_type == 1){
                        ob_start();
                        header("location:/res");
                        exit();    
                    }else{
                        ob_start();
                        header("location:/my-appointment");
                        exit();    
                    }
                } else {
                   
                    $_SESSION['error'] = 'Incorrect email and/or password!';
                    ob_start();
                    header('location: ' . $_SERVER['HTTP_REFERER']);
                }
            } else {
                // Incorrect username
                $_SESSION['error'] = "Credentials does'nt exist.";
                ob_start();
                header('location: ' . $_SERVER['HTTP_REFERER']);
            }
        }

        public function getUser(){
            $sqlQuery = "SELECT * FROM tbl_users WHERE id='$this->id' AND deleted_at IS NULL";
            $result = mysqli_query($this->connection, $sqlQuery);
            $row = mysqli_fetch_assoc($result);

            return $row;
        }
    }
?>        
<?php
    class Auth{

        public $connection, $auth, $email, $password, $stmt, $id;

        public function __construct(){
            require $_SERVER['DOCUMENT_ROOT'] . '/controller/connection/conn.php';

            $this->connection = $conn;
            $this->email      = $_POST['email'] ?? null;
            $this->password   = $_POST['password'] ?? null;
            
        } 

        public function authCheck($referer){
            
            if(isset($_SESSION['auth']) && !empty($_SESSION['auth'])){
                return $this;
            }else{
                header("Location: ".$referer);
                exit();
            }
        }

        public function logout($user_type){
            $referer = $user_type == 1 ? '/login' : '/sign-up';
            session_unset();

            header("Location: ".$referer);
            exit();
        }

        public function login($referer="/", $user_type = 2){
            if ($this->stmt = $this->connection->prepare('SELECT id, password, activated FROM tbl_users WHERE email = ? AND user_type = ?')) {
                // Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
                $this->stmt->bind_param('ss', $this->email, $user_type);
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
                        header('Location: ' . $_SERVER['HTTP_REFERER']);
                        exit();
                    }

                    session_regenerate_id();
                    $_SESSION['loggedin'] = TRUE;
                    $_SESSION['auth'] = $user;
                    $referer = $referer ?? $_SERVER['HTTP_REFERER'];

                    if($user_type == 1){
                        header("Location:/res");
                        exit();    
                    }else{
                        header("Location:/");
                        exit();    
                    }
                } else {
                   
                    $_SESSION['error'] = 'Incorrect email and/or password!';
                    header('Location: ' . $_SERVER['HTTP_REFERER']);
                }
            } else {
                // Incorrect username
                $_SESSION['error'] = "Credentails does'nt exist.";
                header('Location: ' . $_SERVER['HTTP_REFERER']);
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
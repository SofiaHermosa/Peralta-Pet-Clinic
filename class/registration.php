<?php
    require './mailer/mailer.php';

    class Registration{
        
        public $connection, $method, $mail, $email, $name;

        public function __construct(){
            require $_SERVER['DOCUMENT_ROOT'] . '/controller/connection/conn.php';

            $this->connection = $conn;
            $this->mail = new Mailer;
        }

        public function validate(){
            $email    = isset($_GET['email']) ? $_GET['email'] : null;
            $username = isset($_GET['username']) ? $_GET['username'] : null;
            
            $query =  "SELECT * FROM tbl_users WHERE email  = '$email' OR username = '$username' AND deleted_at IS NULL";
            
            if(isset($_GET['email']) && !isset($_GET['username'])){
                $query =  "SELECT * FROM tbl_users WHERE email  = '$email' AND deleted_at IS NULL";
            }

            if(isset($_GET['username']) && !isset($_GET['email'])){
                $query =  "SELECT * FROM tbl_users WHERE uname  = '$username' AND deleted_at IS NULL";
            }

            $result = mysqli_query($this->connection,$query);

            if (mysqli_num_rows($result) > 0) {
                echo json_encode(FALSE);
            }else{
                echo json_encode(TRUE); 
            }
        }

        public function updateCreateUser(){
            $fname      = $_POST['fname'];
            $lname      = $_POST['lname'];
            $mname      = $_POST['mname'];
            $contact    = $_POST['contact_no'];
            $email      = $_POST['email'];
            $uname      = $_POST['username'];
            $gender     = $_POST['gender'];
            $address    = base64_encode($_POST['address']);
            $password   = !empty($_POST['password']) ? password_hash($_POST['password'], PASSWORD_DEFAULT) : null;
            $id         = $_POST['id'] ?? null;


            if(!empty($id)){
                if(!empty($password)){
                    $result = mysqli_query($this->connection,"UPDATE tbl_users SET first_name='$fname', last_name='$lname', address='$address', middle_name='$mname', contact_no='$contact', email='$email', uname='$uname', gender='$gender', password='$password' WHERE id = '$id' ")
                    or die ("failed to query update in the users table");
                }else{
                    $result = mysqli_query($this->connection,"UPDATE tbl_users SET first_name='$fname', last_name='$lname', address='$address', middle_name='$mname', contact_no='$contact', email='$email', uname='$uname', gender='$gender' WHERE id = '$id' ")
                    or die ("failed to query update in the users table");
                }
                
                $this->method = 'update';    
            }else{
                $result = mysqli_query($this->connection,"INSERT INTO tbl_users (first_name, last_name, middle_name, address, gender, email, contact_no, uname, password) VALUES ('$fname', '$lname', '$mname', '$address', '$gender', '$email', '$contact', '$uname', '$password')")
                    or die ("failed to query update in the users table");
                $this->method = 'create';    
                $this->email  = $email;
                $this->name   = $fname;
            }

            return $this;
        }

        public function sendConfirmationEmail(){
            if($this->method == 'create'){
                $recepient = $this->email;
                $subject   = 'Account Confirmation | '. $this->name;
                $view      = './views/mail/account-confirmation.php';
                $data      = array(
                    'recepient'                => $this->name,
                    'name'                     => 'Peralta Clinic Admin',
                    'confirmation-link'       => "http://" . $_SERVER['SERVER_NAME'].'/confirm-account/'.base64_encode($this->email)
                );
    
                $replyToInquiry = $this->mail->mail()->send($recepient, $subject, $view, $data);
    
                echo $replyToInquiry;
            }
        }
    }
?>        
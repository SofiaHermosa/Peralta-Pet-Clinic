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
            $user_type  = $_POST['user_type'] ?? '';
            $address    = base64_encode($_POST['address']);
            $password   = !empty($_POST['password']) ? password_hash($_POST['password'], PASSWORD_DEFAULT) : null;
            $id         = $_POST['id'] ?? null;
            $profile    = null;

            if(isset($_FILES['imgs'])){
                $storedFile = $this->storeToFolder('imgs');      
                $profile = $storedFile[0];
            }

            if(!empty($id)){
                if(!empty($password)){
                    $result = mysqli_query($this->connection,"UPDATE tbl_users SET first_name='$fname', last_name='$lname', profile='$profile',address='$address', middle_name='$mname', contact_no='$contact', email='$email', uname='$uname', gender='$gender', password='$password' WHERE id = '$id' ")
                    or die ("failed to query update in the users table");
                }else{
                    $result = mysqli_query($this->connection,"UPDATE tbl_users SET first_name='$fname', last_name='$lname', profile='$profile', address='$address', middle_name='$mname', contact_no='$contact', email='$email', uname='$uname', gender='$gender' WHERE id = '$id' ")
                    or die ("failed to query update in the users table");
                }
                
                if(isset($_POST['user_type'])){
                    $result = mysqli_query($this->connection,"UPDATE tbl_users SET user_type='$user_type' WHERE id = '$id' ")
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

            if(isset($_POST['edit_profile'])){
                $sqlQuery = "SELECT * FROM tbl_users WHERE id='$id' AND deleted_at IS NULL";
                $result = mysqli_query($this->connection, $sqlQuery);
                $row = mysqli_fetch_assoc($result);

                $_SESSION['auth'] = $row;
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
                    'confirmation-link'       => "https://" . $_SERVER['SERVER_NAME'].'/confirm-account?token='.base64_encode($this->email)
                );
    
                $replyToInquiry = $this->mail->mail()->send($recepient, $subject, $view, $data);
    
                echo $replyToInquiry;
            }
        }

        public function getContent($id){
            $sqlQuery = "SELECT * FROM tbl_users WHERE id = '$id'";

            $result = mysqli_query($this->connection, $sqlQuery);
            $contentArray = array();
            
            while ($row = mysqli_fetch_assoc($result)) {
                array_push($contentArray, $row['profile']);
            }

            return $contentArray;
        }

        public function storeToFolder($name){
            
            $key = 0;
            $files = array();
            
            if (array_sum($_FILES[$name]['error']) > 0)
            {
                $images = $this->getContent($_POST['id']);
                return $images;
            }else{
                
                foreach ($_FILES[$name]['name'] as $filename) 
                {
                    $info = pathinfo($filename);
                    $ext = $info['extension'];
                    $newname = uniqid().".".$ext; 

                    $target = 'uploads/profile/'.$newname;
                    move_uploaded_file($_FILES[$name]['tmp_name'][$key], $target);

                    $key++;

                    array_push($files, $target);
                } 

                return $files;
            }
        }

        public function activateAccount($email){
            $email = base64_decode($email);

            $result = mysqli_query($this->connection,"UPDATE tbl_users SET activated = 1 WHERE email = '$email' ")
                    or die ("failed to query to activate account");

            return $result;        
        }
    }
?>        
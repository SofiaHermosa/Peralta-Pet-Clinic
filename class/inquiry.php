<?php
    require './mailer/mailer.php';

    class Inquiry{
        public $connection, $mail;
        
        public function __construct(){
            require $_SERVER['DOCUMENT_ROOT'] . '/controller/connection/conn.php';

            $this->connection = $conn;
            $this->mail = new Mailer;

        }
        
        public function sendInquiry(){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $contact = $_POST['contact_no'];
            $content = base64_encode($_POST['content']);

            $result = mysqli_query($this->connection,"INSERT INTO tbl_inquiries (name, email, contact_no, content) 
                VALUES ('$name', '$email', '$contact', '$content')");
    
            // if($result){
            //     $response = "Inquiry Sent";
            //     exit(json_encode($response));
            // }

            return $this;
        }

        public function getInquiries(){
            $sqlQuery = "SELECT * FROM tbl_inquiries ORDER BY created_at DESC";

            $result = mysqli_query($this->connection, $sqlQuery);
            $inquiryArray = array();

            while ($row = mysqli_fetch_assoc($result)) {
                array_push($inquiryArray, $row);
            }

            mysqli_free_result($result);
            mysqli_close($this->connection);

            return $inquiryArray;
        }

        public function sendEmail(){
            $recepient = 'jblando1996@gmail.com';
            $subject   = 'New Inquiry | '. $_POST['name'];
            $view      = './views/mail/new-inquiry.php';
            $data      = array(
                'inquirer'  => $_POST['name'],
                'name'      => 'Peralta Clinic Admin',
                'content'   => base64_encode($_POST['content'])
            );

            $replyToInquiry = $this->mail->mail()->send($recepient, $subject, $view, $data);

            echo $replyToInquiry;
        }
    }
?>    
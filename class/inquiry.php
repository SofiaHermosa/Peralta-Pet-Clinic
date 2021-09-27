<?php
    require './mailer/mailer.php';

    class Inquiry{
        public $connection, $mail, $config;
        
        public function __construct(){
            require $_SERVER['DOCUMENT_ROOT'] . '/controller/connection/conn.php';

            $this->connection = $conn;
            $this->mail = new Mailer;

            $config           = require './config.php';
            $this->config     = $config['settings'];
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

        public function getInquiries($filter=null){
            $sqlQuery = "SELECT * FROM tbl_inquiries WHERE deleted_at IS NULL ORDER BY created_at DESC";

            if($filter == 1){
                $sqlQuery = "SELECT * FROM tbl_inquiries WHERE deleted_at IS NULL AND replied_at IS NOT NULL ORDER BY created_at DESC";
            }

            if($filter == 2){
                $sqlQuery = "SELECT * FROM tbl_inquiries WHERE deleted_at IS NULL AND replied_at IS NULL ORDER BY created_at DESC";
            }

            $result = mysqli_query($this->connection, $sqlQuery);
            $inquiryArray = array();

            while ($row = mysqli_fetch_assoc($result)) {
                array_push($inquiryArray, $row);
            }

            // mysqli_free_result($result);
            // mysqli_close($this->connection);

            return $inquiryArray;
        }

        public function sendEmail(){
            $recepient = $this->config['admin_email'];
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

        public function replyInquiry(){
            $id = $_POST['inq_id'];
            $result = mysqli_query($this->connection,"UPDATE tbl_inquiries SET replied_at=now() WHERE id= '$id' ");

            $recepient = $_POST['inq_email'];
            $subject   = $_POST['inq_subject'];
            $view      = './views/mail/reply-inquiry.php';
            $data      = array(
                'inquirer'  => 'Peral Dog and Cat Clinic',
                'name'      => $_POST['inq_name'],
                'content'   => base64_encode($_POST['reply_content'])
            );

            $replyToInquiry = $this->mail->mail()->send($recepient, $subject, $view, $data);

            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
    }
?>    
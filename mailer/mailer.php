<?php
    require './vendor/autoload.php';

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    

    class Mailer {
        public $mailer;

        public function __construct()
        {
            $this->mailer     = new PHPMailer(true);
        }

        public function mail(){    
            $this->mailer->SMTPDebug    = 3;
            $this->mailer->isSMTP();        
            $this->mailer->CharSet      = 'utf-8';                          
            $this->mailer->Host         = 'localhost';                   
            $this->mailer->SMTPAuth     = false;  
            $this->mailer->SMTPAutoTLS  = false;
            $this->mailer->Username     = 'noreply.peraltaclinic@gmail.com';
            $this->mailer->Password     = 'Peralta2k21!';                   
            $this->mailer->SMTPSecure   = 'tsl';            
            $this->mailer->Port         = 25;  

            return $this;
        }

        public function send($recepient, $subject, $view, $data){
            try {
                $this->mailer->setFrom('noreply.peraltaclinic@gmail.com', 'Peralta Dog and Cat Clinic');
                $this->mailer->addAddress($recepient);
                $this->mailer->addReplyTo('jblando1996@gmail.com', 'Peralta Dog and Cat Clinic');
    
                $this->mailer->isHTML(true);                                
                $this->mailer->Subject = $subject;
                
                ob_start();
                include $view;
                $body = ob_get_clean();

                $this->mailer->Body = $body;
    
                if($this->mailer->send()){
                    echo 'email sent';
                }

            } catch (\Throwable $th) {
                echo json_encode($th);
            }
        }
    }
?>
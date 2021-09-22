<?php
    require './vendor/autoload.php';

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    

    class Mailer{
        public $mailer;

        public function __construct()
        {
            $this->mailer     = new PHPMailer(true);
        }

        public function mail(){
            // $this->mailer->SMTPDebug = SMTP::DEBUG_SERVER;                     
            $this->mailer->isSMTP();        
            $this->mailer->CharSet    = "utf-8";                                  
            $this->mailer->Host       = 'smtp.gmail.com';                   
            $this->mailer->SMTPAuth   = true;                                  
            $this->mailer->Username   = 'noreply.peraltaclinic@gmail.com';                     
            $this->mailer->Password   = 'Peralta2k21!';                               
            $this->mailer->SMTPSecure = 'tls';            
            $this->mailer->Port       = 587;  
            $this->mailer->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );

            return $this;
        }

        public function send($recepient, $subject, $view, $data){
            try {
                $this->mailer->setFrom('noreply.peraltaclinic@gmail.com', 'Peralta Dog and Cat Clinic');
                $this->mailer->addAddress($recepient);
                $this->mailer->addReplyTo('jblando1996@gmail.com', 'Peralta Dog and Cat Clinic');
    
                $this->mailer->isHTML(true);                                  //Set email format to HTML
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
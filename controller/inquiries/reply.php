<?php
    require_once('./mailer/mailer.php');

    $mail = new Mailer;

    $replyToInquiry = $mail->mail()->send();
    
    return $replyToInquiry;

?>
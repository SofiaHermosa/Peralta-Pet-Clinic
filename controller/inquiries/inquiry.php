<?php
    require_once('./class/inquiry.php');
    
    $class = new Inquiry;
    $inquiry = $class->sendInquiry()->sendEmail();

    
    return $inquiry;

?>
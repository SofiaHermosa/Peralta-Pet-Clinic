<?php
    require_once('./class/inquiry.php');
    
    $class = new Inquiry;
    $inquiry_reply = $class->replyInquiry();
    
    return $inquiry_reply;
?>
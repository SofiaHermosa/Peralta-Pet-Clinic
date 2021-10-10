<?php
    require_once('./class/inquiry.php');

    $class = new Inquiry;
    $inquiry = $class->archiveInquiry();

    echo "Inquiry successfully deleted";

?>    
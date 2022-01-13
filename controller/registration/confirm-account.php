<?php
    require_once('./class/registration.php');

    $class = new Registration;

    $register = $class->activateAccount($_GET['token']);

    
    header('Location: /sign-up'); 
    
    exit();
?>
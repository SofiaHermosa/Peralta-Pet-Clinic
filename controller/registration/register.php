<?php
    require_once('./class/registration.php');

    $class = new Registration;

    $register = $class->updateCreateUser()->sendConfirmationEmail();
    
    if(isset($_POST['form_submit'])){
        header('Location: ' . $_SERVER['HTTP_REFERER']); 
    }
    
    echo "Successful registration";
?>
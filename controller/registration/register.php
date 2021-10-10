<?php
    require_once('./class/registration.php');

    $class = new Registration;

    $register = $class->updateCreateUser()->sendConfirmationEmail();

    echo "Successful registration";
?>
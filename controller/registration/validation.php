<?php
    require_once('./class/registration.php');

    $class = new Registration;

    $validate = $class->validate();

    echo $validate;

?>
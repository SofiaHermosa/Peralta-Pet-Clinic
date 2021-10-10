<?php
    require_once('./class/auth.php');

    $class = new Auth;

    $login = $class->login();

    return $login;

?>
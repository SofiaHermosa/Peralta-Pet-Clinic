<?php
    require_once('./class/auth.php');

    $class = new Auth;

    $logout = $class->logout($type ?? null);

    return $logout;

?>
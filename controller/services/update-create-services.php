<?php
    require_once('./class/services.php');
    
    $class = new Services;
    $services = $class->updateCreateServices();

    header('Location: ' . $_SERVER['HTTP_REFERER']);    
?>
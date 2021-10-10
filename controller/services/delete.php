<?php
    require_once('./class/services.php');

    $class = new Services;
    $services = $class->archiveServices();

    echo "Services successfully deleted";

?>    
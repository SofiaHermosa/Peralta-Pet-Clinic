<?php
    require_once('./class/cms.php');

    $class = new CMS;

    $cms = $class->mutator()->update();

    header('Location: ' . $_SERVER['HTTP_REFERER']);

?>
<?php
    require_once('./class/teams.php');
    
    $class = new Teams;
    $teams = $class->updateCreateTeams();

    header('Location: ' . $_SERVER['HTTP_REFERER']);    
?>
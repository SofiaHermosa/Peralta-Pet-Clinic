<?php
    require_once('./class/teams.php');

    $class = new Teams;
    $teams = $class->archiveTeams();

    echo "Teams successfully deleted";

?>    
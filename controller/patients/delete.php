<?php
    require_once('./class/patient.php');

    $class = new Patients;
    $patients = $class->archivePatient();

    echo "User successfully deleted";

?>    
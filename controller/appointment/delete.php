<?php
    require_once('./class/appointment.php');

    $class = new Appointment;
    $appointment = $class->archiveAppointment();

    echo "Appointment successfully deleted";

?>    
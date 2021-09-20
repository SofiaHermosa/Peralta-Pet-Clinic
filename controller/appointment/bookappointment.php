<?php
    require_once('./class/appointment.php');

    $class = new Appointment;

    $appointment = $class->getAppointment()->slotAvailable();
    
    return $appointment;

?>
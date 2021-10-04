<?php
    require_once('./class/appointment.php');

    $class = new Appointment;

    $appointment = $class->updateAppointmentStatus();
    
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode([
        'message' => 'Status sucessfully updated'
    ],200);

?>
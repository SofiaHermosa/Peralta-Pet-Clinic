<?php
    require_once('./class/appointment.php');

    try {
        $class = new Appointment;

        $appointment = $class->getAppointment(2)->slotAvailable();
        
        return $appointment;

    } catch (\Throwable $th) {
        throw $th;
    }

?>
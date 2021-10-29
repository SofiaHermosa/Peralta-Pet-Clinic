<?php
    require_once('./class/appointment.php');
    
    $class = new Appointment;
    $filter = $_GET['status'] ?? null;
    $type   = $_GET['type'] ?? null;
    $user   = $_GET['user'] ?? null;
    
    $appointments = $class->getAppointmentPerStatus($filter, $type, $user);
    $data['data'] = [];
    $status="";
    $button="";

    foreach($appointments as $appointment){
        $json = base64_encode(json_encode($appointment));
        $status ="<center><span class='text-xs font-medium p-2 rounded bg-gray-200 text-gray-800 shadow'>PENDING</span></center>";
        
        if($appointment['status'] == 2){
             $status ="<center><span class='text-xs font-medium p-2 rounded bg-green-100 text-green-800 shadow'>APPROVED</span></center>"; 
        }

        if($appointment['status'] == 3){
            $status ="<center><span class='text-xs font-medium p-2 rounded bg-red-100 text-red-800 shadow'>DECLINED</span></center>";  
        }

        $array = [
            $appointment['apt_visit_reason'],
            date("F j, Y", strtotime($appointment['apt_time'])),
            date("h:i a", strtotime($appointment['apt_time'])),
            $status,
            !empty($appointment['decline_reason']) ? base64_decode($appointment['decline_reason']) : ' '
        ];

        array_push($data['data'], $array);
    }

    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($data);
?>
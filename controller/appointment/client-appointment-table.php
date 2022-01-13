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
        
        if($appointment['status'] == 5){
            $status ="<center><span class='text-xs font-medium p-2 rounded bg-yellow-100 text-yellow-800 shadow'>CANCELLED</span></center>";  
        }
        
        if($appointment['status'] == 1 || $appointment['status'] == 2){
            $button = '<center><a data-apt="'.$json.'" href="javascript:void(0)" class="text-white rounded py-2 px-4 bg-yellow-600 hover:bg-yellow-500 aptUpdtStatus" data-status="5">Cancel</a>';
        }else{
            $button = '';
        }

        $array = [
            $appointment['apt_visit_reason'],
            date("F j, Y", strtotime($appointment['apt_time'])),
            date("h:i a", strtotime($appointment['apt_time'])),
            $status,
            !empty($appointment['decline_reason']) ? base64_decode($appointment['decline_reason']) : ' ',
            $button
        ];

        array_push($data['data'], $array);
    }

    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($data);
?>
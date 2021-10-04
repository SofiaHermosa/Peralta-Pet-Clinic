<?php
    require_once('./class/appointment.php');
    
    $class = new Appointment;
    $filter = $_GET['status'] ?? null;
    $appointments = $class->getAppointmentPerStatus($filter);
    $data['data'] = [];
    $status="";
    $button="";

    foreach($appointments as $appointment){
        $json = base64_encode(json_encode($appointment));
        $status ="<span class='text-xs font-medium p-2 rounded bg-gray-200 text-gray-800 shadow'>PENDING</span>";
        $button='<center><a data-apt="'.$json.'" href="javascript:void(0)" class="text-white rounded py-2 px-4 bg-blue-500 hover:bg-blue-400 aptUpdtStatus" data-status="2">Approve</a>
        <a data-apt="'.$json.'" href="javascript:void(0)" class="text-white rounded py-2 px-4 bg-red-500 hover:bg-red-400 aptUpdtStatus" data-status="3">Declined</a></center>';

        if($appointment['status'] == 2){
             $status ="<span class='text-xs font-medium p-2 rounded bg-green-100 text-green-800 shadow'>APPROVED</span>"; 
             $button='<center><a data-apt="'.$json.'" href="javascript:void(0)" class="text-white rounded py-2 px-4 bg-red-500 hover:bg-red-400 aptUpdtStatus" data-status="3">Declined</a></center>'; 
        }

        if($appointment['status'] == 3){
            $status ="<span class='text-xs font-medium p-2 rounded bg-red-100 text-red-800 shadow'>DECLINED</span>";  
            $button='<center><a data-apt="'.$json.'" href="javascript:void(0)" class="text-white rounded py-2 px-4 bg-red-500 hover:bg-red-400">Archaive</a></center>'; 

        }

        $array = [
            $appointment['apt_fname']." ".$appointment['apt_lname']."<span class='block text-md text-gray-400'>".$appointment['apt_contactno']."</span>",
            $appointment['apt_visit_reason'],
            date("F j, Y", strtotime($appointment['apt_time'])),
            date("h:i a", strtotime($appointment['apt_time'])),
            $status,
            $button
        ];

        array_push($data['data'], $array);
    }

    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($data);
?>
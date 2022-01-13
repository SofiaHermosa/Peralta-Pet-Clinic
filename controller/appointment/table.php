<?php
    require_once('./class/appointment.php');
    
    $class = new Appointment;
    $filter = $_GET['status'] ?? null;
    $type   = $_GET['type'] ?? null;
    $appointments = $class->getAppointmentPerStatus($filter, $type);
    $data['data'] = [];
    $status="";
    $button="";

    foreach($appointments as $appointment){
        $json = base64_encode(json_encode($appointment));
        $status ="<center><span class='text-xs font-medium p-2 rounded bg-gray-200 text-gray-800 shadow'>PENDING</span></center>";
        $button='<center><a data-apt="'.$json.'" href="javascript:void(0)" class="text-white rounded py-2 px-4 bg-blue-500 hover:bg-blue-400 aptUpdtStatus" data-status="2">Approve</a>
        <a data-apt="'.$json.'" href="javascript:void(0)" class="text-white rounded py-2 px-4 bg-yellow-600 hover:bg-yellow-500 aptUpdtStatus" data-status="3">Decline</a> <a href="javascript:void(0)" class="text-white rounded py-2 px-4 bg-red-500 hover:bg-red-400 archive" data-id="'.$appointment['id'].'" data-type="Appointment" data-url="/archive/appointment">Archive</a></center>';

        if($appointment['status'] == 2){
             $status ="<center><span class='text-xs font-medium p-2 rounded bg-green-100 text-green-800 shadow'>APPROVED</span></center>"; 
             $button='<center><a data-apt="'.$json.'" href="javascript:void(0)" class="text-white rounded py-2 px-4 bg-yellow-600 hover:bg-yellow-500 aptUpdtStatus" data-status="3">Decline</a>
             <a data-apt="'.$json.'" href="javascript:void(0)" class="text-white rounded py-2 px-4 bg-green-500 hover:bg-green-400 aptUpdtStatus" data-status="4">Done</a></center>'; 
        }

        if($appointment['status'] == 3){
            $status ="<center><span class='text-xs font-medium p-2 rounded bg-red-100 text-red-800 shadow'>DECLINED</span></center>";  
            $button='<center><a href="javascript:void(0)" class="text-white rounded py-2 px-4 bg-red-500 hover:bg-red-400 archive" data-id="'.$appointment['id'].'" data-type="Appointment" data-url="/archive/appointment">Archive</a></center>'; 

        }
        
        if($appointment['status'] == 4){
            $status ="<center><span class='text-xs font-medium p-2 rounded bg-green-200 text-green-800 shadow'>DONE</span></center>";  
        }
        
        
        if($appointment['status'] == 5){
            $status ="<center><span class='text-xs font-medium p-2 rounded bg-yellow-100 text-yellow-800 shadow'>CANCELLED</span></center>";  
            $button='<center><a href="javascript:void(0)" class="text-white rounded py-2 px-4 bg-red-500 hover:bg-red-400 archive" data-id="'.$appointment['id'].'" data-type="Appointment" data-url="/archive/appointment">Archive</a></center>'; 

        }

        $array = [
            $appointment['apt_fname']." ".$appointment['apt_lname']."<span class='block text-md text-gray-400'>".$appointment['apt_contactno']."</span>",
            $appointment['apt_visit_reason'],
            date("F j, Y", strtotime($appointment['apt_time'])),
            date("h:i a", strtotime($appointment['apt_time'])),
        ];

        if($type == 1){
            $array[] =  $status;
        }

        if($filter == 3 || $filter == 5 || $type == 0){
            $array[] = !empty($appointment['decline_reason']) ? base64_decode($appointment['decline_reason']) : ' ';
        }


        if($type == 0){
            $array[] =  $status;
        }

        if($type == 1){
            $array[] = $button;
        }

        array_push($data['data'], $array);
    }

    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($data);
?>
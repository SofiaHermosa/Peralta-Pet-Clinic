<?php
    require_once('./class/patient.php');

    $class = new Patients;
    $patients = $class->getPatients($type);
    $status ="<center><span class='text-xs font-medium p-2 rounded bg-purple-200 text-purple-800 shadow'>CLIENT</span></center>";

    $data['data'] = [];

    foreach($patients as $patient){
        $json = base64_encode(json_encode($patient));
        
        $status ="<center><span class='text-xs font-medium p-2 rounded bg-purple-200 text-purple-800 shadow'>CLIENT</span></center>";
         
        if($patient['user_type'] == 1){
            $status ="<center><span class='text-xs font-medium p-2 rounded bg-blue-100 text-blue-800 shadow'>ADMINISTRATOR</span></center>";
        }
        
        if($patient['user_type'] == 3){
            $status ="<center><span class='text-xs font-medium p-2 rounded bg-yellow-100 text-yellow-800 shadow'>SECRETARY</span></center>";
        }
        
        $array = [
            $patient['first_name'].' '.$patient['last_name']."<span class='block text-md text-gray-400'>".$patient['uname']."</span>",
            $patient['email'],
            $patient['contact_no'],
            $status,
        ];

        if($type == 1){
            $array[] = '<center><a data-patient="'.$json.'" href="javascript:void(0)" class="text-white rounded py-2 px-4 bg-blue-500 hover:bg-blue-400 editUserBtn">Edit</a>
            <a href="javascript:void(0)" data-type="User" data-url="/archive/user" data-id="'.$patient['id'].'" class="archive text-white rounded py-2 px-4 bg-red-500 hover:bg-red-400">Archive</a></center>';
        }

        array_push($data['data'], $array);
    }

    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($data);
?>
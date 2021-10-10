<?php
    require_once('./class/patient.php');

    $class = new Patients;
    $patients = $class->getPatients();
    $status ="<center><span class='text-xs font-medium p-2 rounded bg-gray-200 text-gray-800 shadow'>PENDING ACTIVATION</span></center>";

    $data['data'] = [];

    foreach($patients as $patient){
        $json = base64_encode(json_encode($patient));

        if($patient['activated'] == 1){
            $status ="<center><span class='text-xs font-medium p-2 rounded bg-green-100 text-green-800 shadow'>ACTIVATED</span></center>";
        }
        
        $array = [
            $patient['first_name'].' '.$patient['last_name']."<span class='block text-md text-gray-400'>".$patient['uname']."</span>",
            $patient['email'],
            $patient['contact_no'],
            $status,
            '<center><a data-patient="'.$json.'" href="javascript:void(0)" class="text-white rounded py-2 px-4 bg-blue-500 hover:bg-blue-400 toggle-menu" data-toggle="#editUserModal">Edit</a>
            <a href="javascript:void(0)" data-type="User" data-url="/archive/user" data-id="'.$patient['id'].'" class="archive text-white rounded py-2 px-4 bg-red-500 hover:bg-red-400">Archive</a></center>'
        ];

        array_push($data['data'], $array);
    }

    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($data);
?>
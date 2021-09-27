<?php
    require_once('./class/patient.php');

    $class = new Patients;
    $patients = $class->getPatients();

    $data['data'] = [];

    foreach($patients as $patient){
        $json = base64_encode(json_encode($patient));
        $array = [
            $patient['apt_fname'].' '.$patient['apt_lname'],
            $patient['apt_contactno'],
            $patient['apt_address'],
            '<center><a data-patient="'.$json.'" href="javascript:void(0)" class="text-indigo-600 rounded py-2 px-4 bg-indigo-100 hover:text-indigo-900 hover:bg-indigo-200">Edit</a></center>'
        ];

        array_push($data['data'], $array);
    }

    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($data);
?>
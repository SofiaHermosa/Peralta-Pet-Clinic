<?php
    require_once($_SERVER['DOCUMENT_ROOT'] . '/controller/connection/conn.php');

    $config           = require_once('./config.php');
    $config           = $config['services'];
    
    $apt_id = $_POST["apt_id"];
    if($apt_id === ""){
        $fname = $_POST["first_name"];
        $lname = $_POST["last_name"];
        $minit = $_POST["middle_init"];
        $contact_no = $_POST["contact_no"];
        $address = $_POST["address"];
        $patient_type = $_POST["patient_type"];
        $date = $_POST["createdate"];
        $time = $_POST["time"];
        $datetime = $date ." ". $time; 
        $endtime  = date('Y-m-d H:i',strtotime('+1 hour',strtotime($datetime)));
        $visit_reason = $_POST["visit_reason"];
        $response = "";
    
        $result = mysqli_query($conn,"INSERT INTO tbl_appointment (apt_fname, apt_lname, apt_minit, apt_contactno, apt_address, apt_patient_type, apt_time, end_time ,apt_visit_reason, status) 
                VALUES ('$fname', '$lname', '$minit', '$contact_no', '$address', '$patient_type', '$datetime', '$endtime', '$visit_reason', '2')")
                or die ("failed to query insertion in the appointment table". mysqli_error());
    
        if($result){
            $response = "Appointment Added Successfully";
            exit(json_encode($response));
        }
    }
    else{
        $fname = $_POST["first_name"];
        $lname = $_POST["last_name"];
        $minit = $_POST["middle_init"];
        $contact_no = $_POST["contact_no"];
        $address = $_POST["address"];
        $patient_type = $_POST["patient_type"];
        $date = $_POST["updatedate"];
        $time = $_POST["time"];
        $datetime = $date ." ". $time; 
        $endtime  = date('Y-m-d H:i',strtotime('+1 hour',strtotime($datetime)));
        $visit_reason = $_POST["visit_reason"];
        $response = "";

        $result = mysqli_query($conn,"UPDATE tbl_appointment SET apt_fname = '$fname', apt_lname = '$lname', apt_minit = '$minit',
                                     apt_contactno = '$contact_no', apt_address = '$address', apt_patient_type = '$patient_type', 
                                     apt_time = '$datetime', end_time = '$endtime', apt_visit_reason = '$visit_reason' 
                                                WHERE id = '$apt_id' ")
                or die ("failed to query update in the appointment table". mysqli_error());
        $response = "Appointment Updated Successfully";
        exit(json_encode($response));
    }
?>  
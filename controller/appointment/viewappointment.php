<?php
    require_once($_SERVER['DOCUMENT_ROOT'] . '/controller/connection/conn.php');
    $json = array();
    $sqlQuery = "SELECT * FROM tbl_appointment ORDER BY apt_id";

    $result = mysqli_query($conn, $sqlQuery);
    $eventArray = array();
    while ($row = mysqli_fetch_assoc($result)) {
        array_push($eventArray, $row);
    }
    mysqli_free_result($result);
    mysqli_close($conn);
    echo json_encode($eventArray);
?>
<?php
    require './vendor/autoload.php';

    use Carbon\Carbon;
    use Carbon\CarbonInterval;

    require_once($_SERVER['DOCUMENT_ROOT'] . '/controller/connection/conn.php');
    $json = array();
    $sqlQuery = "SELECT * FROM tbl_appointment WHERE deleted_at IS NULL and status=2 ORDER BY id";

    $result = mysqli_query($conn, $sqlQuery);
    $eventArray = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $row['apt_end_time'] = Carbon::parse($row['end_time'])->format('h:ia');
        array_push($eventArray, $row);
    }
    mysqli_free_result($result);
    mysqli_close($conn);
    echo json_encode($eventArray);
?>
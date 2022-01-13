<?php
    require_once('./class/reports.php');

    $class = new Reports;

    $reports = $class->getData();
    
    if($reports == 500){
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode([
            'message' => 'undefined field',
            'field' => 'from',
        ],500);
    }else{
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode([
            'rows' => count($reports),
            'data' => $reports,
        ],200);
    }

?>
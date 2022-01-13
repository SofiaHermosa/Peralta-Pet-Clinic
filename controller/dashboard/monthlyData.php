<?php
    require_once('./class/dashboard.php');
    
    $class = new Dashboard;
    $dashboard = $class->getDashboardMonthlyData();

    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($dashboard);
?>
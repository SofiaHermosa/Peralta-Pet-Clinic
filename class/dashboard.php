<?php
    class Dashboard {

        public $connection, $appointment, $inquires, $months, $servicesClass;

        public function __construct(){
            require $_SERVER['DOCUMENT_ROOT'] . '/controller/connection/conn.php';
            require_once('./class/services.php');
    
            $this->servicesClass = new Services;
            $this->connection = $conn;
            $this->months = array(
                'January',
                'February',
                'March',
                'April',
                'May',
                'June',
                'July ',
                'August',
                'September',
                'October',
                'November',
                'December',
            );
        } 

        public function getAppointmentPerMonth(){
            $services = $this->servicesClass->getServices()->services;
            $monthlyDataArray = array();
            $newData = array();
            $colors = array(
                'rgba(26, 95, 122, 0.4)',
                'rgba(249, 151, 93, 0.4)',
                'rgba(239, 47, 136, 0.4)',
                'rgba(136, 67, 242, 0.4)',
                'rgba(200, 92, 92, 0.4)',
                'rgba(244, 115, 64, 0.4)',
                'rgba(178, 234, 112, 0.4)'
            );

            $flag = 0;  

            foreach($services as $key => $service){
                $serviceName = $service['name'];
                $graphDateSet = new stdClass();
                $dataPerServices = array();
                $sqlQuery = "SELECT count(*) as month_count, MONTHNAME(apt_time) as month FROM tbl_appointment WHERE apt_visit_reason='$serviceName' and deleted_at IS NULL GROUP BY MONTH(apt_time)";

                $result = mysqli_query($this->connection, $sqlQuery);
               

                while ($row = mysqli_fetch_assoc($result)) {
                    $monthlyDataArray[$row['month']] = $row['month_count'];
                }

                foreach($this->months as $month){
                    $dataPerServices[] = $monthlyDataArray[$month] ?? 0;
                }
                $randomColor = $colors[$flag] ?? $colors[array_rand($colors)];
                $graphDateSet->label = $serviceName;
                $graphDateSet->data = $dataPerServices;
                $graphDateSet->backgroundColor = $randomColor;
                $graphDateSet->backdropColor = $randomColor;
                $graphDateSet->borderColor = $randomColor;
                $graphDateSet->fill = true;
                $graphDateSet->tension = 0.4;

                $newData['counts'][] = $graphDateSet;
                $flag++;
            }

            foreach($this->months as $month){
                $newData['month'][] = $month;
            }

            $this->appointment = $newData;
        }

        public function getInquiriesPerMonth(){
            $sqlQuery = "SELECT count(*) as month_count, MONTHNAME(DATE_FORMAT(created_at, '%Y-%m-%d')) as month FROM tbl_inquiries GROUP BY MONTH(DATE_FORMAT(created_at, '%Y-%m-%d'))";

            $result = mysqli_query($this->connection, $sqlQuery);
            $monthlyDataArray = array();
            $newData = array();

            while ($row = mysqli_fetch_assoc($result)) {
                $monthlyDataArray[$row['month']] = $row['month_count'];
            }

            foreach($this->months as $month){
                $newData['month'][] = $month;
                $newData['counts'][] = $monthlyDataArray[$month] ?? 0;
            }

            $this->inquiries = $newData;
        }

        public function getDashboardMonthlyData(){
            $this->getAppointmentPerMonth();
            $this->getInquiriesPerMonth();

            return array(
                'appointment' => $this->appointment,
                'inquiries'   => $this->inquiries
            );
        }
    }
?>        
<?php
    class Reports{

        public $connection, $appointmentClass, $servicesClass, $userClass;

        public function __construct(){
            require $_SERVER['DOCUMENT_ROOT'] . '/controller/connection/conn.php';
            require $_SERVER['DOCUMENT_ROOT'] . '/class/appointment.php';
            require $_SERVER['DOCUMENT_ROOT'] . '/class/services.php';
            require $_SERVER['DOCUMENT_ROOT'] . '/class/patient.php';

            $this->appointmentClass = new Appointment;
            $this->userClass        = new Patients;
            $this->connection = $conn;
            
        } 

        public function getData(){

            if(!isset($_REQUEST['from'])){
               return 500;
            }
            
            if($_REQUEST['from'] == 'appointment'){
                $startDate = isset($_REQUEST['start_date']) && !empty($_REQUEST['start_date']) ? date("Y-m-d", strtotime($_REQUEST['start_date'])) : null;
                $endDate = isset($_REQUEST['end_date']) && !empty($_REQUEST['end_date']) ? date("Y-m-d", strtotime($_REQUEST['end_date'])) : null;
                $patient = isset($_REQUEST['patient']) && !empty($_REQUEST['patient']) ? $_REQUEST['patient'] : null;
                $status = isset($_REQUEST['status']) && !empty($_REQUEST['status']) ? $_REQUEST['status'] : null;
                $service = isset($_REQUEST['service']) && !empty($_REQUEST['service']) ? $_REQUEST['service'] : null;

                $data = $this->appointmentClass->getAppointment('', false, true)->appointment;
                $newObject = [];
                if(!empty($startDate) || !empty($endDate) || !empty($status) || !empty($service) || !empty($patient)){
                    if(!empty($startDate) || !empty($endDate)){
                        $filteredObject = array_filter($data, function ($value) use ($startDate, $endDate) {
                            $aptDate = date("Y-m-d", strtotime($value['apt_time']));
                            return $aptDate >= $startDate && $aptDate <= $endDate;
                        });

                        $data = $filteredObject;
                    }

                    if(!empty($patient)){
                        $filteredObject = $this->filterDataBy($data, $patient, 'user_id');

                        $data = $filteredObject;
                    }

                    if(!empty($service)){
                        $filteredObject = $this->filterDataBy($data, $service, 'apt_visit_reason');

                        $data = $filteredObject;
                    }

                    if(!empty($status)){
                        $filteredObject = $this->filterDataBy($data, $status, 'status');

                        $data = $filteredObject;
                    }

                    foreach($data as $row){
                        array_push($newObject, $row);
                    }

                    $data = $newObject;
    
                }
    
                return $data;
            }

            if($_REQUEST['from'] == 'patient'){
                $startDate = isset($_REQUEST['user_start_date']) && !empty($_REQUEST['user_start_date']) ? date("Y-m-d", strtotime($_REQUEST['user_start_date'])) : null;
                $endDate = isset($_REQUEST['user_end_date']) && !empty($_REQUEST['user_end_date']) ? date("Y-m-d", strtotime($_REQUEST['user_end_date'])) : null;
                $gender = isset($_REQUEST['gender']) && !empty($_REQUEST['gender']) ? $_REQUEST['gender'] : null;
                $data = $this->userClass->getPatients();
                $newObject = [];

                $filteredObject = array_filter($data, function ($value) {
                    return $value['user_type'] == 2;
                });

                $data = $filteredObject;

                if(!empty($startDate) || !empty($endDate) || !empty($gender)){
                    if(!empty($startDate) || !empty($endDate)){
                        $filteredObject = array_filter($data, function ($value) use ($startDate, $endDate) {
                            $aptDate = date("Y-m-d", strtotime($value['created_at']));
                            return $aptDate >= $startDate && $aptDate <= $endDate;
                        });

                        $data = $filteredObject;
                    }

                    if(!empty($gender)){
                        $filteredObject = $this->filterDataBy($data, $gender, 'gender');

                        $data = $filteredObject;
                    }
                }

                foreach($data as $row){
                    array_push($newObject, $row);
                }

                $data = $newObject;
                
                return $data;
            }
        }

        public function filterDataBy(array $array, $string, $column){
            $filteredObject = [];

            $data = array_filter($array, function ($value) use ($string, $column) {
                return $value[$column] == $string;
            });
    
            $filteredObject = $data;
            

            return $filteredObject;
        }

        
    }

?>
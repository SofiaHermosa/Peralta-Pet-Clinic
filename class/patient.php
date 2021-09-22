<?php
    class Patients{
        public $connection, $patients;
        
        public function __construct(){
            require $_SERVER['DOCUMENT_ROOT'] . '/controller/connection/conn.php';

            $this->connection = $conn;
        }

        public function getPatients(){
            $sqlQuery = "SELECT * FROM tbl_appointment WHERE status = 1 GROUP BY apt_contactno, email ORDER BY apt_id";

            $result = mysqli_query($this->connection, $sqlQuery);
            $patientsArray = array();

            while ($row = mysqli_fetch_array($result)) {
                array_push($patientsArray, $row);
            }

            mysqli_free_result($result);
            mysqli_close($this->connection);

            $this->patients = $patientsArray;

            return $this->patients;
        }
    }
?>        
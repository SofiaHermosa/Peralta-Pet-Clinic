<?php
    class Patients{
        public $connection, $patients;
        
        public function __construct(){
            require $_SERVER['DOCUMENT_ROOT'] . '/controller/connection/conn.php';

            $this->connection = $conn;
        }

        public function getPatients(){
            $sqlQuery = "SELECT * FROM tbl_users WHERE deleted_at IS NULL";

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

        public function archivePatient(){
            $id = $_POST['id'] ?? null ;

            $result = mysqli_query($this->connection,"UPDATE tbl_users SET deleted_at=now() WHERE id = '$id' ")
                    or die ("failed to query update in the users table");

            return $this;        
        }
    }
?>        
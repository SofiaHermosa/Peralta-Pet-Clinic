<?php
    class Services{
        
        public $connection, $services;

        public function __construct(){
            require $_SERVER['DOCUMENT_ROOT'] . '/controller/connection/conn.php';

            $this->connection = $conn;
        }
        
        public function getServices(){
            $sqlQuery = "SELECT * FROM tbl_services WHERE deleted_at IS NULL ORDER BY name DESC";

            $result = mysqli_query($this->connection, $sqlQuery);
            $servicesArray = array();

            while ($row = mysqli_fetch_assoc($result)) {
                array_push($servicesArray, $row);
            }

            $this->services = $servicesArray;

            return $this;
        }

        public function updateCreateServices(){
            $logo = $_POST['logo'];
            $name = $_POST['name'];
            $desc = base64_encode($_POST['description']);
            $id   = $_POST['id'] ?? null;

            if(!empty($id)){
                $result = mysqli_query($this->connection,"UPDATE tbl_services SET logo='$logo', name='$name', description='$desc' WHERE section = '$this->section' ")
                    or die ("failed to query update in the services table");
            }else{
                $result = mysqli_query($this->connection,"INSERT INTO tbl_services (logo, name, description) VALUES ('$logo', '$name', '$desc')")
                    or die ("failed to query update in the services table");
            }

            return $this;
        }
    }
?>    
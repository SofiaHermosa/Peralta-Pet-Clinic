<?php
    class Services{
        
        public $connection, $services, $intervals;

        public function __construct(){
            require $_SERVER['DOCUMENT_ROOT'] . '/controller/connection/conn.php';

            $this->connection = $conn;
        }
        
        public function getServices($type=2){
            $sqlQuery = "SELECT * FROM tbl_services WHERE type='$type' AND deleted_at IS NULL ORDER BY name DESC";

            if($type == 'all'){
                $sqlQuery = "SELECT * FROM tbl_services WHERE  deleted_at IS NULL ORDER BY name DESC";
            }

            $result = mysqli_query($this->connection, $sqlQuery);
            $servicesArray = array();

            while ($row = mysqli_fetch_assoc($result)) {
                array_push($servicesArray, $row);
            }

            $this->services = $servicesArray;

            return $this;
        }

        public function getTimeIntervals(){
            $sqlQuery = "SELECT * FROM tbl_services WHERE deleted_at IS NULL ORDER BY name DESC";

            $result = mysqli_query($this->connection, $sqlQuery);
            $intervalsArray = array();

            while ($row = mysqli_fetch_assoc($result)) {
                $time = [0,0];
                if(!empty($row['time_interval'])){
                    $time = explode(':', $row['time_interval']);
                }
                $intervalsArray[$row['id']] = array(
                    'hours' => $time[0] ?? 0,
                    'mins'  => $time[1] ?? 30
                );
            }

            $this->intervals = $intervalsArray;

            return $this;
        }

        public function updateCreateServices(){
            $name = $_POST['name'];
            $type = $_POST['type'];
            $interval = $_POST['interval'];
            $price = $_POST['price'];
            $desc = base64_encode($_POST['description']);
            $id   = $_POST['id'] ?? null;

            if(isset($_FILES['imgs'])){
                $storedFile = $this->storeToFolder('imgs');      
                $logo = $storedFile[0];
            }

            if(!empty($id)){
                if(isset($_FILES['imgs'])){
                    $result = mysqli_query($this->connection,"UPDATE tbl_services SET logo='$logo', name='$name', time_interval='$interval', price='$price', description='$desc', type='$type' WHERE id='$id'")
                    or die(mysqli_error($this->connection));
                }else{
                    $result = mysqli_query($this->connection,"UPDATE tbl_services SET name='$name', time_interval='$interval', price='$price', description='$desc', type='$type' WHERE id='$id'")
                    or die(mysqli_error($this->connection));
                }
            }else{
                $result = mysqli_query($this->connection,"INSERT INTO tbl_services (logo, name, description, time_interval, price, type) VALUES ('$logo', '$name', '$desc', '$interval', '$price', '$type')")
                    or die ("failed to query update in the services table");
            }
            
            return $this;
        }

        public function getContent($id){
            $sqlQuery = "SELECT * FROM tbl_services WHERE id = '$id'";

            $result = mysqli_query($this->connection, $sqlQuery);
            $contentArray = array();
            
            while ($row = mysqli_fetch_assoc($result)) {
                array_push($contentArray, $row['logo']);
            }

            return $contentArray;
        }

        public function storeToFolder($name){
            
            $key = 0;
            $files = array();
            
            if (array_sum($_FILES[$name]['error']) > 0)
            {
                $images = $this->getContent($_POST['id']);
                return $images;
            }else{
                
                foreach ($_FILES[$name]['name'] as $filename) 
                {
                    $info = pathinfo($filename);
                    $ext = $info['extension'];
                    $newname = uniqid().".".$ext; 

                    $target = 'uploads/services/'.$newname;
                    move_uploaded_file($_FILES[$name]['tmp_name'][$key], $target);

                    $key++;

                    array_push($files, $target);
                } 

                return $files;
            }
        }


        public function archiveServices(){
            $id = $_POST['id'] ?? null ;

            $result = mysqli_query($this->connection,"UPDATE tbl_services SET deleted_at=now() WHERE id = '$id' ")
                    or die ("failed to query update in the services table");

            return $this;        
        }
    }
?>    
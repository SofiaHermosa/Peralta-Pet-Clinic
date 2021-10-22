<?php
    class Teams{
        
        public $connection, $teams;

        public function __construct(){
            require $_SERVER['DOCUMENT_ROOT'] . '/controller/connection/conn.php';

            $this->connection = $conn;
        }
        
        public function getTeams(){
            $sqlQuery = "SELECT * FROM tbl_teams WHERE deleted_at IS NULL ORDER BY name DESC";

            $result = mysqli_query($this->connection, $sqlQuery);
            $teamsArray = array();

            while ($row = mysqli_fetch_assoc($result)) {
                array_push($teamsArray, $row);
            }

            $this->teams = $teamsArray;

            return $this;
        }

        public function storePicToFolder($name){
            
            $key = 0;
            $files = array();
            
            if (array_sum($_FILES[$name]['error']) > 0)
            {
                return '';
            }else{
                
                foreach ($_FILES[$name]['name'] as $filename) 
                {
                    $info = pathinfo($filename);
                    $ext = $info['extension'];
                    $newname = uniqid().".".$ext; 

                    $target = 'uploads/teams/'.$newname;
                    move_uploaded_file($_FILES[$name]['tmp_name'][$key], $target);

                    $key++;

                    array_push($files, $target);
                } 

                return $files;
            }
        }

        public function updateCreateTeams(){
            $img = "";

            if(isset($_FILES['img'])){
                $storedFile = $this->storePicToFolder('img');      

                $img = $storedFile[0];
            }


            $name = $_POST['name'];
            $desc = base64_encode($_POST['description']);
            $id   = $_POST['id'] ?? null;

            if(!empty($id)){
                $result = mysqli_query($this->connection,"UPDATE tbl_teams SET name='$name', description='$desc' WHERE id = '$id' ")
                    or die ("failed to query update in the teams table");

                    if(!empty($img)){
                        $result = mysqli_query($this->connection,"UPDATE tbl_teams SET profile='$img' WHERE id = '$id' ")
                            or die ("failed to query update in the teams table");
                    }        
            }else{
                $result = mysqli_query($this->connection,"INSERT INTO tbl_teams (profile, name, description) VALUES ('$img', '$name', '$desc')")
                    or die ("failed to query insert in the teams table");
            }

            return $this;
        }

        public function archiveTeams(){
            $id = $_POST['id'] ?? null ;

            $result = mysqli_query($this->connection,"UPDATE tbl_teams SET deleted_at=now() WHERE id = '$id' ")
                    or die ("failed to query update in the teams table");

            return $this;        
        }
    }
?>    
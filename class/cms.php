<?php
    class CMS{

        public $connection, $section, $content;

        public function __construct(){
            require $_SERVER['DOCUMENT_ROOT'] . '/controller/connection/conn.php';

            $this->connection = $conn;
            $this->section    = $_POST['section'] ?? '';
        } 

        public function update(){
            $content = json_encode($this->content);
            $result = mysqli_query($this->connection,"UPDATE tbl_cms SET content='$content' WHERE section = '$this->section' ")
                    or die ("failed to query update in the cms table");
        }

        public function mutator(){

            if(isset($_FILES['imgs'])){
                $storedFile = $this->storeToFolder('imgs');      

                $this->content['images'] = $storedFile;
            }

            if(isset($_FILES['banner'])){
                $storedFile = $this->storeToFolder('banner');      

                $this->content['images'] = $storedFile;
            }

            if(isset($_POST['history'])){
                $this->content['history'] = base64_encode(trim($_POST['history']));
            }

            if(isset($_POST['comp_name'])){
                $this->content['comp_name'] = trim($_POST['comp_name']);
            }

            if(isset($_POST['comp_address'])){
                $this->content['comp_address'] = base64_encode(trim($_POST['comp_address']));
            }

            if(isset($_POST['comp_no'])){
                $this->content['comp_no'] = trim($_POST['comp_no']);
            }

            if(isset($_POST['comp_email'])){
                $this->content['comp_email'] = trim($_POST['comp_email']);
            }

            return $this; 
        }

        public function storeToFolder($name){
            
            $key = 0;
            $files = array();
            
            if (array_sum($_FILES[$name]['error']) > 0)
            {
                $images = json_decode($this->getContent($this->section)[0]['content']);
                return $images->images;
            }else{
                
                foreach ($_FILES[$name]['name'] as $filename) 
                {
                    $info = pathinfo($filename);
                    $ext = $info['extension'];
                    $newname = uniqid().".".$ext; 

                    $target = 'uploads/cms/'.$newname;
                    move_uploaded_file($_FILES[$name]['tmp_name'][$key], $target);

                    $key++;

                    array_push($files, $target);
                } 

                return $files;
            }
        }

        public function getContent($section){
            $sqlQuery = "SELECT * FROM tbl_cms WHERE section = '$section'";

            $result = mysqli_query($this->connection, $sqlQuery);
            $contentArray = array();
            
            while ($row = mysqli_fetch_assoc($result)) {
                array_push($contentArray, $row);
            }

            return $contentArray;
        }
    }

?>
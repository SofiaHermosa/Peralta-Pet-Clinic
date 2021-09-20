<?php
    class CMS{

        public $connection, $section, $content;

        public function __construct(){
            require_once($_SERVER['DOCUMENT_ROOT'] . '/controller/connection/conn.php');

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

            if($_POST['history'] != ''){
                $this->content['history'] = base64_encode(trim($_POST['history']));
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
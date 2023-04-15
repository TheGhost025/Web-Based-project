<?php

Class Upload_Image{
    private $uploadDir;
    private $image;
    private $tmpName;

    function __construct(){
        $this->image= '';
        //directory of file of uploads
        $this->uploadDir = $_SERVER['DOCUMENT_ROOT'].'/Web-Based-project/uploads';
    }

    function upload(){
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if($_FILES["image"]["error"]==UPLOAD_ERR_OK){
            //tmpname is The temporary filename of the file in which the uploaded file was stored on the server
            //name is name of file and which stores at database
            $this->tmpName = $_FILES["image"]["tmp_name"];
            $this->image = $_FILES["image"]["name"];
            //move image to the folder
            move_uploaded_file($this->tmpName,"$this->uploadDir/$this->image");
        }
        else{
            exit();
        }
    }
}
}

?>
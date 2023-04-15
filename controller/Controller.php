<?php 

include($_SERVER['DOCUMENT_ROOT']."/Web-Based-project/model/Upload.php");
include($_SERVER['DOCUMENT_ROOT']."/Web-Based-project/model/DB_Ops.php");

Class Controller {
    function connect_to_database(){
        $database = new Database("localhost","root","MAzen2017","project");
        $database->connect();
        $image = new Upload_Image();
        $image->upload();
    }
}

?>
<?php 

include($_SERVER['DOCUMENT_ROOT']."/Web-Based-project/model/Upload.php");

Class Controller {
    function connect_to_database(){
        $image = new Upload_Image();
        $image->upload();
    }
}

?>
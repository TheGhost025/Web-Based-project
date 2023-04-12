<?php 

include($_SERVER['DOCUMENT_ROOT']."/Web-Based-project/model/Upload.php");

Class Controller {
    function map_to_upload(){
        $image = new Upload_Image();
        $image->upload();
    }
}

?>
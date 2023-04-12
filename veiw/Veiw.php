<?php

include($_SERVER['DOCUMENT_ROOT']."/Web-Based-project/controller/Controller.php");

Class Veiw {
    function Upload(){
        $upload = new Controller();
        $upload->map_to_upload();
    }
}

?>
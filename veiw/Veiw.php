<?php

include($_SERVER['DOCUMENT_ROOT']."/Web-Based-project/controller/Controller.php");

Class Veiw {
    function connect(){
        $upload = new Controller();
        $upload->connect_to_database();
    }
}

?>
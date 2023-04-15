<?php 
$errorfeild= array();

if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(!((isset($_POST["name"])) &&  !empty($_POST["name"]))){
        $errorfeild[]="name";
    }
    if(!((isset($_POST["username"])) &&  !empty($_POST["username"]))){
        $errorfeild[]="username";
    }
    if(!((isset($_POST["birthdate"])) &&  !empty($_POST["birthdate"]))){
        $errorfeild[]="birthdate";
    }
    
    if(!((isset($_POST["phone"])) &&  !empty($_POST["phone"])) && !(preg_match('/^[0-9]{11}+$/', $_POST["phone"]))){
        $errorfeild[]="phone";
    }

    if(!((isset($_POST["address"])) &&  !empty($_POST["address"]))){
        $errorfeild[]="address";
    }
    $pass = $_POST['password'];
    if((!(preg_match('/\d/', $pass)) || !(preg_match('/[!@#\$%\^&\*]/', $pass)) || strlen($pass) < 8)){
        $errorfeild[]="password";
    }
    if($_POST["password"] != $_POST["conf_pass"]){
        $errorfeild[]="conf_pass";
    }
    if(!((isset($_POST["email"])) &&  !empty($_POST["email"]))){
        $errorfeild[]="email";
    }

    if (!empty($errorfeild)) {
        // return error messages
        echo json_encode(array('success' => false, 'errorfeild' => $errorfeild));
        exit;
}

    echo json_encode(array('success' => true));
    exit;
}
?>
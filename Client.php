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
    if(!((isset($_POST["password"])) &&  !empty($_POST["password"]) && !(preg_match('@[0-9]@', $_POST["password"])) && !(preg_match('@[^\w]@', $_POST["password"])) && strlen($_POST["password"]) < 8)){
        $errorfeild[]="password";
    }
    if(!((isset($_POST["conf_pass"])) &&  !empty($_POST["conf_pass"]) && $_POST["password"] != $_POST["conf_pass"])){
        $errorfeild[]="conf_pass";
    }
    if($_FILES['image']['type'] != "jpg" || $_FILES['image']['type'] != "jpeg"){
        $errorfeild[]="image";
    }
    if(!((isset($_POST["email"])) &&  !empty($_POST["email"]) && !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL))){
        $errorfeild[]="email";
    }

    if (!empty($errorfeild)) {
        // return error messages
        header('Content-Type: application/json');
        echo json_encode(array('success' => false, 'errorfeild' => $errorfeild));
        exit;
}

    echo json_encode(array('success' => true));
    exit;
}
?>
<?php

//Connection
$server_name = "localhost";
$name = "root";
$pass = "";
$database_name = "registrationformdatabase";

$conn= mysqli_connect($server_name, $name, $pass)
     or die("Could not connect: " . mysqli_error($conn));


//select database 
mysqli_select_db($conn , $database_name) 
     or die ('db will not open' . mysqli_error($conn));


// Check if the form is submitted using post method  
if ($_SERVER["REQUEST_METHOD"] == "POST") {
//receives posted value entered in textbox called username
// and store it in the variable $username
  $fullname = $_POST["name"];
  $username = $_POST["username"];
  $birthdate = $_POST["birthdate"];
  $phone= $_POST["phone"];
  $address = $_POST["address"];
  $password = $_POST["password"];
  $confirmpass = $_POST["conf_pass"];
  $image = $_FILES["image"]["name"];
  $email = $_POST["email"];


//search for similar usernames
$query = "SELECT * FROM registrationaccounts WHERE user_name = '$username'";
  $result = mysqli_query($conn, $query) or die("Invalid query");


//check If the user inputs a username that exists before
if (mysqli_num_rows($result) > 0) {
    echo "<script>alert('Username already exists,choose another username.')</script>";
  }


//if the username is not registered before
//Insert the user data in database
else {

    $query = "INSERT INTO registrationaccounts (full_name,user_name,birthdate,phone,address,
    password,confirm_password,user_image,email) VALUES ('$fullname','$username','$birthdate'
    ,'$phone','$address','$password','$confirmpass','$image','$email')";

//check if the query executed successfully
    if (mysqli_query($conn, $query)) {
      $message ="Registered successfully";
       echo "<script>
          Swal.fire({
            title: 'Success',
            text: '$message',
            icon: 'success',
            confirmButtonText: 'OK'
          })
        </script>";

//if the query not executed successfully 
//display the error message returned by database
    } else {
      $message ="Error: " . $query . "<br>" . mysqli_error($conn);
      echo "<script>
          Swal.fire({
            title: 'Error',
            text: '$message',
            icon: 'error',
            confirmButtonText: 'OK'
          })
        </script>";
    }
  }

}


// close connection
mysqli_close($conn);



?>
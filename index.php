<html>
    <head>
        <title>Registration Form</title>
        <link rel="icon" type="image/png" href="images/logo.png"/>
        <link rel="stylesheet" href="./style/index.css" />
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    </head>
    <body style="margin:0px;">

    <?php include("header.php"); ?>

    <script src="api.js"></script>


    <form class="mb-3 form_container" id="form" method="post" enctype="multipart/form-data">
        <div class="form-floating mb-3">
            <input type="text" name="name" id="name" class="form-control" placeholder="text"/>
            <label for="name" class="form-label">Full Name</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="username" id="username" class="form-control" placeholder="text"/>
            <label for="username" class="form-label">UserName</label>
        </div>
        <div class="form-floating mb-3">

            <input type="date" name="birthdate" id="birthdate" class="form-control"/>
            <label for="birthdate" class="form-label">Birth Date</label>
            <div id="actors"></div>
            <button class="button btn--one" type="button" id="button">Check</button>

        </div>
        <div class="form-floating mb-3">
            <input type="tel" name="phone" id="phone" class="form-control" placeholder="tel"/>
            <label for="phone" class="form-label">Phone Number</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="address" id="address" class="form-control" placeholder="text"/>
            <label for="address" class="form-label">Address</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" name="password" id="password" class="form-control" placeholder="Password"/>
            <label for="password">Password</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" name="conf_pass" id="conf_pass" class="form-control" placeholder="Password"/>
            <label for="conf_pass" class="form-label">Confirm Password</label>
        </div>
        <div class="form-floating mb-3">
            <input type="file" name="image" id="image" class="form-control" placeholder="Image"/>
            <label for="image" class="form-label">Upload Image</label>
        </div>
        <div class="form-floating mb-3">
            <input type="email" name="email" id="email" class="form-control" placeholder="name@example.com"/>
            <label for="email" class="form-label">Email</label>
        </div>
        <button class="button main" type="submit">Submit</button>
    </form>

    <?php include("footer.php"); 
        include($_SERVER['DOCUMENT_ROOT']."/Web-Based-project/veiw/Veiw.php");
        $view = new Veiw();
        $view->connect();
    ?>

    <script>
        const button = document.getElementById('button');
        button.addEventListener('click', function() {
            const birthdate = document.getElementById("birthdate").value;
            getActors(birthdate);
        });

        document.getElementById("form").addEventListener('submit', function(e) {
        e.preventDefault(); 

        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'Client.php');
        xhr.onload = function() {
        if (xhr.status === 200) {
            var response = JSON.parse(xhr.responseText);
            if (response.success) {
                $('#name').addClass('is-valid');
                $('#username').addClass('is-valid');
                $('#phone').addClass('is-valid');
                $('#birthdate').addClass('is-valid');
                $('#address').addClass('is-valid');
                $('#password').addClass('is-valid');
                $('#conf_pass').addClass('is-valid');
                $('#image').addClass('is-valid');
                $('#email').addClass('is-valid');
                
                var xh = new XMLHttpRequest();
                xh.open('POST', 'model/DB_Ops.php');
                xh.onload = function() {
                if (xh.status === 200) {
                    var response = JSON.parse(xh.responseText);
                    if (response.success) {
                        if(response.message === "Registered successfully"){
                            Swal.fire({
                                title: 'Success',
                                text: response.message,
                                icon: 'success',
                                confirmButtonText: 'OK'
                            })
                        }
                        else {
                            Swal.fire({
                                title: 'Error',
                                text: response.message,
                                icon: 'error',
                                confirmButtonText: 'OK'
                            })
                        }
                        
                    } else {
                        alert('Username already exists,choose another username.')
                    }
                }
        };
        
                xh.send(new FormData(document.getElementById("form")));
            } else {
                if(response.errorfeild.includes("name")){
                    $(document).ready(function() {
                        $('#name').addClass('is-invalid');
                      });
                }
                else{
                    $(document).ready(function() {
                        $("#name").addClass("is-valid");
                      });
                }

                if(response.errorfeild.includes("username")){
                    $(document).ready(function() {
                        $('#username').addClass('is-invalid');
                      });
                }
                else{
                    $(document).ready(function() {
                        $('#username').addClass('is-vlaid');
                      });
                }

                if(response.errorfeild.includes("birthdate")){
                    $(document).ready(function() {
                        $('#birthdate').addClass('is-invalid');
                      });
                }
                else{
                    $(document).ready(function() {
                        $('#birthdate').addClass('is-valid');
                      });
                }



                if(response.errorfeild.includes("phone")){
                    $(document).ready(function() {
                        $('#phone').addClass('is-invalid');
                      });
                }
                else{
                    $(document).ready(function() {
                        $('#phone').addClass('is-valid');
                      });
                }

                if(response.errorfeild.includes("address")){
                    $(document).ready(function() {
                        $('#address').addClass('is-invalid');
                      });
                }
                else{
                    $(document).ready(function() {
                        $('#address').addClass('is-valid');
                      });
                }

                if(response.errorfeild.includes("password")){
                    $(document).ready(function() {
                        $('#password').addClass('is-invalid');
                      });
                }
                else{
                    $(document).ready(function() {
                        $('#password').addClass('is-valid');
                      });
                }

                if(response.errorfeild.includes("conf_pass")){
                    $(document).ready(function() {
                        $('#conf_pass').addClass('is-invalid');
                      });
                }
                else{
                    $(document).ready(function() {
                        $('#conf_pass').addClass('is-valid');
                      });
                }

                if(response.errorfeild.includes("image")){
                    $(document).ready(function() {
                        $('#image').addClass('is-invalid');
                      });
                }
                else{
                    $(document).ready(function() {
                        $('#image').addClass('is-valid');
                      });
                }

                if(response.errorfeild.includes("email")){
                    $(document).ready(function() {
                        $('#email').addClass('is-invalid');
                      });
                }
                else{
                    $(document).ready(function() {
                        $('#email').addClass('is-valid');
                      });
                }
            }
        }
        };
        
        xhr.send(new FormData(document.getElementById("form")));
});
<?php 
        
    ?>
    </script>
    </body>
</html>
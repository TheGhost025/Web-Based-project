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

    <?php include("header.php"); 
     include("Client.php");
    ?>

    <form class="mb-3 form_container" id="form" method="post" enctype="multipart/form-data">
        <div class="form-floating mb-3">
            <input type="text" name="name" id="name" class="form-control" placeholder="text"/>
            <label for="name" class="form-label">Full Name</label>
            <?php 
                if(in_array("name",$errorfeild)){
                    echo "<script>
                    $(document).ready(function() {
                        $('#name').addClass('is-invlaid');
                      });
                    </script>";
                }
                else{
                    echo "<script>
                    $(document).ready(function() {
                        $('#name').addClass('is-vlaid');
                      });
                    </script>";
                }
            ?>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="username" id="username" class="form-control" placeholder="text"/>
            <label for="username" class="form-label">UserName</label>
            <?php 
                if(in_array("username",$errorfeild)){
                    echo "<script>
                    $(document).ready(function() {
                        $('#username').addClass('is-invlaid');
                      });
                    </script>";
                }
                else{
                    echo "<script>
                    $(document).ready(function() {
                        $('#username').addClass('is-vlaid');
                      });
                    </script>";
                }
                ?>
        </div>
        <div class="form-floating mb-3">

            <input type="date" name="birthdate" id="birthdate" class="form-control"/>
            <label for="birthdate" class="form-label">Birth Date</label>
            <?php 
                if(in_array("birthdate",$errorfeild)){
                    echo "<script>
                    $(document).ready(function() {
                        $('#birthdate').addClass('is-invlaid');
                      });
                    </script>";
                }
                else{
                    echo "<script>
                    $(document).ready(function() {
                        $('#birthdate').addClass('is-vlaid');
                      });
                    </script>";
                }
                ?>
            <input type="submit" class="button btn--one" name="check" value="Check" />
        </div>
        <div class="form-floating mb-3">
            <input type="tel" name="phone" id="phone" class="form-control" placeholder="tel"/>
            <label for="phone" class="form-label">Phone Number</label>
            <?php 
                if(in_array("phone",$errorfeild)){
                    echo "<script>
                    $(document).ready(function() {
                        $('#phone').addClass('is-invlaid');
                      });
                    </script>";
                }
                else{
                    echo "<script>
                    $(document).ready(function() {
                        $('#phone').addClass('is-vlaid');
                      });
                    </script>";
                }
                ?>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="address" id="address" class="form-control" placeholder="text"/>
            <label for="address" class="form-label">Address</label>
            <?php 
                if(in_array("address",$errorfeild)){
                    echo "<script>
                    $(document).ready(function() {
                        $('#address').addClass('is-invlaid');
                      });
                    </script>";
                }
                else{
                    echo "<script>
                    $(document).ready(function() {
                        $('#address').addClass('is-vlaid');
                      });
                    </script>";
                }
                ?>
        </div>
        <div class="form-floating mb-3">
            <input type="password" name="password" id="password" class="form-control" placeholder="Password"/>
            <label for="password">Password</label>
            <?php
            if(in_array("password",$errorfeild)){
                    echo "<script>
                    $(document).ready(function() {
                        $('#password').addClass('is-invlaid');
                      });
                    </script>";
                }
                else{
                    echo "<script>
                    $(document).ready(function() {
                        $('#password').addClass('is-vlaid');
                      });
                    </script>";
                }
                ?>
        </div>
        <div class="form-floating mb-3">
            <input type="password" name="conf_pass" id="conf_pass" class="form-control" placeholder="Password"/>
            <label for="conf_pass" class="form-label">Confirm Password</label>
            <?php
            if(in_array("conf_pass",$errorfeild)){
                    echo "<script>
                    $(document).ready(function() {
                        $('#conf_pass').addClass('is-invlaid');
                      });
                    </script>";
                }
                else{
                    echo "<script>
                    $(document).ready(function() {
                        $('#conf_pass').addClass('is-vlaid');
                      });
                    </script>";
                }
                ?>
        </div>
        <div class="form-floating mb-3">
            <input type="file" name="image" id="image" class="form-control" placeholder="Image"/>
            <label for="image" class="form-label">Upload Image</label>
            <?php
            if(in_array("image",$errorfeild)){
                    echo "<script>
                    $(document).ready(function() {
                        $('#image').addClass('is-invlaid');
                      });
                    </script>";
                }
                else{
                    echo "<script>
                    $(document).ready(function() {
                        $('#image').addClass('is-vlaid');
                      });
                    </script>";
                }
                ?>
        </div>
        <div class="form-floating mb-3">
            <input type="email" name="email" id="email" class="form-control" placeholder="name@example.com"/>
            <label for="email" class="form-label">Email</label>
            <?php
            if(in_array("email",$errorfeild)){
                    echo "<script>
                    $(document).ready(function() {
                        $('#email').addClass('is-invlaid');
                      });
                    </script>";
                }
                else{
                    echo "<script>
                    $(document).ready(function() {
                        $('#email').addClass('is-vlaid');
                      });
                    </script>";
                }
                ?>
        </div>
        <button class="button main">Submit</button>
    </form>
    <script>
        document.getElementById("form").addEventListener('click', function(e) {
        e.preventDefault(); 
});
    </script>
    <?php include("footer.php"); 
    if(!$errorfeild){
        include($_SERVER['DOCUMENT_ROOT']."/Web-Based-project/veiw/Veiw.php");
        $veiw = new Veiw();
        $veiw->connect();
    }
    ?>
    </body>
</html>

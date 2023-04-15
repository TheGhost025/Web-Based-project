<html>
    <head>
        <title>Registration Form</title>
        <link rel="icon" type="image/png" href="images/logo.png"/>
        <link rel="stylesheet" href="./style/index.css" />
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </head>
    <body style="margin:0px;">

    <?php include("header.php"); ?>

    <form class="mb-3 form_container" method="post" enctype="multipart/form-data">
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
            <input type="submit" class="button btn--one" name="check" value="Check" />
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
        <button class="button main">Submit</button>
    </form>

    <?php include("footer.php");
    include("API_Ops.php");
    $date = strtotime($_POST['birthdate']);
    if(isset($_POST['check'])) {
        getActorsBio((int)date('m',$date), (int)date('d',$date));
    }
    include($_SERVER['DOCUMENT_ROOT']."/Web-Based-project/veiw/Veiw.php");
    $veiw = new Veiw();
    $veiw->connect();
    ?>
    </body>
</html>

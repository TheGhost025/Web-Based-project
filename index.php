<html>
    <head>
        <title>Registration Form</title>
        <link rel="icon" type="image/png" href="images/logo.png"/>
        <link rel="stylesheet" href="./style/index.css" />
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.js"></script>
  	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css">
    </head>
    <body style="margin:0px;">

    <?php include("header.php"); ?>

    <form class="form_container" method="post" enctype="multipart/form-data">
        <div>
            <label for="name">Full Name:</label>
            <input type="text" name="name" id="name" />
        </div>
        <div>
            <label for="username">UserName:</label>
            <input type="text" name="username" id="username" />
        </div>
        <div>
            <label for="birthdate">Birth Date:</label>
            <input type="date" name="birthdate" id="birthdate" />
            <button class="button btn--one">Check</button>
        </div>
        <div>
            <label for="phone">Phone Number:</label>
            <input type="tel" name="phone" id="phone" />
        </div>
        <div>
            <label for="address">Address:</label>
            <input type="text" name="address" id="address" />
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" />
        </div>
        <div>
            <label for="conf_pass">Confirm Password:</label>
            <input type="password" name="conf_pass" id="conf_pass" />
        </div>
        <div>
            <label for="image">Upload Image:</label>
            <input type="file" name="image" id="image" />
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" />
        </div>
        <button class="button main">Submit</button>
    </form>

    <?php include("footer.php"); 
    include("DB_Ops.php");
    include($_SERVER['DOCUMENT_ROOT']."/Web-Based-project/veiw/Veiw.php");
    $veiw = new Veiw();
    $veiw->Upload();
    ?>
    </body>
</html>

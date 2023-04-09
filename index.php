<html>
    <head>
        <title>Registration Forn</title>
        <link rel="icon" type="image/png" href="images/logo.png"/>
        <link rel="stylesheet" href="./style/index.css" />
    </head>
    <body style="margin:0px;">

    <?php include("header.php"); ?>

    <form class="form_container">
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
        <button type="submit">Submit</button>
    </form>

    <?php include("footer.php"); ?>
    </body>
</html>
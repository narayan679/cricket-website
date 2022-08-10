<?php include('server.php') ?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/style_del.css">
        <link rel="stylesheet" href="css/main.css">
        <title>FCC | Home</title>
        <link rel="icon" href="images/icon.ico" />
    </head>
    <body id="bg" background="images/back.jpg">
        <div id="header">
            <img id="logo" src="images/logo.png" alt="logo" />
            <h1>Francis Cricket Club</h1>
            <a href="login.php"><img id="loginlogo" src="images/login_logo.png" alt="login" title="Click to Login"></a>
        </div>

        <div id="id1" class="register_form">
            <div class="register_input animate">
                <h2 align="center">Delete Account</h2>

                <form action="deluser.php" method="post">
                    <fieldset>
                        <legend>Enter details here to delete account</legend>

                        <label for="psw">&nbsp;Your Username:</label>
                        <input type="text" placeholder="Enter your Username here" name="username"  required />

                        <button type="submit" name="del_user">Delete Account</button><br>
                        
                        <?php include('errors.php'); ?>

                    </fieldset>
                </form>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        
    </body>
</html>
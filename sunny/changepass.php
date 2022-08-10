<?php include('server.php') ?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/style_chng.css">
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
                <h2 align="center">Change Password</h2>

                <form action="changepass.php" method="post">
                    <fieldset>
                        <legend>Enter details here to change Password</legend>

                        <label for="psw">&nbsp;Your Username:</label>
                        <input type="text" placeholder="Enter your Password here" name="username"  required />

                        <label for="psw">&nbsp;New Password:</label>
                        <input type="password" placeholder="Enter your Password here" name="password"  required />

                        <button type="submit" name="change_user">Change Password</button><br>
                        
                        <?php include('errors.php'); ?>

                    </fieldset>
                </form>
            </div>
        </div>
        
    </body>
</html>
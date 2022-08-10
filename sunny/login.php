<?php include('server.php') ?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/style_login.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>FCC | Login</title>
        <link rel="icon" href="images/icon.ico" />
    </head>
    <body id="bg" background="images/back.jpg">
        <div id="header">
            <img id="logo" src="images/logo.png" alt="logo" />
            <h1>Francis Cricket Club</h1>
            <a href="login.php"><img id="loginlogo" src="images/login_logo.png" alt="login" title="Click to Login"></a>
        </div>

        <div id="header_option">
            <ul>
                <li><a class="active" href="index.html">Home</a></li>
                <li><a href="admission.html">Admission</a></li>
                <li><a href="tournament.html">Tournament/Events</a></li>
                <li class="dropdown">
                    <a class="dropbtn" href="javascript:void(0)">About Us</a>
                    <div class="dropdown-content">	
                        <a href="about coach.html">Our Coach Details</a>
                        <a href="about club.html">Our Club Details</a>
                    </div>
                </li>
                <li><a href="contact us.html">Contact Us</a></li>
            </ul>
        </div>

        <div id="id1" class="login_form">
            <div class="login_input animate">
                <h2 align="center">Login</h2>
                <img src="images/login.png" alt="image avatar" class="avatar" />

                <form action="server.php" method="post">
                    <fieldset>
                        <legend>Enter Login Details Here</legend>

                        <i class="fa fa-user-circle-o"></i><label for="uname">&nbsp;Username:</label>
                        <input type="text" placeholder="Enter your Username here" name="username" required autofocus />

                        <i class="fa fa-lock"></i><label for="psw">&nbsp;Password:</label>
                        <input type="password" placeholder="Enter your Password here" name="password" required />

                        <label>
                            <input type="checkbox" value="Remember me" name="remember" <?php if(isset($_COOKIE["username"])) { ?> checked <?php }?>>Remember Me
                        </label>

                        <a href="#" id="fp" style="font-family: arial;">Forgot Password?</a><br>

                        <button type="submit" name="login_user">Login</button><br>
                        <?php include('errors.php'); ?>

                        <div id="cd">
                            <p style="font-family: arial;">Not registered? <a href="register.php" style="font-family: arial;">Create an account?</a></p>
                        </div>

                    </fieldset>
                </form>
            </div>
        </div>

        <hr>

        
    </body>
</html>

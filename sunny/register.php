<?php include('server.php') ?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/style_reg.css">
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

        <div id="header_option">
            <ul>
                <li><a class="active" href="index.html">Home</a></li>
                <li class="dropdown">
                    <a class="dropbtn" href="javascript:void(0)">Admission</a>
                    <div class="dropdown-content">	
                        <a href="admission.html">Admission Form</a>
                        <a href="fees.xml">Fees Details</a>
                    </div>
                </li>
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

        <div id="id1" class="register_form">
            <div class="register_input animate">
                <h2 align="center">Register</h2>
                <img src="images/login.png" alt="image avatar" class="avatar" />

                <form action="server.php" method="post">
                    <fieldset>
                        <legend>Enter details here to register</legend>

                        <label for="uname">&nbsp;Username:</label>
                        <input type="text" placeholder="Enter your Username here" name="username" required autofocus />
                        
                        <label for="email">E-Mail:</label>
                        <input type="email" name="email" placeholder="Enter your e-mail id here" required>

                        <label for="psw">&nbsp;Password:</label>
                        <input type="password" placeholder="Enter your Password here" name="password_1"  required />

                        <label for="psw">&nbsp;Password:</label>
                        <input type="password" placeholder="Enter your Password here" name="password_2"  required />

                        <button type="submit" name="reg_user">Sign Up</button><br>
                        
                        <?php include('errors.php'); ?>

                        <div id="cd">
                            <p style="font-family: arial;">Already registered? <a href="login.php" style="font-family: arial;">Sign in</a></p>
                        </div>

                    </fieldset>
                </form>
            </div>
        </div>
        <hr>
        <div id="footer_">
            <footer>
         <marquee> <p>Copyright © 2020. All rights reserved by Francis Cricket Club.</p></marquee>
            </footer>
        </div>
        
    </body>
</html>
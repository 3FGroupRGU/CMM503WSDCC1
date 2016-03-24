<?php
session_start();

session_destroy()
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Ginger Bugginess</title>
    <link rel="stylesheet" href="layout.css" type="text/css" />
    <link rel="stylesheet" href="menu.css" type="text/css" />
</head>

<body>
<div id="holder">
    <div id="header">
        <h1>Ginger Bugginess Fault Tracker</h1>
    </div>
<div id="NavBar">
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="ForgotPassword.php">Forgot Login</a></li>
        </ul>
    </nav>
</div>
<div id="content">
    <div id="pageheading">
        <h1>User Registration</h1>
    </div>
    <div id="contentleft">
        <h2>Please register to use this service.</h2><br>
        <h3>Complete all fields on this form to proceed.</h3>
        <p>On completion of this form it will be submitted to the IT admin team for verification of your status and level within the company.
        Once you have been verified you will be permitted to upload fault files and observe the current status of your logged faults.</p>
    </div>
    <div id="contentright">
        <div class="loginBox">
            <h3>Registration Form</h3>
            <br><br>
            <form method="post" action="register.php">
                <p>Username:<br><input type="text" name="Username" value="<?php if (isset($_POST['username']))
                    echo $_POST['username'];?>"</p>
                <p>Email Address:<br><input type="text" name="email" value="<?php if (isset($_POST['email']))
                    echo $_POST['email'];?>"</p>
                <p>Password:<br><input type="password" name="pass1" value="<?php if(isset($_POST['pass1']))
                    echo $_POST['pass1'];?>"</p>
                <p>Confirm Password:<br><input type="password" name="pass2" value="<?php if (isset($_POST['pass2']))
                    echo $_POST['pass2'];?>"</p>
                <p><fieldset><legend>Phone Number<br></legend>
                <input id="areaCode" title="Area Code"
                type="text" size="5" value="Area Code">
                <input id="mainNbr" name="mainNbr" title="Main Telephone Number" type="text" size="6" value="Main Telephone Number">
                <input id="extension" name="extension" title="Office Extension Number" type="text" size="4" value="Office extension"></fieldset></p>
                <p>
                <input type="submit" name="submit" value="Register"/>
                </p>
            </form>
            <div class="error"><?php //echo $error;?><?php //echo $username; echo $password;?></div>

        </div>
    </div>
</div>
</div>
<div id="footer"></div>
</body>
</html>


<?php
session_start();

session_destroy()
?>
<!doctype html>
<html lang="en">
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
        <div class="registerBox">
            <h3>Registration Form</h3>
            <br><br>
            <form method="post" action="registermain.php">
                <p>Username:<br><input type="text" name="Username" value="<?php if (isset($_POST['username']))
                    echo $_POST['username'];?>" placeholder="Username"</p>
                <p>Email Address:<br><input type="text" name="email" value="<?php if (isset($_POST['email']))
                    echo $_POST['email'];?>" placeholder="E-mail Address"</p>
                <p>Password:<br><input type="password" name="pass1" value="<?php if(isset($_POST['pass1']))
                    echo $_POST['pass1'];?>" placeholder="Password"</p>
                <p>Confirm Password:<br><input type="password" name="pass2" value="<?php if (isset($_POST['pass2']))
                    echo $_POST['pass2'];?>" placeholder="Confirm Password"</p>
                <p>Phone Number:<br><input type="number" name="telNo" value="<?php if (isset($_POST['telNo']))
                        echo $_POST['telNo'];?>" placeholder="Telephone Number"</p>
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


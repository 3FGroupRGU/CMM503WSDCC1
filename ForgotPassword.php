<?php
session_start();
if (isset($_SESSION['FirstName'])){
    ///your code here
}
$_SESSION = array ();
session_destroy ();
$_SESSION['foo'] = 'bar';
print $_SESSION ['foo'];
unset ($_SESSION ['foo']);
?>
<!doctype html>
<!--design has been followed from Simpletut.com via https://www.youtube.com/watch?v=Qqcj4nYkcks'-->
<html>
<head>
    <meta charset="utf-8">
    <title>General Bugginess</title>
    <link rel="stylesheet" href="layout.css" type="text/css" />
    <link rel="stylesheet" href="menu.css" type="text/css" />
</head>

<body>
<div id="holder"></div>
<div id="header">
    <h1>General Buginess Fault Tracker</h1>
</div>
<div id="NavBar">
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="register.php">Register</a></li>
            <li><a href="ForgotPassword.php">Forgot Login</a></li>
        </ul>
    </nav>
</div>
<div id="content">
    <div id="pageheading">
        <h1>Forgotten Password</h1>
    </div>
    <div id="contentleft">
        <h2>Recover Password</h2><br>
        <h3>Please resubmit your details to recover your login credentials.</h3><br>
        <p>Ensure that your details are correct. Your new login details will be sent directly to your officially recognised e-mail address as confirmation.</p>
    </div>
    <div id="contentright">
        <div class="loginBox">
            <h3>Recovery Form</h3>
            <br><br>
            <form method="post" action="login.php">
                <label>Username:</label><br>
                <input type="text" name="username" placeholder="username" required="required"/><br><br>
                <label>Password:</label><br>
                <input type="password" name="password" placeholder="password" required="required"/> <br>
                <br>
                <input class="login1" type="submit" name="submit" value="Recover"/>
            </form>
            <div class="error"><?php //echo $error;?><?php //echo $username; echo $password;?></div>
    </div>
</div>
<div id="footer"></div>
</body>
</html>


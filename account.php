<?php
session_start();
$_SESSION=array();
if (ini_get("session.use_cookies")){
    $params=session_get_cookie_params();
    setcookie(session_name(), '',time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}
session_destroy()
?>
<!doctype html>
<!--design has been followed from Simpletut.com via https://www.youtube.com/watch?v=Qqcj4nYkcks'-->
<html>
<head>
    <meta charset="utf-8">
    <title>Ginger Bugginess</title>
    <link rel="stylesheet" href="layout.css" type="text/css" />
    <link rel="stylesheet" href="menu.css" type="text/css" />
</head>

<body>
<div id="holder"></div>
<div id="header">
    <h1>Ginger Bugginess Fault Tracker</h1>
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
        <h1>Page Heading</h1>
    </div>
    <div id="contentleft">
        <h2>Your Message Here</h2><br>
        <h3>Your Message</h3>
    </div>
    <div id="contentright">
        <div class="loginBox">
            <h3>Login Form</h3>
            <br><br>
            <form method="post" action="login.php">
                <label>Username:</label><br>
                <input type="text" name="username" placeholder="username" required="required"/><br><br>
                <label>Password:</label><br>
                <input type="password" name="password" placeholder="password" required="required"/>  <br>
                <label>E-mail</label><br>
                <input type="email" name="email" placeholder="e-mail" />
                <br>
                <label>Work No:</label><br>
                <input type="tel" name="telephone" placeholder="Work Telephone" /><br><br>
                <input class="login1" type="submit" name="submit" value="login"/>
            </form>
            <div class="error"><?php //echo $error;?><?php //echo $username; echo $password;?></div>
    </div>
</div>
<div id="footer"></div>
</body>
</html>


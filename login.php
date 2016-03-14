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
    <?php
        require_once 'connect.php';
            include("connect.php"); //Establishing connection to our database
        if (empty($_POST ["username"]) || empty($_POST ["password"])) {
    echo "Both fields are required.";
} else {
    $username = $_POST ["username"];
    $password = $_POST ["password"];
    echo $username;
    echo $password;
    $MySql = "SELECT * FROM users WHERE username='$username' and password='$password'";
    $result = mysqli_query($db, $MySql);
    if (mysqli_num_rows($result) == 1) {
        header("location: FileUpload.php"); // Redirecting to another page
    } else {
        echo "Incorrect username or password";
    }
}
    ?>
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
        <h1>Login Page</h1>
    </div>
    <div id="contentleft">
        <h2>Please Login Here</h2><br>
        <h3>Before you can look at or update any of your fault logs on this site you will have to login to the site.</h3><br>
        <p>If you have no valid account please complete the registration form.</p><br>
        <p>Once the registration form has been submitted it will be assessed by the IT team prior to your accessibility to the site.</p>
    </div>
    <div id="contentright">
        <div class="loginBox">
            <h3>Login Form</h3>
            <br><br>
            <form method="post" action="login.php">
                <label>Username:</label><br>
                <input type="text" name="username" placeholder="username" /><br><br>
                <label>Password:</label><br>
                <input type="password" name="password" placeholder="password" />  <br>
                <br>
                <input class="login1" type="submit" name="submit" value="login"/>
            </form>
            <div class="error"><?php //echo $error;?><?php //echo $username; echo $password;?></div>
    </div>
</div>
<div id="footer"></div>
</body>
</html>


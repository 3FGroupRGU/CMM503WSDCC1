<?php
require_once 'connect.php';
include("connect.php"); //Establishing connection with our database
?>
<?php
$error ="";
if (isset($_POST['login']))
{
        $username=$_POST['username'];
        $password=$_POST['password'];

        $sql="SELECT * FROM user WHERE Username='$username' AND Password='$password'";
        $result=mysqli_query($db,$sql);
        $row=mysqli_fetch_assoc($result);
        session_start ();
        $_SESSION["userID"] = $row['userID'];
        header('location: home.php');
}
{
    if(empty($_POST["username"]) || empty($_POST["password"]))
    {
        $error = "Both fields are required.";
    }else
    {
        $username = stripslashes($db, $username);
        $password= stripslashes($db, $password);
        $username = mysqli_real_escape_string($db, $username);
        $password = mysqli_real_escape_string($db, $password);
        $password = md5($password);
        
        {
            $error = "Incorrect username or password.";
        }

    }
}
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
                <input type="text" name="username" placeholder="Username" required="required" />
                <br><br>
                <label>Password:</label><br>
                <input type="password" name="password" placeholder="Password" required="required" />
                <br><br>
                <input type="submit" name="login" value="Login"/>
                <input type="reset" value="Clear">
            </form>
            <div class="error"><?php //echo $error;?><?php //echo $username; echo $password;?></div>
    </div>
</div>
</div>
    </div>
<div id="footer"></div>
</body>
</html>


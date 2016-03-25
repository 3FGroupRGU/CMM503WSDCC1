<?php
require('connect.php');
if($_GET['code'])
{
    $get_username=$_GET['username'];
    $get_code=$_GET['code'];
    $sql=("SELECT * FROM users WHERE username='$get_username'");
    while($row=mysqli_fetch_assoc($query))
    {
        $db_code=$row['pass_reset'];
        $db_username=$row['username'];
    }
    if($get_username==$db_username && $get_code==$db_code)
    {
        if(!$_GET['code']);
    }

}

if(isset($_POST['submit']))
{
    $username=$_POST['username'];
    $email=$_POST['email'];

    $sql=mysqli_query("SELECT * FROM users WHERE username='$username'");
    $numrow=mysqli_num_rows($query);

    if($numrow!=0)
    {
        while($row= mysqli_fetch_assoc($query)){
            $db_email=$row['email'];
        }
        if($email==$db_email){
            $code=rand(10000,1000000);
            $to = $db_email;
            $subject="Password Reset";
            $body="This is an automated message. Please DO NOT reply. Click the link below or paste it into the browser's address bar. http://cmm503wscc1.azurewebsites.net/ForgotPassword.php?code=$code&username=$username";

            $sql=("UPDATE users SET pass_reset='$code'WHERE username='$username'");
            mail($to, $subject,$body);
            echo "Check your e-mail";
        }
        else{
            echo "E-mail is incorrect";
        }
    }
    else{
       echo "That username does not exist";
    }
}
?>
<?php
session_start();
if(isset($_SESSION['userID'])) {
}else{
    header('location: login.php');
}
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
            <li><a href="register.php">Register</a></li>
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
            <?php
            {
                echo "<form action='pass_reset_complete.php?code='$get_code' method='POST'> Enter a new password<br>
                <input type='password' name='newpass'><br>
                Re-enter you password<br><input type='password' name='newpass1'><p>
                <input type='hidden' name='username' value='$db_username'>
                <input type='submit' value='Update Password!'> ";
            }
            ?>
            <div class="error"><?php //echo $error;?><?php //echo $username; echo $password;?></div>
    </div>
</div>
</div>
<div id="footer"></div>
</body>
</html>


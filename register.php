<?php
session_start();
$page_title = 'Register';
if ($_SERVER ['request_method']== 'POST') {
    require_once 'connect.php';
    include("connect.php");
    $errors = array();
    if (empty($_POST ['username'])) {
        $errors [] = 'Enter your Username!';
    } else {
        $username = mysqli_real_escape_string($db, trim($_POST['username']));
    }
    if (empty($_POST['email']))
    {
        $errors []= mysqli_real_escape_string($db,trim($_POST['email']));
    }
    if(!empty($_POST['pass1']!=$_POST['pass2']))
    {
        $errors[]='Passwords do not match!';
    }
    else
    {
        $password=mysqli_real_escape_string($db,trim($_POST['pass1']));
    }}
    else
    {
      $errors[]='Enter your password!';
    }
    if(empty($errors))
    {
     $q="SELECT userID FROM users WHERE email='Semail'";
        $r=mysqli_query($db,$q);
        if (mysqli_num_rows($r)!=0)
        {
            $errors[]='Email address already registered. <a href="login.php'>
    }
        if(empty($errors))
        {
            $q="INSERT INTO users(username,email,password, tel) VALUES($username, $email, SHA1($password), NOW())";
            $sr=mysqli_query($db,$q);
            if($r)
            {
                echo'<h1>Registered!</h1>
                <p>You are now registered.</p>
                <p><a href="login.php"></a></p>';
            }
            mysqli_close($db);
            exit();
        }
        else
        {
            echo '<h1>ERROR!</h1>
            <p id="err_msg">The following error(s) occurred:<br> for each [$errors as $msg]
            {
                echo "-msg<br>";
            }
            echo "Please try again"</p>';
            mysqli_close ($db);
        }
}
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
        <p>On completion of this form it wuill be submitted to the IT admin team for verification of your status and level within the company.
        Once you have been verified you will be permitted to upload fault files and observe the current status of your logged faults.</p>
    </div>
    <div id="contentright">
        <div class="loginBox">
            <h3>Registration Form</h3>
            <br><br>
            <form method="post" action="register.php">
                <p>Username:<input type="text" name="Username" value="<?php if (isset($_POST['username']))
                    echo $_POST['username'];?>"</p>
                <p>Email Address:<input type="text" name="email" value="<?php if (isset($_POST['email']))
                    echo $_POST['email'];?>"</p>
                <p>Password:<input type="password" name="pass1" value="<?php if(isset($_POST['pass1']))
                    echo $_POST['pass1'];?>"</p>
                <p>Confirm Password:<input type="password" name="pass2" value="<?php if (isset($_POST['pass2']))
                    echo $_POST['pass2'];?>"</p>
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


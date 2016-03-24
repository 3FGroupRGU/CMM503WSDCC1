<?php
require 'connect.php';
?>
<?php
session_start();
if(isset($_SESSION['userID'])) {
}else{
    header('location: login.php');
}
?>
<?php
    $user=$_SESSION["userID"];
    $sql="SELECT * FROM user WHERE useID='$user'";
    $result=mysqli_query($db,$sql);
    $row=mysqli_fetch_array(MYSQLI_BOTH);
    session_start();
    $_SESSION["username"]=$row['usename'];
    $_SESSION["email"]=$row['email'];
    $_SESSION["password"]=$row['password'];
    $_SESSION["telNo"]=$row['phone'];
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
            <h1>User Update Page</h1>
        </div>
        <div id="contentleft">
            <h2>Welcome to the Ginger Bugginess Account Update Page.</h2><br>
            <h3>Before you begin.</h3><br>
            <p>This area is where you can update your details in relation to your active account.</p>
        </div>
        <div id="contentright">
                <h3>Update Form</h3>
                <br><br>
                <form method="post" action="updateaccount.php">
                    <p>Username:<br><input type="text" name="Username" value="<?php echo  $_SESSION["username"]=$row['usename'];?>"
                                           placeholder="Username" required="required"</p>
                    <p>Email Address:<br><input type="text" name="email" value="<?php echo  $_SESSION["email"]=$row['email'];?>"
                                                placeholder="E-mail Address" required="required"</p>
                    <p>Password:<br><input type="password" name="pass1" value="<?php echo $_SESSION["password"]=$row['password'];?>"
                                           placeholder="Password" required="required"</p>
                    <p>Confirm Password:<br><input type="password" name="pass2" value="<?php echo $_SESSION["password"]=$row['password'];?>"
                                                   placeholder="Confirm Password" required="required"</p>
                    <p>Phone Number:<br><input type="number" name="telNo" value="<?php echo $_SESSION["telNo"]=$row['phone'];?>"
                                               placeholder="Telephone Number"</p>
                    <p>
                        <input type="submit" name="update" value="Update"/>
                    </p>
                </form>
            <div class="error"><?php //echo $error;?><?php //echo $username; echo $password;?></div>
        </div>
    </div>
    <div id="footer">
    </div>
</body>
</html>




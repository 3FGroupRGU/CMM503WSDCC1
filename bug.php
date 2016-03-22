<?php
require_once 'connect.php';
include("connect.php");
$sql="SELECT * FROM bugs WHERE bugs.ID=".$_GET["id"];
$result=mysqli_query($db,$sql);
$row=mysqli_fetch_assoc($result);
$bugTitle=$row['title'];
$bugID=$row['ID'];
$bugDesc=$row['desc'];

echo"<h2>".$bugTitle."</h2>";
echo"<p>".$bugDesc."</p>";

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
                <li><a href="register.php">Register</a></li>
                <li><a href="ForgotPassword.php">Forgot Login</a></li>
            </ul>
        </nav>
    </div>
<div class="content">
    <form class="bugInfo">
   <label>Bug Title:</label>
    <input type="text" name="bugTitle" placeholder="Bug Title"><br>
    <label>Bug Description</label><br>
    <textarea name="bugDesc" rows="5" cols="40" placeholder="Bug Description"></textarea><br>
        <label>User ID</label><br>
        <input type="text" name="userID" placeholder="User ID"><br>
        <label>Date Bug Raised</label><br>
        <input type="date" name="date" placeholder="Date Of Bug"><br>
        <label>Date Bug Fixed</label><br>
        <input type="date" name="date" placeholder="Date Fixed"><br>
        <label>If checked IT has fixed Bug</label><br>
        <input type="Checkbox" name="$ch1" value="Fixed">
        <?php
            print $ch1;
        ?>
    </form>
</div>
</div>
</body>

</html>

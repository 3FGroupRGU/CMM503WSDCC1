<?php
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
<head>
    <meta charset="utf-8">
    <title>Ginger Bugginess</title>
    <link rel="stylesheet" href="layout.css" type="text/css" />
    <link rel="stylesheet" href="menu.css" type="text/css" />
</head>
<body>
<div id="holder">
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
    <form class="bugInfo">
   <label>Bug Title:</label>
    <input type="text" name="BugTitle" placeholder="Bug Title"><br>
    <label>Bug Description</label>
    <input type="text" name="BugDesc" placeholder="Bug Description"><br>
        <label>User ID</label>
        <input type="text" name="$userID" placeholder="User ID"><br>
        <label>Date Bug Raised</label>
        <input type="date" name="date" placeholder="Date Of Bug"><br>
        <label>Date Bug Fixed</label>
        <input type="date" name="date" placeholder="Date Fixed"><br>
        <label>If checked IT has fixed Bug</label>
        <input type="Checkbox" name=".$ch1" value="Fixed">
        <?php
            print $ch1;
        ?>
    </form>
</div>
</div>
</body>

</html>

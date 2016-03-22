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

$sql="SELECT * FROM comments WHERE bugID=".$_GET["id"];
$result=mysqli_query($db,$sql);
while ($row=mysqli_fetch_assoc($result)){
    $commentTitle=$row['title'];
    $commetn=$row['comment'];

    echo'<h3>'.$title.'</h3>';
    echo'<p>'.$comment.'</p>';
}
?>
<!doctype html>
<body>
<div id="content">
    <form class="bugInfo">
   <label>Bug Title:</label>
    <input type="text" name="BugTitle" placeholder="Bug Title"><br>
    <label>Bug Description</label>
    <input type="text" name="BugDesc" placeholder="Bug Description"><br>
        <label>User ID</label>
        <input type="text" name="$userID" placeholder="User ID"><br>
        <input type="date" name="date" placeholder="Date Of Bug"><br>
        <input type="date" name="date" placeholder="Date Fixed"><br>
    </form>
</div>
</body>

</html>

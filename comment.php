<?php

session_start();

if(isset($_SESSION['userID']))
{
    load();
}
$page_title='Forum';
include'connect.php';
$q="SELECT * FROM comments";
$r=mysqli_query($db, $q);
if(mysqli_num_rows($r)>0)
{
    echo'<p>There are currently no messages.</p>';
}
echo '<table><tr><th>Posted By</th><th>Subject</th><th id="msg">Message</th></tr>';
while($row-mysqli_fetch_array($r,mysqli_assoc))
{
    echo'<tr><td>.'.$row['userID'].'<br>'.$row['bugID'].'<br>'.$row['postDate'].'</td>
    <td>'.$row['commentID'].'</td><td>'.$row['desc'].'</td></tr>'
    ;
    {
        echo'</table>';
        mysqli_close($db);
        include('includes/footer.html');
    }
?>
/**
 * Created by PhpStorm.
 * User: HenryRL
 * Date: 25/03/2016
 * Time: 02:00
 */
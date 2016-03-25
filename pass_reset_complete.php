<?php
require 'connect.php';
?>

<?php
$newpass=$_POST['newpass'];
$newpass=$_POST['newpass1'];

$post_username=$_POST['username'];
$code=$_GET['code'];

if ($newpass==$newpass1)
{
        $en_pass=md5($newpass);
    mysqli_query("UPDATE users SET password='$enc_pass'WHERE username='$post_username'");
    mysqli_query("UPDATE users SET pass_reset='0'WHERE username='$post_username'");

    echo "Your password has been reset.<p><a href='login.php'>Click here to log in.</a>";
}else{
    echo "Passwords must match <a href='ForgotPassword.php?code=$code&username=$post_username'>Click Here to go back</a>";
}
?>
/**
 * Created by PhpStorm.
 * User: HenryRL
 * Date: 25/03/2016
 * Time: 00:53
 */
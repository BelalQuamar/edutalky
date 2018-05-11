<?php 	session_start(); 
include 'top.php';
echo  $_SESSION["SESS_FNAME"] . "     please change your password" ."<br>" ."<br>";
?>

<form  method="get">
old password: <input type="password" name="oldpass"><br><br>
new password: <input type="password" name="newpass"><br><br>
confirm new password: <input type="password" name="cnpass"><br><br>
<input type="submit" name="submit" value="submit" /></form>
<br><br><br><br>


<?php
if (!empty($_GET['oldpass']) and !empty($_GET['newpass']) and !empty($_GET['cnpass']))
{
if($_GET['newpass']==$_GET['cnpass'])
{
$_SESSION["op"] = $_GET['oldpass'];
$_SESSION["np"] = $_GET['newpass'];
header( "Location: set1.php" );
}
else
{
echo"new passwords do not match";
}
}
include 'bottom.php';
?>
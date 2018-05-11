<?php session_start();
include 'top.php';?>
<html>
<form  method="get">
Please enter your username: <input type="text" name="uname">
<input type="submit" name="submit" value="submit" /></form>
<br><br>
<?php
if (!empty($_GET['uname']))
{
$_SESSION["favcolor"] = $_GET['uname'];
header( "Location: forgpass2.php" );
}
include 'bottom.php';
?>
</html>
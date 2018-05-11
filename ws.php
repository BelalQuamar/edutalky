<?php session_start();
include 'top.php';
 ?>
<html>
<form  method="get">
Please enter the word you would like to search: <input type="text" name="uname">
<input type="submit" name="submit" value="submit" /></form>
<br><br>
<?php
if (!empty($_GET['uname']))
{
$_SESSION["fav"] = $_GET['uname'];
header( "Location: ws2.php" );
}
include 'bottom.php';
?>
</html>
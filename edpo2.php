<?php session_start();
include 'top.php';
echo $_SESSION["ll"];
$content=$_SESSION["ll"];
$po = $_SESSION["nam"];
include 'belal.php';
$sql="UPDATE `allpost` SET `post` = '$po' WHERE `postid` = '$content'";

echo $content;
if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
  }
  echo "post changed <br>";
mysqli_close($con);
include 'bottom.php';
?>
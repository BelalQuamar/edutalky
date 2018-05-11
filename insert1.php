<?php
session_start(); 
include 'belal.php';
$post = mysqli_real_escape_string($con, $_POST['post']);
$uname=$_SESSION["SESS_FNAME"];
$sql="INSERT INTO allpost (post,uname)
VALUES ('$post','$uname')";
if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
{
header('Location: home.php');
exit;
}
mysqli_close($con);
?>


<?php session_start();
include 'top.php';
$jam=$_SESSION["abus"];
$us=$_SESSION['SESS_USERNAME'];
include 'belal.php';
$result = mysqli_query($con,"INSERT INTO abuse (username, report)
VALUES ('$us', '$jam ')");

 echo $us."  <br> your report    <br><br>" . " ' " . $jam.  " ' " . "  <br><br>  has been submitted.<br> We wil get back to you on this shortly.";

mysqli_close($con);
include 'bottom.php';
?>

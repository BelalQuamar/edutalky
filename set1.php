<?php 	session_start(); 
include 'top.php';
$r=$_SESSION['SESS_ROLL_NO'];
$op = $_SESSION["op"];
$np = $_SESSION["np"];
include 'connection.php';
$result = mysqli_query($con,"SELECT * FROM member WHERE roll_no =('$r')");
while($row = mysqli_fetch_array($result)) 
{  $pas = $row['password'];    }
  if($pas==$op){
$sql="UPDATE `simple_login`.`member` SET `password` = '$np' WHERE `member`.`roll_no` = '$r'";
if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));}
  
echo "password changed";
echo "<br>";
}
else
{
echo "your password is incorrect";}
echo "<br>";
mysqli_close($con);
include 'bottom.php';
?>
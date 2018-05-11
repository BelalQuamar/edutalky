<?php session_start();
include 'top.php';
$jam=$_SESSION["ans"];
$aa=$_SESSION["favcolor"];

include 'connection.php';
$result = mysqli_query($con,"SELECT * FROM member WHERE username =('$aa')");
echo "your password is:";
while($row = mysqli_fetch_array($result)) 
{
  echo $row['password'];
}
mysqli_close($con);
?><?php include 'bottom.php';?>

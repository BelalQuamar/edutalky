<?php session_start();
include 'top.php';
$jam=$_SESSION["fav"];
include 'belal.php';
$result = mysqli_query($con,"SELECT * FROM allpost WHERE post =('$jam')");
while($row = mysqli_fetch_array($result)) 
{
  echo $row['uname']."   posted    <br>".$row['post']." <br>   at     ".$row['time'];
}
mysqli_close($con);
include 'bottom.php';
?>

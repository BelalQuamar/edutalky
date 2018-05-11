<?php session_start();
include 'top.php';
$content = isset($_GET['content']) ? $_GET['content'] : '';
echo "  <br><br> ";
  ?>
 <form  method="get">
Please enter the new post<input type="text" name="uname">
<input type="submit" name="submit" value="submit" /></form>
<br><br>
<?php
	echo $content;
if (!empty($_GET['uname']))
{
$po=$_GET['uname'];
include 'belal.php';
$sql="UPDATE `allpost` SET `post` = '$po' WHERE `postid` = '$content'";
echo $content;
echo $po;
if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
  }
  echo "post changed <br>";
mysqli_close($con);
//header( "Location: home.php" );
}
include 'bottom.php';
?>
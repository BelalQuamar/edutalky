<?php session_start();
include 'top.php';
$jam=$_SESSION["favcolor"];

include 'connection.php';
$result = mysqli_query($con,"SELECT * FROM member WHERE username =('$jam')");
while($row = mysqli_fetch_array($result)) 
{
  echo $row['secques'];
}

mysqli_close($con);
?>
<br><br>
<form  method="get">
Answer <input type="text" name="answ">
<input type="submit" name="submit" value="submit" /></form>

<?php if (!empty($_GET['answ']))
{
$_SESSION["ans"] = $_GET['answ']; 
header( "Location: forgpass3.php" );
}
include 'bottom.php';
?>

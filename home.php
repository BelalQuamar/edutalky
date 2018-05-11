<?php include 'top.php';
session_start();
	require_once('auth.php');
	unset($_SESSION['nam']);
	unset($_SESSION['ll']);
echo "Welcome " . $_SESSION["SESS_FNAME"] . ".<br>";?>
<form action="index.php">
  <input type="submit" value="LOGOUT">
</form>
<form action="insert1.php" method="post">
post: <input type="text" name="post">
<input type="submit" value="post IT!!!">
</form>
<?php
include 'belal.php';
$result = mysqli_query($con,"SELECT * FROM allpost ORDER BY postid DESC");
while($row = mysqli_fetch_array($result)) {
 echo "_____________________________________<br>";
  echo $row['uname'] . "  said  <br>".  $row['post'] . " <br>" . "  at  " . $row['time'];
  $val=$row['postid'];
  echo"<br>"; 	
  echo '<a href="edpo.php?content=' . $val . '">edit</a>'; 
echo "<br>_____________________________________";
  echo  "<br><br><br>";
 }
mysqli_close($con);
?>
<form action="upload.php" method="post" enctype="multipart/form-data">
  Please choose a file: <input type="file" name="uploadFile"><br>
  <input type="submit" value="Upload File">
</form>
<br><br>
<div style="display:inline-block; vertical-align: middle;">
<button onclick="location.href='settings.php'">SETTINGS</button>
<button onclick="location.href='ws.php'">WORD SEARCH</button>
</div>
<?php include 'bottom.php';?>
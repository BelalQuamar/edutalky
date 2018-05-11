<html>
<?php include 'top.php';
$target_dir = "uploads/";
$target_dir = $target_dir . basename( $_FILES["uploadFile"]["name"]);
    if (move_uploaded_file($_FILES["uploadFile"]["tmp_name"], $target_dir)) {
        echo "The file ". basename( $_FILES["uploadFile"]["name"]). " has been uploaded.";
		
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
	?>
<img src="$_FILES["uploadFile"]["name"]" width="100" height="100">
<form action="home.php">
  <input type="submit" value="BACK TO HOME">
</form>
<?php include 'bottom.php';
?>
</html>
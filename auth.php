<?php
	if(!isset($_SESSION['SESS_ROLL_NO']) || (trim($_SESSION['SESS_ROLL_NO']) == '')) {
		header("location: index.php");
		exit();
	}
?>

<?php //old
	session_start();
 
	require_once('connection.php');

 
	$errmsg_arr = array();
 
	$errflag = false;
 	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysqli_real_escape_string($str);
	}
 
	$username = $_POST['username'];
	$password = $_POST['password'];
 
	if($username == '') {
		$errmsg_arr[] = 'Username missing';
		$errflag = true;
	}
	if($password == '') {
		$errmsg_arr[] = 'Password missing';
		$errflag = true;
	}
 
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: index.php");
		exit();
	}
 
	$qry = "SELECT * FROM member WHERE username = '$username' AND password = '$password'";
	$result = mysqli_query($con,$qry);
	//$result = mysqli_query($con,$sql);
 
	if($result) {
		if(mysqli_num_rows($result) > 0) {
			//Login Successful
			session_regenerate_id();
			$member = mysqli_fetch_assoc($result);
			$_SESSION['SESS_FNAME']    = $member['fname'];
			$_SESSION['SESS_ROLL_NO']  = $member['roll_no'];
			$_SESSION['SESS_USERNAME'] = $member['username'];
			$_SESSION['SESS_PASSWORD'] = $member['password'];
			session_write_close();
			header("location: home.php");
			exit();
		}else {
			//Login failed
			$errmsg_arr[] = 'user name and password not found';
			$errflag = true;
			if($errflag) {
				$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
				session_write_close();
				header("location: index.php");
				exit();
			}
		}
	}else {
		die("Query failed");
	}
?>

<?php 
//Start session
	session_start();
include 'top.php';
//Unset the variables stored in session
	unset($_SESSION['SESS_FNAME']);
	unset($_SESSION['SESS_PASSWORD']);
	unset($_SESSION['SESS_ROLL_NO']);
	unset($_SESSION['nam']);
	unset($_SESSION['ll']);

?>


<form name="loginform" action="login_exec.php" method="post">
<table width="309" border="0" align="center" cellpadding="2" cellspacing="5">
  <tr>
    <td colspan="2">
		
		 <?php
			if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
			echo '<ul class="err">';
			foreach($_SESSION['ERRMSG_ARR'] as $msg) {
				echo '<li>',$msg,'</li>'; 
				}
			echo '</ul>';
			unset($_SESSION['ERRMSG_ARR']);
			}
		?>		
	</td>
  </tr>
  <tr>
    <td width="116"><div align="right">Username</div></td>
    <td width="177"><input name="username" type="text" /></td>
  </tr>
  <tr>
    <td><div align="right">Password</div></td>
    <td><input name="password" type="password" /></td>
  </tr>
  <tr>
    <td><div align="right"></div></td>
    <td><input name="" type="submit" value="login" /></td>
  </tr>
</table>
</form>


<div style="display:inline-block; vertical-align: middle;">
<button onclick="location.href='signup.php'">SIGN-UP</button>
<button onclick="location.href='forgpass.php'">FORGOT-PASSWORD</button>
</div>


</body>
</html>
<?php include 'bottom.php'; ?>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<form action="/phpmyadmin">
  <input type="submit" value="ADMIN DB LOGIN">
</form>
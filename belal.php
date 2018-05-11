<?php

require_once('convars.php');
$con=mysqli_connect($DB_HOST,$DB_USER,$DB_PASSWORD,$DB_POSTSDB);
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
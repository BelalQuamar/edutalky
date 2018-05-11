<html>
<?php 
include 'top.php';
include 'connection.php';
$firstname = mysqli_real_escape_string($con, $_POST['firstname']);
$lastname = mysqli_real_escape_string($con, $_POST['lastname']);
$rollno = mysqli_real_escape_string($con, $_POST['roll_no']);
$username = mysqli_real_escape_string($con, $_POST['username']);
$password = mysqli_real_escape_string($con, $_POST['password']);
$cpassword = mysqli_real_escape_string($con, $_POST['Cpassword']);
$contact = mysqli_real_escape_string($con, $_POST['contact']);
$gender = mysqli_real_escape_string($con, $_POST['gender']);
$secques = mysqli_real_escape_string($con, $_POST['secques']);
$answer = mysqli_real_escape_string($con, $_POST['answer']);
if($password==$cpassword)
{
$sql="INSERT INTO member (fName, lName, roll_no,username,password,contact,gender,secques,answer)
VALUES ('$firstname', '$lastname', '$rollno','$username','$password','$contact','$gender','$secques','$answer')";
if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
{echo "Congratulations!!!!   on joining CSE 1 social";
echo"<br><br>";
echo "<a href='index.php'>click here to sign in NOW</a>";
exit;
}
mysqli_close($con);
}
else
{
echo "passwords do not match <br> <br>";
}
include 'bottom.php';
?>
</html>
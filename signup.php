<html>
<?php include 'top.php';?>
<form action="insert.php" method="post"> <br><br>
<i><b><u>
All fields are compulsory<br><br></u>
Firstname: <input type="text" name="firstname"><br><br>
Lastname : <input type="text" name="lastname"><br><br>
Roll_no  : <input type="number" name="roll_no"><br><br>
Username : <input type="text" name="username"><br><br>
Password : <input type="password" name="password"><br><br>
Confirm Password : <input type="password" name="Cpassword"><br><br>
Contact  : <input type="number" name="contact"><br><br>
<input type="radio" name="gender" value="male">Male<br>
<input type="radio" name="gender" value="female">Female
<br>
Secret Question:<select type="text" name="secques">
  <option value="Where were you born ?">Where were you born ?</option>
  <option value="what is your vehicle reg no ?">what is your vehicle reg no ?</option>
  <option value="who is your best teacher name ?">who is your best teacher name ?</option>
  <option value="who is your best childhood friend ?">who is your best childhood friend ?</option>
</select>
Answer <input type="text" name="answer">
<br>
<input type="submit" value="SIGN UP">
</form>
<br><br><br>
</form>
</body>
<?php include 'bottom.php';?>
</html>

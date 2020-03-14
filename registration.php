<!DOCTYPE html>
<html>
<head>


<img src="Company.png" alt="Company logo" height="70" weight="70"> 
<p align="right"> <a href="labtask7.php"> Home| </a>
	<a href="login.php"> Login |</a>
<a href="labtask7.php"> Registration </a> </p>

<hr>

<?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $username = test_input($_POST["username"]);
  $password = test_input($_POST["password"]);
  $confirmPassword = test_input($_POST["confirmPassword"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Registration form</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
  Username: <input type="text" name="username">
  <br><br>
  Password: <input type="text" name="password">
  <br><br>
  Confirm Password: <input type="text" name="confirmPassword">
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <br><br>
  <input type="submit" name="submit" value="Submit">  
  <input type="reset" name="submit" value="Reset">
</form>
</body>
</html>
<!DOCTYPE html>
<html>
<head>


<img src="Company.png" alt="Company logo" height="70" weight="70"> 
<p align="right"> <a href="labtask7.php"> Home| </a>
	<a href="https:login.php"> Login |</a>
<a href="registration.php"> Registration </a> </p>
<hr>

<h2>Login</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Username: <input type="text" name="username">
  <br><br>
  Password <input type="text" name="password">
  <br><br>
  <hr>

  <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
  <label for="vehicle1"> Remember me</label><br>

  <input type="submit" name="submit" value="Submit"><p><a href="forgotpassword.php"> Forgot Password?</a></p>

</body>
</html>
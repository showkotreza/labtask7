<!DOCTYPE html>
<html>
<head>


<img src="Company.png" alt="Company logo" height="70" weight="70"> 
<p align="right"> <a href="labtask7.php"> Home| </a>
	<a href="login.php"> Login |</a>
<a href="registration.php"> Registration </a> </p>
<hr>

<h2>Forgot Password</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  EnterEmail: <input type="text" name="EnterEmail">
  <br><br>
 <input type="submit" name="submit" value="Submit"><p>

</body>
</html>
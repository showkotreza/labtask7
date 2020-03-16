<!DOCTYPE html>
<html>
<body>

<img src="Company.PNG" alt="company logo" height="70" weight="70">
<p align="right"><a href="index.php">Home |</a>
<a href="login.php">Log in |</a>
<a href="registration.php">Registration |</a></p>

<h1>Profile</h1>

<img src="download.jpg" alt="download logo" height="70" weight="70">
<br>
<a href="index.php">Change</a>

<hr>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>

   Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <br>
  <hr>

  <a href="login.php">Edit profile </a>
  
     
  
  

  </form>

</body>
</html>
<!DOCTYPE HTML> 
<html lang="en-us"> 
<head> 
<meta charset="utf-8"> 
<title>Food Foraging Fiesta</title> 
<link href="styles.css" rel="stylesheet" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head> 

<body> 
<div id="wrapper">
<?php include "header.php"; ?>
<div class="content"> 
<h1>Food Foraging Fiesta</h1>
<p>Food Storage Inventory Control</p>
<h2>Login:</h2>
<p>Email: 
  <input type="text" name="textfield" id="textfield">
  <br>
  Password: <input type="text" name="textfield" id="textfield">
  <br>
  <input type="submit" name="submit" id="submit" value="Submit">
</p>
<h2>Create Account:</h2>
<p>Email: <input type="text" name="textfield" id="textfield"><br>
  Password: <input type="text" name="textfield" id="textfield"><br>
Password x2: <input type="text" name="textfield" id="textfield">
<br>
<input type="submit" name="submit2" id="submit2" value="Submit">
</p>
</div><?php include "footer.php"; ?> 
</div> 
</body> 
</html>
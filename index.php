<!doctype html>
<!--[if lt IE 7]> <html class="ie6 oldie"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 oldie"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="">
<!--<![endif]-->
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Untitled Document</title>
<link href="boilerplate.css" rel="stylesheet" type="text/css">
<link href="style.css" rel="stylesheet" type="text/css">
<!-- 
To learn more about the conditional comments around the html tags at the top of the file:
paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/

Do the following if you're using your customized build of modernizr (http://www.modernizr.com/):
* insert the link to your js here
* remove the link below to the html5shiv
* add the "no-js" class to the html tags at the top
* you can also remove the link to respond.min.js if you included the MQ Polyfill in your modernizr build 
-->
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="respond.min.js"></script>
</head>
<body>
<div class="gridContainer clearfix">
  <div id="div1" class="fluid">
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
</div>
</body>
</html>

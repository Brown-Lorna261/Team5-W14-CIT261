<!DOCTYPE HTML> 
<html lang="en-us"> 
<head> 
<meta charset="UTF-8"> 
<title>Instructions</title> 

<link href="style.css" rel="stylesheet" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1">

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
<script src="https://cdn.firebase.com/v0/firebase.js"></script>
<script type="text/javascript" src="main.js"></script>
    
</head> 

<body> 
<div class="gridContainer clearfix">
  <div id="div1" class="fluid">
<?php include "header.php"; ?>
<div class="content"> 
<h1>Instructions</h1>
<p>Instructions here</p>

  
  

</div><?php include "footer.php"; ?> 
 </div>
</div>
</body> 
</html>
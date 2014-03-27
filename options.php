<!DOCTYPE HTML> 
<html lang="en-us"> 
<head> 
<meta charset="UTF-8"> 
<title>Options Screen</title> 

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
<h1>Options</h1>
<h2>Select number of persons to feed:</h2>

    <form id="optionsForm"> 
        <label>Adults</label>
		<select name="adults">
			<option value="0" selected="">       </option>
			<option value="1">1 Adult</option>
			<option value="2">2 Adults</option>
			<option value="3">3 Adults</option>
		</select><br>

        <label>Children</label>
        <select name="children">
			<option value="0" selected="">       </option>
			<option value="1">1 Child</option>
			<option value="2">2 Children</option>
			<option value="3">3 Children</option>
		</select><br>

        <label>Infants</label>
        <select name="infants">
			<option value="0" selected="">       </option>
			<option value="1">1 Infant</option>
			<option value="2">2 Infants</option>
			<option value="3">3 Infants</option>
		</select><br>

		<label>Months</label>
		<select name="months">
			<option value="0" selected="">       </option>
			<option value="1">1 Month</option>
			<option value="2">2 Months</option>
			<option value="3">3 Months</option>
			<option value="4">4 Months</option>
			<option value="5">5 Months</option>
			<option value="6">6 Months</option>
			<option value="9">9 Months</option>
			<option value="12">12 Months</option>
		</select><br><br>

			<input type="radio" name="group1" value="1" onclick="radioFunction(this.value)">Basic Storage<br>
			<input type="radio" name="group1" value="2" onclick="radioFunction(this.value)">Deluxe Storage<br>

	<h2>Edit food lists for allergies or preferences</h2>

		<label>Select a color scheme:</label>
		<select name="color">
			<option value="black">Black</option>
			<option value="white" selected="">White</option>
			<option value="green">Green</option>
			<option value="blue">Blue</option>
			<option value="red">Red</option>
			<option value="purple">Purple</option>
		</select><br><br>
    
        <a href="#" id="submitOptionsLink">Save Imputed Data</a>
    </form>
    <br><br>

    
    <h2>Fetch Form</h2>
	<form>
		<input id="lookupOptionsId" />
		<a href="#" id="getOptionsLink">Get from Firebase</a>
		<div id="output"></div>                     

		<h3>Family Size</h3><a href="#" id="lookupFamilySize">Lookup Family Size</a>
		<ul id="size"></ul>
	</form>
    

</div><?php include "footer.php"; ?> 
 </div>
</div>
</body> 
</html>
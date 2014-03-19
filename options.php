<!DOCTYPE HTML> 
<html lang="en-us"> 
<head> 
<meta charset="UTF-8"> 
<title>Options Screen</title> 

<link href="style.css" rel="stylesheet" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head> 

<body> 
<div id="wrapper">

<?php include "header.php"; ?>
<div class="content"> 
<h1>Options</h1>
<p>Select number of persons to feed:</p>

<div> 
    Adults <input type="text" id="adults"><br> 
    Children <input type="text" id="children"><br>
    Number of Infants <input type="text" id="infants"><br><br>

    # Months of Storage <input type="text" id="months"><br><br>

    Basic Storage <input type="text" id="basic"><br>
	Deluxe Storage <input type="text" id="deluxe"><br>

	<p>Edit food lists for allergies or preferences</p>

    Select color scheme: <input type="text" id="color"><br><br>

    Size of Family <div id="size"></div> 
</div>
</div><?php include "footer.php"; ?> 
</div>
</body> 
</html>
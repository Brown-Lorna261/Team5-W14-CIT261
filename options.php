<!DOCTYPE HTML> 
<html lang="en-us"> 
<head> 
<meta charset="utf-8"> 
<title>Options Screen</title> 
<script type="text/javascript"> 

// Your JavaScript function belongs here. 
function computeSize() {
	var adults = parseInt(document.getElementById("adults").value);
	var children = parseInt(document.getElementById("children").value);
	var infants = parseInt(document.getElementById("infants").value);
	var basic = parseInt(document.getElementById("basic").value);
	var deluxe = parseInt(document.getElementById("deluxe").value);
	var color = parseInt(document.getElementById("color").value);
	var familySize = adults + (children * 0.8) + (infants * 0.3) + deluxe + basic;

	document.getElementById("size").innerHTML = familySize;
}

</script> 
</head> 

<body> 
<?php include "header.php"; ?> 
<h1>Options</h1>
<p>Select number of persons to feed:</p>

<div> 
    Adults <input type="text" id="adults"><br> 
    Children <input type="text" id="children"><br>
    Number of Infants <input type="text" id="infants"><br><br>

    # Months of Storage <input type="text" id="months"><br><br>

    Basic Storage <input type="text" id="basic"><br>
	Deluxe Storage <input type="text" id="deluxe"><br>

	<p>Edit food lists for allergies or preferences<p>

    Select color scheme: <input type="text" id="color"><br><br>

    Size of Family <div id="size"></div> 
</div> 
<?php include "footer.php"; ?> 
</body> 
</html>
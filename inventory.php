<!DOCTYPE HTML> 
<html lang="en-us"> 
<head> 
<meta charset="utf-8"> 
<title>Inventory Screen</title> 
<link href="styles.css" rel="stylesheet" type="text/css">

<meta name="viewport" content="width=device-width, initial-scale=1">
</head> 

<body> 
<div id="wrapper">

<?php include "header.php"; ?>
<div class="content"> 
<h1>Inventory</h1>
<p>Inventory category: 
  <select name="select" id="select">
    <option>Choose one</option>
    <option value="Dairy">Dairy</option>
    <option value="Breads">Breads</option>
    <option value="Meats">Meats</option>
    <option value="Vegetables">Vegetables</option>
    <option value="Spices">Spices</option>
    <option value="Toothpaste">Toothpaste</option>
  </select>
</p>
<table width="100%" border="1" cellspacing="2" cellpadding="4">
  <tr>
    <th width="1%" align="left" nowrap="nowrap" scope="row">Item Name</th>
    <td>&nbsp;</td>
    </tr>
  <tr>
    <th align="left" nowrap="nowrap" scope="row">Unit Size</th>
    <td>&nbsp;</td>
    </tr>
  <tr>
    <th align="left" nowrap="nowrap" scope="row">Items on Hand</th>
    <td>&nbsp;</td>
    </tr>
  <tr>
    <th align="left" nowrap="nowrap" scope="row">Recommended</th>
    <td>&nbsp;</td>
    </tr>
  <tr>
    <th align="left" nowrap="nowrap" scope="row">Needed</th>
    <td>&nbsp;</td>
    </tr>
  </table>
</div><?php include "footer.php"; ?> 
</div>
</body> 
</html>
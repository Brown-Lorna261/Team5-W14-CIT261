<!DOCTYPE HTML> 
<html lang="en-us"> 
<head> 
<meta charset="utf-8"> 
<title>Inventory Screen</title> 
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
<h2>Input Food to Inventory</h2>
     <form id="foodInputForm">
        <label>Food Item:</label>
            <select name="foodItem">
                <option value="0" selected>     </option>
                <option value="Rice">Rice</option>
                <option value="Wheat">Wheat</option>
                <option value="Powdered-Milk">Powdered Milk</option>
                <option value="Beans">Beans</option>
                <option value="Meat">Meat</option>
                <option value="Fruit">Fruit</option>
                <option value="Rolled-Oats">Rolled Oats</option>
                <option value="Sugar">Sugar</option>
                <option value="Pasta">Pasta</option>
                <option value="Corn">Corn</option>
                <option value="Vegetable">Vegetables</option>
                <option value="Dehydrated-Potatoes">Dehydrated Potatoes</option>
            </select><br>
            
        <label>Unit Type:</label>
                <select name="unitType">
                    <option value="pound" selected>Pound</option>
                    <option value="bottle">Bottle</option>
                    <option value="canRegular">Can, Regular</option>
                    <option value="canLarge">Can, Large</option>
                    <option value="Box">Box</option>
                    <option value="Liter">Liter</option>
                </select>
        
        <label>Recommended Amount:
            <input name="recommendedAmt" />
        </label>
         
         <label>Amount Added:</label>
            <select name="amountAdded">
                <option value="0" selected>None</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
            </select>
                    
                 
         <label>Amount Used: </label>
            <select name="amountUsed">
                <option value="0" selected>None</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
            </select>   
        
        <a href="#" id="submitInventoryLink">Save Food Inventory</a>
    </form>



    <h2>Fetch form</h2>
    <input id="lookupInventoryId" />
    <a href="#" id="getInventoryLink">Get from Firebase</a>
    <div id="output"></div>
    
    <h2>List Food Items</h2><a href="#" id="lookupFoodItems">Lookup Food Items</a>
    <ul id="foodItems"></ul>
    
    <h2>All Unit Types</h2><a href="#" id="lookupUnitType">Lookup Unit Types</a>
    <ul id="unitTypes"></ul>
    
    <h2>All Recommended Amounts</h2><a href="#" id="lookupRecommendation">Lookup Recommended Amounts</a>
    <ul id="RecommendedAmtList"></ul>
    
      <h2>Item Amounts Added</h2><a href="#" id="lookupAmtAdded">Lookup Amount Added</a>
    <ul id="itemAmountAdded"></ul>
    
      <h2>All Recommended Amounts</h2><a href="#" id="lookupAmtUsed">Lookup Amounts Used</a>
    <ul id="itemAmountUsed"></ul>


</div><?php include "footer.php"; ?> 
 </div>
</div>
</body> 
</html>
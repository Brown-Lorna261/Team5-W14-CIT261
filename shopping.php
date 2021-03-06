<!DOCTYPE HTML> 
<html lang="en-us"> 
<head> 
<meta charset="utf-8"> 
<title>Inventory Screen</title> 
<link href="style.css" rel="stylesheet" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="respond.min.js"></script>
<script src="https://cdn.firebase.com/v0/firebase.js"></script>
<script type="text/javascript" src="main.js"></script>
</head> 

<body> 
<div class="gridContainer clearfix">
  <div id="div1" class="fluid">
<?php include "header.php"; ?>
<div class="content">  
<h1>Shopping</h1>
<a href="#" id="lookupFoodItems">Lookup Food Items</a>
    <ul id="foodItems"></ul>
    
 <script>
        var lookupFoodItems = function(){
            event.preventDefault();
            
            var request = new XMLHttpRequest();
            request.open("GET", "https://foodforagingfiesta.firebaseio.com/foodItems.json");
            request.send(null);
            request.onreadystatechange = function() {
                if (request.readyState == 4 && request.status == 200) {
                    
                    var foodInventory = JSON.parse(request.responseText);
                    console.log(foodInventory);
                    
                    var outputList = document.getElementById('foodItems');
                    
                    for(key in foodInventory){
                        var liElement =  document.createElement('li');
                        liElement.textContent = foodInventory[key].foodItem;
                        outputList.appendChild(liElement);
                    }
                }
            }
        };
        
        var postToFirebase = function(event){
            event.preventDefault();
            var food = {};
            food.foodItem = document.getElementById("foodInputForm").foodItem.value;
            food.unitType = document.getElementById("foodInputForm").unitType.value;
            food.recommendedAmt = document.getElementById("foodInputForm").recommendedAmt.value;
            food.amountAdded = document.getElementById("foodInputForm").amountAdded.value;
            food.amountUsed = document.getElementById("foodInputForm").amountUsed.value;
            
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "https://foodforagingfiesta.firebaseio.com/foodItems.json", true);
            xhr.setRequestHeader("Content-Type", "application/json");
            
            xhr.onreadystatechange = function() {
                console.log(xhr,xhr.readyState,xhr.status);
                if (xhr.readyState == 4 && xhr.status == 200) {
                    var foodEntry = JSON.parse(xhr.responseText);
                    console.log(foodEntry);
                    document.getElementById("lookupInventoryId").value = food.foodItem;
                }
            }
            
            xhr.send(JSON.stringify(food));
            console.log('ajax',xhr);
            
            
        }
        
        var putToFirebase = function(event) {
            event.preventDefault();
            var foodEntry = {};
            foodEntry.foodItem = document.getElementById("foodInputForm").foodItem.value;
            foodEntry.unitType = document.getElementById("foodInputForm").unitType.value;
            foodEntry.recommendedAmt = document.getElementById("foodInputForm").recommendedAmt.value;
            foodEntry.amountAdded = document.getElementById("foodInputForm").amountAdded.value;
            foodEntry.amountUsed = document.getElementById("foodInputForm").amountUsed.value;

            var xhr = new XMLHttpRequest();
            xhr.open("PUT", "https://foodforagingfiesta.firebaseio.com/foodItems.json", true);
            xhr.setRequestHeader("Content-Type", "application/json");
            xhr.send(JSON.stringify(foodEntry));
        }

        var getFromFirebase = function(event) {
            event.preventDefault();
            
            var id = document.getElementById("lookupInventoryID").value;
            
            var request = new XMLHttpRequest();
            request.open("GET", "https://foodforagingfiesta.firebaseio.com/foodItems.json"+id+".json");
            request.send(null);
            request.onreadystatechange = function() {
                if (request.readyState == 4 && request.status == 200) {
                    console.log(request.responseText)
                    var foodOutput = JSON.parse(request.responseText);
                    var output = document.getElementById("output");
                    output.textContent = foodOutput[key].foodItem + " - " + foodOutput[key].unitType + " - " + foodOutput[key].recommendedAmt + " - " + foodOutput[key].amountAdded + " - " + foodOutput[key].amountUsed;
                }
            }
        }

        var deleteFromFirebase = function(event) {
            event.preventDefault();
            var request = new XMLHttpRequest();
            request.open("DELETE", "https://foodforagingfiesta.firebaseio.com/foodItems.json");
            request.send(null);
            request.onreadystatechange = function() {
                if (request.readyState == 4 && request.status == 204) {
                    var output = document.getElementById("output");
                    output.textContent = "";
                }
            }
        }

        var init = function() {
            document.getElementById('lookupFoodItems').addEventListener('click', lookupFoodItems);
            document.getElementById('submitInventoryLink').addEventListener('click', postToFirebase);
            document.getElementById('getInventoryLink').addEventListener('click', getFromFirebase);
            document.getElementById('lookupUnitTypes').addEventListener
            
        };
        document.addEventListener("DOMContentLoaded", init);
    </script>
    
</div><?php include "footer.php"; ?> 
 </div>
</div>
</body> 
</html>
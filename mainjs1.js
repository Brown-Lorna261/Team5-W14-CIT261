// JavaScript Document


//------- STart options JS ------->
var radioButton;
var radioFunction = function (bOrD) {
	radioButton = bOrD;
};
var lookupFamilySize = function () {
    event.preventDefault();
            
    var request = new XMLHttpRequest();
    request.open("GET", "https://foodforagingfiesta.firebaseio.com/options.json");
    request.send(null);
    request.onreadystatechange = function () {
        if (request.readyState == 4 && request.status == 200) {    
			var userInputs = JSON.parse(request.responseText);
			console.log(userInputs);
			var outputList = document.getElementById('size');
            
			for (key in size) {
				var liElement = document.createElement('li');
				liElement.textContent = size[key].name;
				outputList.appendChild(liElement);
			}
		}
    };
};
        
var postToFirebase = function (event) {
    event.preventDefault();

    var family = {};
    family.adults = document.getElementById("optionsForm").adults.value;
	family.children = document.getElementById("optionsForm").children.value;
	family.infants = document.getElementById("optionsForm").infants.value;
	family.months = document.getElementById("optionsForm").months.value;
	family.basicOrDeluxe = radioButton;
	family.color = document.getElementById("optionsForm").color.value;
            
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "https://foodforagingfiesta.firebaseio.com/options.json", true);
    xhr.setRequestHeader("Content-Type", "application/json");
           
    xhr.onreadystatechange = function () {
        console.log(xhr, xhr.readyState, xhr.status);
        if (xhr.readyState == 4 && xhr.status == 200) {
            var family = JSON.parse(xhr.responseText);
            console.log(family);
        }
    };
            
    xhr.send(JSON.stringify(family));
    console.log('ajax', xhr);
  
};
        
        
var putToFirebase = function (event) {
    event.preventDefault();
    var family = {};
    family.adults = document.getElementById("optionsForm").adults.value;
	family.children = document.getElementById("optionsForm").children.value;
	family.infants = document.getElementById("optionsForm").infants.value;
	family.months = document.getElementById("optionsForm").months.value;
	family.bOrD = radioButton;
	family.color = document.getElementById("optionsForm").color.value;
      
    var xhr = new XMLHttpRequest();
    xhr.open("PUT", "https://foodforagingfiesta.firebaseio.com/options.json", true);
    xhr.setRequestHeader("Content-Type", "application/json");
    xhr.send(JSON.stringify(family));
};
        
var getFromFirebase = function (event) {
	event.preventDefault();
    
	var id = document.getElementById("lookupOptionsId").value;       
    var request = new XMLHttpRequest();
    request.open("GET", "https://foodforagingfiesta.firebaseio.com/options.json" + id + ".json");
    request.send(null);
    request.onreadystatechange = function () {
        if (request.readyState == 4 && request.status == 200) {
            console.log(request.responseText);
            var family = JSON.parse(request.responseText);
            var output = document.getElementById("output");
            output.textContent = family;
        }
    };
};
             
              
var deleteFromFirebase = function (event) {
	event.preventDefault();
	var request = new XMLHttpRequest();
    request.open("DELETE", "https://foodforagingfiesta.firebaseio.com/options.json");
    request.send(null);
    request.onreadystatechange = function () {
        if (request.readyState == 4 && request.status == 204) {
            var output = document.getElementById("output");
            output.textContent = "";
        }
    };
};

var init = function () {
    document.getElementById('lookupOptionsId').addEventListener('click', lookupFamilySize);
	document.getElementById('submitOptionsLink').addEventListener('click', postToFirebase);
    document.getElementById('getOptionsLink').addEventListener('click', getFromFirebase);
           
};

document.addEventListener("DOMContentLoaded", init);

//-------END options JS------->

//------- Inventory JS Start---->

var lookupFoodItems = function () {
     "use strict";   
    event.preventDefault();
            
        var request = new XMLHttpRequest();
        request.open("GET", "https://foodforagingfiesta.firebaseio.com/foodItems.json");
        request.send(null);
        request.onreadystatechange = function () {
            if (request.readyState == 4 && request.status == 200) {
                    
                var foodInventory = JSON.parse(request.responseText);
                console.log(foodInventory);
                    
                var outputList = document.getElementById('foodItems');
                    
                for (key in foodInventory) {
                    var liElement =  document.createElement('li');
                    liElement.textContent = foodInventory[key].foodItem;
                    outputList.appendChild(liElement);
                }
            }
        };
    };
        
var postToFirebase = function (event) {
    "use strict";
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
            
    xhr.onreadystatechange = function () {
        console.log(xhr, xhr.readyState, xhr.status);
        if (xhr.readyState == 4 && xhr.status == 200) {
            var foodEntry = JSON.parse(xhr.responseText);
            console.log(foodEntry);
            document.getElementById("lookupInventoryId").value = food.foodItem;
        }
    };
            
    xhr.send(JSON.stringify(food));
    console.log('ajax', xhr);
            
            
};
        
var putToFirebase = function (event) {
        "use strict";
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
    };

var getFromFirebase = function (event) {
    "use strict";
    event.preventDefault();
            
    var id = document.getElementById("lookupInventoryID").value;
            
    var request = new XMLHttpRequest();
        request.open("GET", "https://foodforagingfiesta.firebaseio.com/foodItems.json" + id + ".json");
    request.send(null);
    request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
        console.log(request.responseText)
        var foodOutput = JSON.parse(request.responseText);
        var output = document.getElementById("output");
        output.textContent = foodOutput[key].foodItem + " - " + foodOutput[key].unitType + " - " + foodOutput[key].recommendedAmt + " - " + foodOutput[key].amountAdded + " - " + foodOutput[key].amountUsed;
            }
        }
    }

        var deleteFromFirebase = function (event) {
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

            
    };
        document.addEventListener("DOMContentLoaded", init);
		
//-----end inventory JS --------->
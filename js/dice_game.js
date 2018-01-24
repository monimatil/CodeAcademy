
var mas = [];

//retrieveLocalStorage(); // sita eil dumenis palieka net ir prkrovus psl

function addToScoreboard(){
    var r_number = Math.floor((Math.random() * 6)+1);
    var number = document.getElementById("nmbr").value;
    mas.push(r_number);
//---------------

    var fetchId = function(e_id) {
       var element = document.getElementById(e_id);
       return element;
    };
    var fetchClassIn = function(e_class, e_parent) {
       var elements = e_parent.getElementsByClassName(e_class);
       if (elements.length > 1) {
           return elements;
        } else {
            return elements[0];
        }
    };
    var changeSide = function(element, new_class) {
        var sides_reg = /(one|two|three|four|five|six)/g;
        var roll_class = element.className.replace(sides_reg, new_class);
        element.className = roll_class;
    };
    var pickDice = function(dice_id) {
        var $dice = fetchId(dice_id);
        var $dice_side = fetchClassIn("dice_side", $dice);
        return $dice_side;
    };
    var Dice = function(dice_name) {
        this.dice = pickDice(dice_name);
        this.sides = 6;
        this.roll = function() {
        switch (r_number) {
            case 1:
                changeSide(this.dice, "one");
            break;
            case 2:
                changeSide(this.dice, "two");
            break;
            case 3:
                changeSide(this.dice, "three");
            break;
            case 4:
                changeSide(this.dice, "four");
            break;
            case 5:
                changeSide(this.dice, "five");
            break;
            case 6:
                changeSide(this.dice, "six");
        }
        };
    };
    var dice_one = new Dice("dice_one");
  
    dice_one.roll();
   
//--------------
    document.getElementById("result").innerHTML = r_number;
    
    if (r_number == number) {
        document.getElementById("result1").innerHTML = "You win";
    }
    else {
        document.getElementById("result1").innerHTML = "You lose";
    }
    
    localStorage.setItem("scoreboard", mas.toString());
    printMas(mas);
}

function printMas(mas){
    var x = "";
    x = "<ul>";
    for(var i = 0;i < mas.length;i++){
        //console.log(mas[i]);
        x = x + "<li>" +mas[i]+"</li>";
    }
    x = x + "</ul>";
    document.getElementById("result").innerHTML = x;
}

// function retrieveLocalStorage(){
//  var localstorage_data = localStorage.getItem("scoreboard");
//  var _mas = localstorage_data.split(',');
//  printMas(_mas);
// }

      



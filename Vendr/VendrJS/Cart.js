
/*
var itemOne = document.getElementById('number').value;
var itemTwo = document.getElementById('number1').value;
var itemThree = document.getElementById('number2').value;
var itemFour = document.getElementById('number3').value;



if(itemOne == ""){
    itemOne = "0";
    
    x[0].style.display = "none";

}


if(itemTwo == ""){
    itemTwo = "0";

    x[1].style.display = "none";
}

if(itemThree == ""){
    itemThree = "0";

    x[2].style.display = "none";
}

if(itemFour == ""){
    itemFour = "0";

    x[3].style.display = "none";
}
*/

var x = document.getElementsByClassName("cart-item-row");

function quantUpdaterItem1() {
    var x = document.getElementById("number").value;
    document.getElementById("item1Inventory").innerHTML = 'x' + x ;
   // findTotal();
  }
  
  function quantUpdaterItem2() {
    var y = document.getElementById("number1").value;
    document.getElementById("item2Inventory").innerHTML = 'x' + y ;
    //findTotal();
  }
  
  function quantUpdaterItem3() {
    var z = document.getElementById("number2").value;
    document.getElementById("item3Inventory").innerHTML = 'x' + z ;
   // findTotal();
  }
  
  function quantUpdaterItem4() {
    var a = document.getElementById("number3").value;
    a = parseInt(a,10);
    console.log(typeof a);
    document.getElementById("item4Inventory").innerHTML = 'x' + a ;
   // findTotal();
  }
  
  function findTotal(){

    itemOne = document.getElementById('number').value;
    itemTwo = document.getElementById('number1').value;
    itemThree = document.getElementById('number2').value;
    itemFour = document.getElementById('number3').value;
    
    if(itemOne > 0){       
        x[0].style.display = "flex"; 
        itemOne = document.getElementById('number').value;
    } else if(itemOne == "" || itemOne == 0){
        itemOne = "0";
        x[0].style.display = "none";
    }
    
    if(itemTwo > 0){
        x[1].style.display = "flex";
        itemTwo = document.getElementById('number1').value;
    } else if(itemTwo == "" || itemTwo == 0){
        itemTwo = "0";
        x[1].style.display = "none";
    }
    
    if(itemThree > 0){
        x[2].style.display = "flex";
        itemThree = document.getElementById('number2').value;
    } else if(itemThree == "" || itemThree == 0){
        itemThree = "0";
        x[2].style.display = "none";
    }
    
    if(itemFour > 0){
        x[3].style.display = "flex";
        itemFour = document.getElementById('number3').value;
    } else if(itemFour == "" || itemFour == 0){
        itemFour = "0";
        x[3].style.display = "none";
    }
  
    itemOne = parseFloat(itemOne);
    
    itemTwo = parseFloat(itemTwo);
    console.log(itemOne+itemTwo);
    itemThree = parseFloat(itemThree);
    itemFour = parseFloat(itemFour);
  
    var total = (itemOne*itemPriceOne) + (itemTwo*itemPriceTwo) + (itemThree*itemPriceThree) + (itemFour*itemPriceFour);
    //console.log(total);
    
    var totalItems = itemOne + itemTwo + itemThree + itemFour;
    console.log(typeof totalItems);
    document.getElementById('totalPrice').innerHTML = total;
    document.getElementById('totalItems').innerHTML=totalItems;
  }

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
    var itemOne = document.getElementById('number').value;
    var itemTwo = document.getElementById('number1').value;
    var itemThree = document.getElementById('number2').value;
    var itemFour = document.getElementById('number3').value;
  
    var itemOne = parseFloat(itemOne);
    
    var itemTwo = parseFloat(itemTwo);
    console.log(itemOne+itemTwo);
    var itemThree = parseFloat(itemThree);
    var itemFour = parseFloat(itemFour);
  
    var total = (itemOne*itemPriceOne) + (itemTwo*itemPriceTwo) + (itemThree*itemPriceThree) + (itemFour*itemPriceFour);
    //console.log(total);
    
    var totalItems = itemOne + itemTwo + itemThree + itemFour;
    console.log(typeof totalItems);
    document.getElementById('totalPrice').innerHTML = total;
    document.getElementById('totalItems').innerHTML=totalItems;
  }
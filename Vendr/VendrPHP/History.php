<?php
  session_start();
  $servername = "10.200.2.17";
  $username = "vendr";
  $password = "vendr";
  $dbname = 'vendr';
  $dbport = '3306';
  
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname, $dbport);
  
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  $username = $_SESSION['username'];
  

  $sql0="SELECT UserID FROM customer WHERE CustomerUser = '$username'";
  $result0=mysqli_query($conn,$sql0);
  $loader2 = mysqli_fetch_array($result0);
  $userID = $loader2[0];

  $sql1="SELECT * FROM ordershistory WHERE UserID = '$userID'";
  $result0=mysqli_query($conn,$sql1);
  while($row = mysqli_fetch_assoc($result0)) {
    $orderID[] = $row["OrderID"];
  }

  // create sql part for IN condition by imploding comma after each id
  $in = '(' . implode(',', $orderID) .')';


  $sql0 = "SELECT * FROM orders WHERE OrderID IN " . $in;
  $result0=mysqli_query($conn,$sql0);

  while($row = mysqli_fetch_assoc($result0)) {
    $ordersID[] = $row["OrderID"];
    $ordersItemID[] = $row["ItemID"];
  }


$numberOfOrders = sizeof($orderID);
setcookie("numOrders",$numberOfOrders);

//need: itemID(item name), item quant, item price, order total.

//grabbing info from item:
$in = '(' . implode(',', $ordersItemID) .')';

$sql = "SELECT item.ItemPrice,item.ItemName
FROM item WHERE item.itemID IN " . $in;
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($result)) {
  $itemPrice[] = $row["ItemPrice"];
  $itemName[] = $row["ItemName"];
}

$one = 1;

?>

<html id="fullHD">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='../VendrCSS/History.css' rel='stylesheet' type='text/css'>
    <link href='../VendrCSS/Navbar.css' rel='stylesheet' type='text/css'>
    <link href='../VendrCSS/Main.css' rel='stylesheet' type='text/css'>
  </head>
  <body>
    <div class="nav-bar">
      <div class="row">
        <div class="double-column">
          <h2 id="vendr">Vendr</h2>
        </div>
        <div class="column">
          <ul>
            <li><a href="../VendrPHP/Home.php">Home</a></li>
            <li><a class="active" href="../VendrPHP/History.php">History</a></li>
            <li><a href="../VendrPHP/Account.php">Account</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div>
      <button id="order0" type="button" class="collapsible"> <?php echo "Order #: " , $orderID[$numberOfOrders-1]; 
      $tempOrderID = $orderID[$numberOfOrders-1]; 
      //grabs itemID and total price from orders table where the orderID is =
      $findOrderTotal = "SELECT TotalPrice, OrderItemQuanity FROM orders WHERE OrderID = '$orderID[$tempOrderID]';";
      $resultOrders = mysqli_query($conn,$findOrderTotal);
      while($row1 = mysqli_fetch_assoc($resultOrders)) {
        $TotalPrice[] = $row1["TotalPrice"];
        $OrderItemQuant[] = $row1["OrderItemQuanity"];}
        echo $TotalPrice[0];?> 
      </button>
      <div class="content">
        <div class="cart-column">
          <div class="cart-module-row">
            <div class="column">
              <div class="cart-item-row">
                <p class="cart-item-name">
                  Pepsi
                </p>
                <p class="cart-item-quantity">
                  x4
                </p>
                <p class="cart-item-price">
                  $4
                </p>
              </div>
              <div class="cart-item-row">
                <p class="cart-item-name">
                  Pepsi
                </p>
                <p class="cart-item-quantity">
                  x4
                </p>
                <p class="cart-item-price">
                  $4
                </p>
              </div>
              <div class="cart-item-row">
                <p class="cart-item-name">
                  Pepsi
                </p>
                <p class="cart-item-quantity">
                  x4
                </p>
                <p class="cart-item-price">
                  $4
                </p>
              </div>
            </div>
          </div>
          <div class="total-row">
            <p class="total">
              Total
            </p>
            <p class="total-price">
              <?php echo $TotalPrice[0]; ?>
            </p>
          </div>
        </div>
    </div>
    <div>
      <button id="order1" type="button" class="collapsible"><?php echo "Order #: " , $orderID[$numberOfOrders-2]; ?></button>
      <div class="content">
        <div class="cart-column">
          <div class="cart-module-row">
            <div class="column">
              <div class="cart-item-row">
                <p class="cart-item-name">
                  Pepsi
                </p>
                <p class="cart-item-quantity">
                  x4
                </p>
                <p class="cart-item-price">
                  $4
                </p>
              </div>
              <div class="cart-item-row">
                <p class="cart-item-name">
                  Pepsi
                </p>
                <p class="cart-item-quantity">
                  x4
                </p>
                <p class="cart-item-price">
                  $4
                </p>
              </div>
              <div class="cart-item-row">
                <p class="cart-item-name">
                  Pepsi
                </p>
                <p class="cart-item-quantity">
                  x4
                </p>
                <p class="cart-item-price">
                  $4
                </p>
              </div>
            </div>
          </div>
          <div class="total-row">
            <p class="total">
              Total
            </p>
            <p class="total-price">
              $12
            </p>
          </div>
        </div>
    </div>
    <div>
      <button id="order2" type="button" class="collapsible"><?php echo "Order #: " , $orderID[$numberOfOrders-3]; ?></button>
      <div class="content">
        <div class="cart-column">
          <div class="cart-module-row">
            <div class="column">
              <div class="cart-item-row">
                <p class="cart-item-name">
                  Pepsi
                </p>
                <p class="cart-item-quantity">
                  x4
                </p>
                <p class="cart-item-price">
                  $4
                </p>
              </div>
              <div class="cart-item-row">
                <p class="cart-item-name">
                  Pepsi
                </p>
                <p class="cart-item-quantity">
                  x4
                </p>
                <p class="cart-item-price">
                  $4
                </p>
              </div>
              <div class="cart-item-row">
                <p class="cart-item-name">
                  Pepsi
                </p>
                <p class="cart-item-quantity">
                  x4
                </p>
                <p class="cart-item-price">
                  $4
                </p>
              </div>
            </div>
          </div>
          <div class="total-row">
            <p class="total">
              Total
            </p>
            <p class="total-price">
              $12
            </p>
          </div>
        </div>
    </div>
    <div >
      <button id="order3" type="button" class="collapsible"><?php echo "Order #: " , $orderID[$numberOfOrders-4]; ?></button>
      <div class="content">
        <div class="cart-column">
          <div class="cart-module-row">
            <div class="column">
              <div class="cart-item-row">
                <p class="cart-item-name">
                  Pepsi
                </p>
                <p class="cart-item-quantity">
                  x4
                </p>
                <p class="cart-item-price">
                  $4
                </p>
              </div>
              <div class="cart-item-row">
                <p class="cart-item-name">
                  Pepsi
                </p>
                <p class="cart-item-quantity">
                  x4
                </p>
                <p class="cart-item-price">
                  $4
                </p>
              </div>
              <div class="cart-item-row">
                <p class="cart-item-name">
                  Pepsi
                </p>
                <p class="cart-item-quantity">
                  x4
                </p>
                <p class="cart-item-price">
                  $4
                </p>
              </div>
            </div>
          </div>
          <div class="total-row">
            <p class="total">
              Total
            </p>
            <p class="total-price">
              $12
            </p>
          </div>
        </div>
    </div>
    <div >
      <button id="order4" type="button" class="collapsible"><?php echo "Order #: " , $orderID[$numberOfOrders-5]; ?></button>
      <div class="content">
        <div class="cart-column">
          <div class="cart-module-row">
            <div class="column">
              <div class="cart-item-row">
                <p class="cart-item-name">
                  Pepsi
                </p>
                <p class="cart-item-quantity">
                  x4
                </p>
                <p class="cart-item-price">
                  $4
                </p>
              </div>
              <div class="cart-item-row">
                <p class="cart-item-name">
                  Pepsi
                </p>
                <p class="cart-item-quantity">
                  x4
                </p>
                <p class="cart-item-price">
                  $4
                </p>
              </div>
              <div class="cart-item-row">
                <p class="cart-item-name">
                  Pepsi
                </p>
                <p class="cart-item-quantity">
                  x4
                </p>
                <p class="cart-item-price">
                  $4
                </p>
              </div>
            </div>
          </div>
          <div class="total-row">
            <p class="total">
              Total
            </p>
            <p class="total-price">
              $12
            </p>
          </div>
        </div>
    </div>
    <div >
      <button id="order5" type="button" class="collapsible"><?php echo "Order #: " , $orderID[$numberOfOrders-6]; ?></button>
      <div class="content">
        <div class="cart-column">
          <div class="cart-module-row">
            <div class="column">
              <div class="cart-item-row">
                <p class="cart-item-name">
                  Pepsi
                </p>
                <p class="cart-item-quantity">
                  x4
                </p>
                <p class="cart-item-price">
                  $4
                </p>
              </div>
              <div class="cart-item-row">
                <p class="cart-item-name">
                  Pepsi
                </p>
                <p class="cart-item-quantity">
                  x4
                </p>
                <p class="cart-item-price">
                  $4
                </p>
              </div>
              <div class="cart-item-row">
                <p class="cart-item-name">
                  Pepsi
                </p>
                <p class="cart-item-quantity">
                  x4
                </p>
                <p class="cart-item-price">
                  $4
                </p>
              </div>
            </div>
          </div>
          <div class="total-row">
            <p class="total">
              Total
            </p>
            <p class="total-price">
              $12
            </p>
          </div>
        </div>
    </div>
    <div >
      <button id="order6" type="button" class="collapsible"><?php echo "Order #: " , $orderID[$numberOfOrders-7]; ?></button>
      <div class="content">
        <div class="cart-column">
          <div class="cart-module-row">
            <div class="column">
              <div class="cart-item-row">
                <p class="cart-item-name">
                  Pepsi
                </p>
                <p class="cart-item-quantity">
                  x4
                </p>
                <p class="cart-item-price">
                  $4
                </p>
              </div>
              <div class="cart-item-row">
                <p class="cart-item-name">
                  Pepsi
                </p>
                <p class="cart-item-quantity">
                  x4
                </p>
                <p class="cart-item-price">
                  $4
                </p>
              </div>
              <div class="cart-item-row">
                <p class="cart-item-name">
                  Pepsi
                </p>
                <p class="cart-item-quantity">
                  x4
                </p>
                <p class="cart-item-price">
                  $4
                </p>
              </div>
            </div>
          </div>
          <div class="total-row">
            <p class="total">
              Total
            </p>
            <p class="total-price">
              $12
            </p>
          </div>
        </div>
    </div>
    <div >
      <button id="order7" type="button" class="collapsible"><?php echo "Order #: " , $orderID[$numberOfOrders-8]; ?></button>
      <div class="content">
        <div class="cart-column">
          <div class="cart-module-row">
            <div class="column">
              <div class="cart-item-row">
                <p class="cart-item-name">
                  Pepsi
                </p>
                <p class="cart-item-quantity">
                  x4
                </p>
                <p class="cart-item-price">
                  $4
                </p>
              </div>
              <div class="cart-item-row">
                <p class="cart-item-name">
                  Pepsi
                </p>
                <p class="cart-item-quantity">
                  x4
                </p>
                <p class="cart-item-price">
                  $4
                </p>
              </div>
              <div class="cart-item-row">
                <p class="cart-item-name">
                  Pepsi
                </p>
                <p class="cart-item-quantity">
                  x4
                </p>
                <p class="cart-item-price">
                  $4
                </p>
              </div>
            </div>
          </div>
          <div class="total-row">
            <p class="total">
              Total
            </p>
            <p class="total-price">
              $12
            </p>
          </div>
        </div>
    </div>
    <div >
      <button id="order8" type="button" class="collapsible"><?php echo "Order #: " , $orderID[$numberOfOrders-9]; ?></button>
      <div class="content">
        <div class="cart-column">
          <div class="cart-module-row">
            <div class="column">
              <div class="cart-item-row">
                <p class="cart-item-name">
                  Pepsi
                </p>
                <p class="cart-item-quantity">
                  x4
                </p>
                <p class="cart-item-price">
                  $4
                </p>
              </div>
              <div class="cart-item-row">
                <p class="cart-item-name">
                  Pepsi
                </p>
                <p class="cart-item-quantity">
                  x4
                </p>
                <p class="cart-item-price">
                  $4
                </p>
              </div>
              <div class="cart-item-row">
                <p class="cart-item-name">
                  Pepsi
                </p>
                <p class="cart-item-quantity">
                  x4
                </p>
                <p class="cart-item-price">
                  $4
                </p>
              </div>
            </div>
          </div>
          <div class="total-row">
            <p class="total">
              Total
            </p>
            <p class="total-price">
              $12
            </p>
          </div>
        </div>
    </div>
    <div >
      <button id="order9" type="button" class="collapsible"><?php echo "Order #: " , $orderID[$numberOfOrders-10]; ?></button>
      <div class="content">
        <div class="cart-column">
          <div class="cart-module-row">
            <div class="column">
              <div class="cart-item-row">
                <p class="cart-item-name">
                  Pepsi
                </p>
                <p class="cart-item-quantity">
                  x4
                </p>
                <p class="cart-item-price">
                  $4
                </p>
              </div>
              <div class="cart-item-row">
                <p class="cart-item-name">
                  Pepsi
                </p>
                <p class="cart-item-quantity">
                  x4
                </p>
                <p class="cart-item-price">
                  $4
                </p>
              </div>
              <div class="cart-item-row">
                <p class="cart-item-name">
                  Pepsi
                </p>
                <p class="cart-item-quantity">
                  x4
                </p>
                <p class="cart-item-price">
                  $4
                </p>
              </div>
            </div>
          </div>
          <div class="total-row">
            <p class="total">
              Total
            </p>
            <p class="total-price">
              $12
            </p>
          </div>
        </div>
    </div>
  </body>
  <script src="../VendrJS/History.js"></script>
  <script>
    //document.getElementById("order0").style.display="none";
    var numberOfOrders = getCookie("numOrders");
    console.log(numberOfOrders);

    //do some math in the if statments
    if(numberOfOrders==0){
      document.getElementById("order0").style.display = "none";
      document.getElementById("order1").style.display = "none";
      document.getElementById("order2").style.display = "none";
      document.getElementById("order3").style.display = "none";
      document.getElementById("order4").style.display = "none";
      document.getElementById("order5").style.display = "none";
      document.getElementById("order6").style.display = "none";
      document.getElementById("order7").style.display = "none";
      document.getElementById("order8").style.display = "none";
      document.getElementById("order9").style.display = "none";
    }else if(numberOfOrders==1){
      document.getElementById("order1").style.display = "none";
      document.getElementById("order2").style.display = "none";
      document.getElementById("order3").style.display = "none";
      document.getElementById("order4").style.display = "none";
      document.getElementById("order5").style.display = "none";
      document.getElementById("order6").style.display = "none";
      document.getElementById("order7").style.display = "none";
      document.getElementById("order8").style.display = "none";
      document.getElementById("order9").style.display = "none";
    }else if(numberOfOrders==2){
      document.getElementById("order2").style.display = "none";
      document.getElementById("order3").style.display = "none";
      document.getElementById("order4").style.display = "none";
      document.getElementById("order5").style.display = "none";
      document.getElementById("order6").style.display = "none";
      document.getElementById("order7").style.display = "none";
      document.getElementById("order8").style.display = "none";
      document.getElementById("order9").style.display = "none";
    }else if(numberOfOrders==3){
      document.getElementById("order3").style.display = "none";
      document.getElementById("order4").style.display = "none";
      document.getElementById("order5").style.display = "none";
      document.getElementById("order6").style.display = "none";
      document.getElementById("order7").style.display = "none";
      document.getElementById("order8").style.display = "none";
      document.getElementById("order9").style.display = "none";
    }else if(numberOfOrders==4){
      document.getElementById("order4").style.display = "none";
      document.getElementById("order5").style.display = "none";
      document.getElementById("order6").style.display = "none";
      document.getElementById("order7").style.display = "none";
      document.getElementById("order8").style.display = "none";
      document.getElementById("order9").style.display = "none";
    }else if(numberOfOrders==5){
      document.getElementById("order5").style.display = "none";
      document.getElementById("order6").style.display = "none";
      document.getElementById("order7").style.display = "none";
      document.getElementById("order8").style.display = "none";
      document.getElementById("order9").style.display = "none";
    }else if(numberOfOrders==6){
      document.getElementById("order6").style.display = "none";
      document.getElementById("order7").style.display = "none";
      document.getElementById("order8").style.display = "none";
      document.getElementById("order9").style.display = "none";
    }else if(numberOfOrders==7){
      document.getElementById("order7").style.display = "none";
      document.getElementById("order8").style.display = "none";
      document.getElementById("order9").style.display = "none";
    }else if(numberOfOrders==8){
      document.getElementById("order8").style.display = "none";
      document.getElementById("order9").style.display = "none";
    }else if(numberOfOrders==9){
      document.getElementById("order9").style.display = "none";
    }else{
      console.log( "you fucked this up bro");
      document.getElementById("order0").style.display = "none";
    }
    //find the cookie
    function getCookie(cname) {
      var name = cname + "=";
      var decodedCookie = decodeURIComponent(document.cookie);
      var ca = decodedCookie.split(';');
      for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
          c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
          return c.substring(name.length, c.length);
        }
      }
      return "";
    }
</script>
</html>
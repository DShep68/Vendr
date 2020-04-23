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
      <button type="button" class="collapsible">Order#11111</button>
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
      <button type="button" class="collapsible">Order#11111</button>
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
      <button type="button" class="collapsible">Order#11111</button>
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
      <button type="button" class="collapsible">Order#11111</button>
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
      <button type="button" class="collapsible">Order#11111</button>
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
      <button type="button" class="collapsible">Order#11111</button>
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
      <button type="button" class="collapsible">Order#11111</button>
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
      <button type="button" class="collapsible">Order#11111</button>
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
      <button type="button" class="collapsible">Order#11111</button>
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
      <button type="button" class="collapsible">Order#11111</button>
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
</html>

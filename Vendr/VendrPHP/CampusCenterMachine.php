<?php

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
#echo "Connected successfully <br>";

#grabbing snack types to populate sidebar
$sql = "SELECT DISTINCT ItemType FROM item";
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($result)) {
  $types[] = $row["ItemType"];
}


?>

<html id="fullHD">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='../VendrCSS/Machine.css' rel='stylesheet' type='text/css'>
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
            <li><a class="active" href="../VendrPHP/Home.html">Home</a></li>
            <li><a href="../VendrPHP/History.html">History</a></li>
            <li><a href="../VendrPHP/Account.html">Account</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="main">
      <div class="row">
        <div class="item-double-column">
          <div class="item-module">
            <div class="row">
              <div class="item">
                <div class="column">
                  <img src="../VendrIMG/pepsi.png" alt="pepsi">
                  <input type="number" placeholder="0" step="1" min="0" max="10" id="number">
                  <label class="item-price">$4</label>
                  <label class="item-counter">x4</label>
                </div>
              </div>
              <div class="item">
                <div class="column">
                  <img src="../VendrIMG/pepsi.png" alt="pepsi">
                  <input type="number" placeholder="0" step="1" min="0" max="10" id="number">
                  <label class="item-price">$4</label>
                  <label class="item-counter">x4</label>
                </div>
              </div>
              <div class="item">
                <div class="column">
                  <img src="../VendrIMG/pepsi.png" alt="pepsi">
                  <input type="number" placeholder="0" step="1" min="0" max="10" id="number">
                  <label class="item-price">$4</label>
                  <label class="item-counter">x4</label>
                </div>
              </div>
              <div class="item">
                <div class="column">
                  <img src="../VendrIMG/pepsi.png" alt="pepsi">
                  <input type="number" placeholder="0" step="1" min="0" max="10" id="number">
                  <label class="item-price">$4</label>
                  <label class="item-counter">x4</label>
                </div>
              </div>
            </div>
          </div>
          <div class="item-module">
            <div class="row">
              <div class="item">
                <div class="column">
                  <img src="../VendrIMG/pepsi.png" alt="pepsi">
                  <input type="number" placeholder="0" step="1" min="0" max="10" id="number">
                  <label class="item-price">$4</label>
                  <label class="item-counter">x4</label>
                </div>
              </div>
              <div class="item">
                <div class="column">
                  <img src="../VendrIMG/pepsi.png" alt="pepsi">
                  <input type="number" placeholder="0" step="1" min="0" max="10" id="number">
                  <label class="item-price">$4</label>
                  <label class="item-counter">x4</label>
                </div>
              </div>
              <div class="item">
                <div class="column">
                  <img src="../VendrIMG/pepsi.png" alt="pepsi">
                  <input type="number" placeholder="0" step="1" min="0" max="10" id="number">
                  <label class="item-price">$4</label>
                  <label class="item-counter">x4</label>
                </div>
              </div>
              <div class="item">
                <div class="column">
                  <img src="../VendrIMG/pepsi.png" alt="pepsi">
                  <input type="number" placeholder="0" step="1" min="0" max="10" id="number">
                  <label class="item-price">$4</label>
                  <label class="item-counter">x4</label>
                </div>
              </div>
            </div>
          </div>
          <div class="item-module">
            <div class="row">
              <div class="item">
                <div class="column">
                  <img src="../VendrIMG/pepsi.png" alt="pepsi">
                  <input type="number" placeholder="0" step="1" min="0" max="10" id="number">
                  <label class="item-price">$4</label>
                  <label class="item-counter">x4</label>
                </div>
              </div>
              <div class="item">
                <div class="column">
                  <img src="../VendrIMG/pepsi.png" alt="pepsi">
                  <input type="number" placeholder="0" step="1" min="0" max="10" id="number">
                  <label class="item-price">$4</label>
                  <label class="item-counter">x4</label>
                </div>
              </div>
              <div class="item">
                <div class="column">
                  <img src="../VendrIMG/pepsi.png" alt="pepsi">
                  <input type="number" placeholder="0" step="1" min="0" max="10" id="number">
                  <label class="item-price">$4</label>
                  <label class="item-counter">x4</label>
                </div>
              </div>
              <div class="item">
                <div class="column">
                  <img src="../VendrIMG/pepsi.png" alt="pepsi">
                  <input type="number" placeholder="0" step="1" min="0" max="10" id="number">
                  <label class="item-price">$4</label>
                  <label class="item-counter">x4</label>
                </div>
              </div>
            </div>
          </div>
        </div>
          <div class="cart-column">
            <label class="item-counter">Added to Cart</label>
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
            <form action="">
              <input type="submit" id="pay" value="Pay Here">
            </form>
          </div>
      </div>
    </div>
  </body>
</html>

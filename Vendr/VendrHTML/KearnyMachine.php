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
$sql = "SELECT item.ItemID,item.ItemPrice,item.ItemName,inventory.Quanity
FROM item ,inventory
WHERE  item.ItemID =inventory.ItemID AND inventory.MachineID = 6;";
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($result)) {
  $itemID[] = $row["ItemType"];
  $itemPrice[] = $row["ItemPrice"];
  $itemName[] = $row["ItemName"];
  $inventroy[] = $row["Quanity"];
}
function itemImagePuller($item){
  if($item =='Pepsi'){
    echo' <img src="../VendrIMG/pepsi.png" alt="pepsi">';
  }elseif($item == 'Coke'){
    echo' <img src="../VendrIMG/coke.jpg" alt="pepsi">';
  }elseif($item == 'Sprite'){
    echo' <img src="../VendrIMG/sprite.png" alt="pepsi">';
  }elseif($item == 'Fanta'){
    echo' <img src="../VendrIMG/fanta.jpg" alt="pepsi">';
  }elseif($item == 'Lays Chips'){
    echo' <img src="../VendrIMG/lays.jpg" alt="pepsi">';
  }elseif($item == 'HeartWorm Gummies'){
    echo' <img src="../VendrIMG/gummies.jpg" alt="pepsi">';
  }elseif($item == 'Fritos'){
    echo' <img src="../VendrIMG/fritos.jpg" alt="pepsi">';
  }elseif($item == 'Poptart'){
    echo' <img src="../VendrIMG/poptart.jpg" alt="pepsi">';
  }elseif($item == 'Cookies'){
    echo' <img src="../VendrIMG/cookies.jpg" alt="pepsi">';
  }elseif($item == 'White Claw'){
    echo' <img src="../VendrIMG/whiteclaw.jpg" alt="pepsi">';
  }else{
    echo'you fucked up the function call bro';
  }
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
            <ul>
            <li><a class="active" href="../VendrPHP/Home.php">Home</a></li>
            <li><a href="../VendrPHP/History.php">History</a></li>
            <li><a href="../VendrPHP/Account.php">Account</a></li>
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
                  <?php itemImagePuller($itemName[0]);     ?>
                  <input type="number" placeholder="0" step="1" min="0" max="10" id="number">
                  <label class="item-price"><?php echo $itemPrice[0]?></label>
                  <label class="item-counter"><?php echo $inventroy[0]?></label>
                </div>
              </div>
              <div class="item">
                <div class="column">
                <?php itemImagePuller($itemName[1]);     ?>
                  <input type="number" placeholder="0" step="1" min="0" max="10" id="number">
                  <label class="item-price"><?php echo $itemPrice[1]?></label>
                  <label class="item-counter"><?php echo $inventroy[1]?></label>
                </div>
              </div>
              <div class="item">
                <div class="column">
                <?php itemImagePuller($itemName[2]);     ?>
                  <input type="number" placeholder="0" step="1" min="0" max="10" id="number">
                  <label class="item-price"><?php echo $itemPrice[2]?></label>
                  <label class="item-counter"><?php echo $inventroy[2]?></label>
                </div>
              </div>
              <div class="item">
                <div class="column">
                <?php itemImagePuller($itemName[3]);     ?>
                  <input type="number" placeholder="0" step="1" min="0" max="10" id="number">
                  <label class="item-price"><?php echo $itemPrice[3]?></label>
                  <label class="item-counter"><?php echo $inventroy[3]?></label>
                </div>
              </div>
            </div>
          </div>

          <div class="item-module">
          
            <div class="row">
         
              <div class="item">
                
                <div class="column">
                <!--
                  <img src="../VendrIMG/pepsi.png" alt="pepsi">
                  <input type="number" placeholder="0" step="1" min="0" max="10" id="number">
                  <label class="item-price">$4</label>
                  <label class="item-counter">x4</label>
                    -->
                </div>
              </div>
              <div class="item">
                <div class="column">
                   <!--
                  <img src="../VendrIMG/pepsi.png" alt="pepsi">
                  <input type="number" placeholder="0" step="1" min="0" max="10" id="number">
                  <label class="item-price">$4</label>
                  <label class="item-counter">x4</label>
                    -->
                </div>
              </div>
              <div class="item">
                <div class="column">
                   <!--
                  <img src="../VendrIMG/pepsi.png" alt="pepsi">
                  <input type="number" placeholder="0" step="1" min="0" max="10" id="number">
                  <label class="item-price">$4</label>
                  <label class="item-counter">x4</label>
                    -->
                </div>
              </div>
              <div class="item">
                <div class="column">
                   <!--
                  <img src="../VendrIMG/pepsi.png" alt="pepsi">
                  <input type="number" placeholder="0" step="1" min="0" max="10" id="number">
                  <label class="item-price">$4</label>
                  <label class="item-counter">x4</label>
                    -->
                </div>
                
              </div>
             
            </div>
           
          </div>
          <div class="item-module">
         
            <div class="row">
              <div class="item">
                <div class="column">
                   <!--
                  <img src="../VendrIMG/pepsi.png" alt="pepsi">
                  <input type="number" placeholder="0" step="1" min="0" max="10" id="number">
                  <label class="item-price">$4</label>
                  <label class="item-counter">x4</label>
                    -->
                </div>
              </div>
              <div class="item">
                <div class="column">
                   <!--
                  <img src="../VendrIMG/pepsi.png" alt="pepsi">
                  <input type="number" placeholder="0" step="1" min="0" max="10" id="number">
                  <label class="item-price">$4</label>
                  <label class="item-counter">x4</label>
                    -->
                </div>
              </div>
              <div class="item">
                <div class="column">
                   <!--
                  <img src="../VendrIMG/pepsi.png" alt="pepsi">
                  <input type="number" placeholder="0" step="1" min="0" max="10" id="number">
                  <label class="item-price">$4</label>
                  <label class="item-counter">x4</label>
                    -->
                </div>
              </div>
              <div class="item">
                <div class="column">
                   <!--
                  <img src="../VendrIMG/pepsi.png" alt="pepsi">
                  <input type="number" placeholder="0" step="1" min="0" max="10" id="number">
                  <label class="item-price">$4</label>
                  <label class="item-counter">x4</label>
                    -->
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

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
#echo $types[1];
#testing
$sql = "SELECT DISTINCT Location FROM machine";
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($result)) {
  $types[] = $row["Location"];
}
#echo $types[1];
?>
<html id="fullHD">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='../VendrCSS/Home.css' rel='stylesheet' type='text/css'>
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
            <li><a class="active" href="../VendrHTML/Home.html">Home</a></li>
            <li><a href="../VendrHTML/History.html">History</a></li>
            <li><a href="../VendrHTML/Account.html">Account</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="main">
      <div class="row">
        <div class="column">
          <div class="filtering">
            <div class="category-title">Categories</div>
            <div class="items">
              <label class="container"><?php echo $types[0] ?>
                <input type="checkbox" checked="checked">
                <span class="checkmark"></span>
              </label>
              <label class="container"><?php echo $types[1] ?>
                <input type="checkbox">
                <span class="checkmark"></span>
              </label>
              <!--
              <label class="container">Three
                <input type="checkbox">
                <span class="checkmark"></span>
              </label>
              <label class="container">Four
                <input type="checkbox">
                <span class="checkmark"></span>
              </label>
              -->
            </div>
          </div>
          <div class="filtering">
            <div class="category-title">Location
            </div>
            <div class="items">
              <label class="container">One
                <input type="checkbox" checked="checked">
                <span class="checkmark"></span>
              </label>
              <label class="container">Two
                <input type="checkbox">
                <span class="checkmark"></span>
              </label>
              <label class="container">Three
                <input type="checkbox">
                <span class="checkmark"></span>
              </label>
              <label class="container">Four
                <input type="checkbox">
                <span class="checkmark"></span>
              </label>
            </div>
          </div>
          <div class="filtering">
            <div class="category-title">Drinks</div>
            <div class="items">
              <label class="container">One
                <input type="checkbox" checked="checked">
                <span class="checkmark"></span>
              </label>
              <label class="container">Two
                <input type="checkbox">
                <span class="checkmark"></span>
              </label>
              <label class="container">Three
                <input type="checkbox">
                <span class="checkmark"></span>
              </label>
              <label class="container">Four
                <input type="checkbox">
                <span class="checkmark"></span>
              </label>
            </div>
          </div>
          <div class="filtering">
            <div class="category-title">Snacks</div>
            <div class="items">
              <label class="container">One
                <input type="checkbox" checked="checked">
                <span class="checkmark"></span>
              </label>
              <label class="container">Two
                <input type="checkbox">
                <span class="checkmark"></span>
              </label>
              <label class="container">Three
                <input type="checkbox">
                <span class="checkmark"></span>
              </label>
              <label class="container">Four
                <input type="checkbox">
                <span class="checkmark"></span>
              </label>
            </div>
          </div>
        </div>
        <div class="quad-column">
          <div class="machines">
            <div class="row">
              <div class="machine">
                <a href="../VendrHTML/Machine.html">
                  <div class="column">
                    <img src="../VendrIMG/machine.png" alt="Machine">
                    <label class="machine-title">Salerno</label>
                    <label class="machine-floor">1st Floor</label>
                  </div>
                </a>
              </div>
              <div class="machine">
                <a href="../VendrHTML/Machine.html">
                  <div class="column">
                    <img src="../VendrIMG/machine.png" alt="Machine">
                    <label class="machine-title">Campus Center</label>
                    <label class="machine-floor">1st Floor</label>
                  </div>
                </a>
              </div>
              <div class="machine">
                <a href="../VendrHTML/Machine.html">
                  <div class="column">
                    <img src="../VendrIMG/machine.png" alt="Machine">
                    <label class="machine-title">Founders</label>
                    <label class="machine-floor">1st Floor</label>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </body>
</html>

<?php
session_start();
//echo "Connecting?";
$servername = "10.200.2.17";
$usernamedb = "vendr";
$password = "vendr";
$dbname = 'vendr';
$dbport = '3306';

// Create connection
$conn = new mysqli($servername, $usernamedb, $password, $dbname, $dbport);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$totalCost = $_POST['totalPrice'];
$totalItems = $_POST['totalItems'];
echo $totalCost;
echo $totalItems;
$lineOne = $_POST['itemOne'];
$lineTwo = $_POST['itemTwo'];
$lineThree = $_POST['itemThree'];
$lineFour = $_POST['itemFour'];
echo $lineOne;
?>
<script>
    console.log(sessionStorage.total);
    var totals = sessionStorage.total;
    document.getElementById("testArea").innerHTML = totals;
</script>

<p id="testArea"> </P>
UNDER CONSTRUCTION
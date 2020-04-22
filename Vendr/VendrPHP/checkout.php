<?php
session_start();

//echo "Connecting?";
$servername = "10.200.2.17";
$usernamedb = "vendr";
$password = "vendr";
$dbname = 'vendr';
$dbport = '3306';

$username = $_SESSION['username'];
//echo $_SESSION['username'];

// Create connection
$conn = new mysqli($servername, $usernamedb, $password, $dbname, $dbport);

//grab the current user id
$sql0="SELECT UserID FROM customer WHERE CustomerUser = '$username'";
$result0=mysqli_query($conn,$sql0);
while($row = mysqli_fetch_assoc($result0)) {
    $id[] = $row["UserID"];
  }

$userID = $id[0];

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql1 = "SELECT MAX(CartID)
FROM cart;";
$result = mysqli_query($conn,$sql1);

$cartID = $result + 1;
//totals
$total = $_COOKIE['total'];
$totalItems = $_COOKIE['totalItems'];

//items
$itemOne = $_COOKIE["itemOne"];
$itemTwo = $_COOKIE["itemTwo"];
$itemThree = $_COOKIE["itemThree"];
$itemFour = $_COOKIE["itemFour"];

//number of items
$numItemOne = $_COOKIE["numItemOne"];
$numItemTwo = $_COOKIE["numItemTwo"];
$numItemThree = $_COOKIE["numItemThree"];
$numItemFour = $_COOKIE["numItemFour"];

//dev tests:
    //echo $userID;
    //echo $total;
    //echo $totalItems;
    //echo $itemOne;
    //echo $itemTwo;
    //echo $itemThree;
    //echo $itemFour;
    //echo("number:");
    //echo $numItemOne;
    //echo $numItemTwo;
    //echo $numItemThree;
    //echo $numItemFour;
/*
if($itemOne>0){
    $sql2 ="INSERT INTO cart (cartID, UserID, ItemID, 
    CartItemQuanity) VALUES ('$cartID','$userID',
    '$itemOne','$numItemOne')";
    if ($conn->query($sql2) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql2 . "<br>" . $conn->error;
    }
}
if($itemTwo>0){
    $sql3 ="INSERT INTO cart (cartID, UserID, ItemID, 
    CartItemQuanity) VALUES ('$cartID','$userID',
    '$itemTwo','$numItemTwo')";
    
    if ($conn->query($sql3) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql3 . "<br>" . $conn->error;
    }
}
if($itemThree>0){
    $sql4 ="INSERT INTO cart (cartID, UserID, ItemID, 
    CartItemQuanity) VALUES ('$cartID','$userID',
    '$itemThree','$numItemThree')";
    if ($conn->query($sql4) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql4 . "<br>" . $conn->error;
    }
}
if($itemFour>0){
    $sql5 ="INSERT INTO cart (cartID, UserID, ItemID, 
    CartItemQuanity) VALUES ('$cartID','$userID',
    '$itemFour','$numItemFour')";
    if ($conn->query($sql5) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql5 . "<br>" . $conn->error;
    }
}
*/

function random_verify($limit)
{
    return substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, $limit);
    
}
$code = random_verify(6);
echo "<script> alert('$code') </script>";
//here the question is, how should I be writing this to the orders table? 
//we use a composite key for the cart table, but now I will need to create 
//multiple orders in the orders table? 
//I need to clean up validation, cart, orders.
?>



<p id="testArea"> </P>
Purchase Complete click here to go home. 
<?php
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
echo "Connected successfully <br>";


$username=$_POST['userName']; 
$password=$_POST['password'];





$sql="SELECT * FROM customer WHERE CustomerUser='$username' AND CustomerPass='$password'";
$result=mysqli_query($conn,$sql);
$check = mysqli_fetch_array($result);

echo $check['result'];


if(isset($check)){
    header("Location: Account.php");
}else{
    echo 'User name and password do not match!!!';
}
<?php

//remember user till page closes
session_start();

?>
<?php
include "config bourbon.php";
if (isset($_POST["country"])) {
$count = $conn -> real_escape_string($_POST["count"]);
$itemid = $conn -> real_escape_string($_POST["itemid"]);
$country = $conn -> real_escape_string($_POST["country"]);
$region = $conn -> real_escape_string($_POST["region"]);
$city = $conn -> real_escape_string($_POST["city"]);
$street = $conn -> real_escape_string($_POST["street"]);
$name = $conn -> real_escape_string($_POST["name"]);
$pass = $conn -> real_escape_string($_POST["pass"]);
$email = $conn -> real_escape_string($_POST["email"]);
$method = $conn -> real_escape_string($_POST["method"]);
$_SESSION["username"] = $name;
$_SESSION["email"] = $email;
$_SESSION["country"] = $country;
$_SESSION["region"] = $region;
$_SESSION["city"] = $city;
$_SESSION["street"] = $street;
$_SESSION["pass"] = $pass;

$adduser_order = "INSERT INTO `orders`(`name`, `email`, `country`, `region_state`, `city`, `street`, `itemid`, `count`, `method`, `sender`, `password`) VALUES ('$name', '$email', '$country', '$region', '$city', '$street', '$itemid', '$count', '$method', '$email', '$pass')";
            
 if ($conn->query($adduser_order) === TRUE) {
		echo "Order Sent";	
		} else {
	 echo "Error message: ".$conn -> connect_error;
 }
}

?>
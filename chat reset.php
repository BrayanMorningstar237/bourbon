<?php
session_start();
include "config bourbon.php";
if (isset($_POST["checkemail"])) {
	$pass1 = $_POST["pass"];
    $email1 = $_POST["checkemail"];
	$a = "SELECT * FROM orders WHERE email='$email1' AND password='$pass1' ORDER BY orders.date ASC";
$ra = $conn->query($a);
if ($ra->num_rows > 0) {
while($row = $ra->fetch_assoc()) {
$name = $row["name"];
$email = $row["email"];
$country = $row["country"];
$region_state = $row["region_state"];
$city = $row["city"];
$street = $row["street"];
$pass = $row["password"];
$sender = $row["sender"];
$Rimg = $row["recieverimg"];
$Simg = $row["senderimg"];
	}
/*If the sender is the owner of the order use their photo else use the reciever's photo*/
if ($sender == $email1) {
$_SESSION["image"] = $Simg;	
} else {
$_SESSION["image"] = $Rimg;	
}
$_SESSION["image"] = "image me";
$_SESSION["username"] = $name;
$_SESSION["email"] = $email;
$_SESSION["country"] = $country;
$_SESSION["region"] = $region_state;
$_SESSION["city"] = $city;
$_SESSION["street"] = $street;
$_SESSION["pass"] = $pass;
echo "verified";
} else {
	$a = "SELECT * FROM admins WHERE email='$email1' AND password='$pass1' ORDER BY admins.adminID ASC";
$ra = $conn->query($a);
if ($ra->num_rows > 0) {
while($row = $ra->fetch_assoc()) {
$name = $row["name"];
$email = $row["email"];
$pass = $row["password"];
$pimg = $row["profile"];
	
}
$_SESSION["image"] = $pimg;
$_SESSION["username"] = $name;
$_SESSION["email"] = $email;
$_SESSION["pass"] = $pass;
echo "verified";
}
}
	
}
if (isset($_POST["oldpass"])) {
$oldpass = 	$_POST["oldpass"];
$oldemail = $_POST["oldemail"];
$pass = 	$_POST["pass"];
$email = 	$_POST["email"];

$a = "SELECT * FROM orders WHERE email='$oldemail' AND password='$oldpass'";
$ra = $conn->query($a);
if ($ra->num_rows > 0) {
	
	$update_order = "UPDATE `orders` SET email='$email',sender='$email',password='$pass' WHERE email='$oldemail' AND password='$oldpass'";

if ($conn->query($update_order) === TRUE) {
echo "Table updated";	
	 $_SESSION["email"] = $email;
	 $_SESSION["pass"] = $pass;
	
} else {
echo "Error message: ".$conn -> connect_error;
}
	
} else {
	
	$update_order = "UPDATE `admins` SET email='$email', password='$pass' WHERE email='$oldemail' AND password='$oldpass'";

if ($conn->query($update_order) === TRUE) {
echo "Table updated".$email;	
	 $_SESSION["email"] = $email;
	 $_SESSION["pass"] = $pass;
} else {
echo "Error message: ".$conn -> connect_error;
}
	
}
}


?>
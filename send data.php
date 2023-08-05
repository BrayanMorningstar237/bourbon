<?php

//remember user till page closes
session_start();

?>
<?php
include "config bourbon.php";
if (isset($_POST["message"])) {
$message = $conn -> real_escape_string($_POST["message"]);
$sender = $conn -> real_escape_string($_POST["sender"]);
$orderid = $conn -> real_escape_string($_POST["orderid"]);
$user_reciever = $conn -> real_escape_string($_POST["user_reciever"]);

$respond_order = "INSERT INTO `response`(`orderid`, `message`, `sender`, `reciever`) VALUES ('$orderid', '$message', '$sender', '$user_reciever')";
            
 if ($conn->query($respond_order) === TRUE) {
		echo "Message Sent";	
		} else {
	 echo "Error message: ".$conn -> connect_error;
 }
}
if (isset($_POST["user"])) {
	$user = $_POST["user"];
	$orderid = $_POST["orderid"];
	$b = "SELECT * FROM response WHERE sender='$user' AND orderid='$orderid' ORDER BY response.date ASC";
        $rb = $conn->query($b);
        if ($rb->num_rows > 0) {
            while($row = $rb->fetch_assoc()) {
               $reciever = $row["reciever"];
               $status = $row["reciever_status"];
			}
			echo $status;
		}
}
?>
<?php
include "config bourbon.php";
if(isset($_POST["email"])) {
	$user_reciever = $_POST["user_reciever"];
	$email = $_POST["email"];
	
		$ro = "SELECT * FROM orders WHERE reciever='$user_reciever' AND email='$email' AND reciever_status='unseen' ORDER BY orders.orderID DESC";
$rro = $conn->query($ro);
if ($rro->num_rows > 0) {
	$newMessageCount1 = $rro->num_rows;
} else {
	$newMessageCount1 = "0";
}

		$rc = "SELECT * FROM response WHERE reciever_status='unseen' AND sender<>'$user_reciever' ORDER BY response.date DESC";
$rrc = $conn->query($rc);
if ($rrc->num_rows > 0) {
	$newMessageCount = $rrc->num_rows;
	$newMessageCount = $newMessageCount + $newMessageCount1;

} else {
	$newMessageCount = $newMessageCount1;
} 
	if ($newMessageCount <= 0) {
		$hideCount = "hide";
	} else {
		$hideCount = "";
	}
	echo $newMessageCount;
}
?> 

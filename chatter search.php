
<?php
session_start();
include "config bourbon.php";
if (isset($_POST["search"])) {
if(isset($_SESSION["username"])) {
	/*start pre sets*/
	$current_user = $_SESSION["username"];
	$user_pass = $_SESSION["pass"];
	$user_email1 = $_SESSION["email"];
	$user_email =$user_email1;
	$hideLog = "hide";
	$noEvent = "";
		/*if account is admin set to email to team*/
	if ($current_user == "BourBon Service") {
		$user_email = 'team';
	} else {
		$user_email = $user_email1;
	}

$get_user_img = "SELECT * FROM orders WHERE email='$user_email1' GROUP BY email ORDER BY orders.orderID DESC";
$rget_user_img = $conn->query($get_user_img);
if ($rget_user_img->num_rows > 0) {
while($row = $rget_user_img->fetch_assoc()) {
$Rimg = $row["recieverimg"];
$Simg = $row["senderimg"];
$sender = $row["sender"];
	}
	if ($sender == "team") {
		/*admin photo*/
$g = "SELECT * FROM admins WHERE email='$user_email1' AND password='$user_pass' ORDER BY admins.adminID ASC";
$rg = $conn->query($g);
if ($rg->num_rows > 0) {
while($row = $rg->fetch_assoc()) {
$pimg = $row["profile"];
}
$adminPhoto = $pimg;
}

	} else {
		$adminPhoto = $Simg;
	}
}
$user_img = $adminPhoto;
	} else {
		$current_user = "WELCOME TO BOURBON";
	    $user_pass = "bourbonwelcome237";
		$user_email = "Taste Of Infinity";
		$hideLog = "";
		$noEvent = "noevents";
		$user_img = "abdel/Going%20offline.svg";
	}
	/*end pre sets*/

$searchData = $_POST["search"];
$searchD= $conn -> real_escape_string($searchData);
$a = "SELECT * FROM orders WHERE name LIKE'%$searchD%' AND reciever='$user_email' OR  name LIKE'%$searchD%' AND sender='$user_email' GROUP BY email ORDER BY orders.orderID DESC";
$ra = $conn->query($a);
if ($ra->num_rows > 0) {
while($row = $ra->fetch_assoc()) {
$O_name = $row["name"];
$O_email = $row["email"];
$country = $row["country"];
$region_state = $row["region_state"];
$city = $row["city"];
$street = $row["street"];
$itemid = $row["itemid"];
$count = $row["count"];
$method = $row["method"];
$O_senderimg = $row["senderimg"];
$O_sender = $row["sender"];
$O_reciever = $row["reciever"];
$O_orderid = $row["orderID"];
$O_date = $row["date"];
$O_date = new DateTime($O_date);
if ($O_reciever == $user_email) {
	$O_img = $O_senderimg;
} else {
	/*admin photo*/
$g = "SELECT * FROM admins WHERE adminID='1' ORDER BY admins.adminID ASC";
$rg = $conn->query($g);
if ($rg->num_rows > 0) {
while($row = $rg->fetch_assoc()) {
$aimg = $row["profile"];
}
$O_img = $aimg;
}
}
/*If it's not admin account show messgae to be from admin*/
/*Check which image to use for the messges*/
if ($user_email == "team") {
	$O_name = $O_name;
} else {
	$O_name = "BourBon Service";
	
}
/*Check if the user is an agent or customer*/
if ($current_user == "BourBon Service") {
$message = "Dear BourBon Agent, New Order.";
} else {
	$message = "Your Order is currently pending.";
}
/*Check for any unseen messages and show number if any is available in orders */
$ro = "SELECT * FROM orders WHERE reciever='$user_email' AND email='$O_email' AND reciever_status='unseen' ORDER BY orders.orderID DESC";
$rro = $conn->query($ro);
if ($rro->num_rows > 0) {
$newMessageCount1 = $rro->num_rows;
} else {
$newMessageCount1 = "0";
}
/*Check for any unseen messages and show number if any is available in response if yes add to order's unseen messages */
$rc = "SELECT * FROM response WHERE reciever='$user_email' AND orderid='$O_orderid' AND reciever_status='unseen' ORDER BY response.date DESC";
$rrc = $conn->query($rc);
if ($rrc->num_rows > 0) {
$newMessageCount = $rrc->num_rows;
$newMessageCount = $newMessageCount + $newMessageCount1;

} else {
$newMessageCount = $newMessageCount1;
}
/*Show notification of new message if available*/
if ($newMessageCount <= 0) {
$hideCount = "hide";
} else {
$hideCount = "";
}
/*check response for any message for the corresonding order*/
$r = "SELECT * FROM response WHERE orderid='$O_orderid' ORDER BY response.date ASC";
$rr = $conn->query($r);
if ($rr->num_rows > 0) {
while($row = $rr->fetch_assoc()) {
$message = $row["message"];

}
}

echo '<div class="listed-chat" email="'.$O_email.'" orderid="'.$O_orderid.'">
<div class="chat-left">
<div class="chat-out-img">
<img src="'.$O_img.'">
</div>
</div>
<div class="chat-middle">
<h2>'.$O_name.'</h2>
<p>'.$message.'</p>
</div>
<div class="chat-right">
<p class="message_count '.$hideCount.'" email="'.$O_email.'"  orderid="'.$O_orderid.'"><span>'.$newMessageCount.'</span></p>
<p>'.date_format($O_date, "D d M, Y").'</p>
</div>
</div>';
}
} else {
	echo '<div class="empty">
		<img src="abdel/66068.jpg">
		<p>We have no results for your search</p>
		</div>';
}
}
?>
<script>
/*open chat when clicked on */
	$(".listed-chat").click(function() {
		
		$(this).children(".chat-right").children(".message_count").addClass("hide");
		$senderemail = $(this).attr("email");
		$user_email = "<?php echo $user_email; ?>";
		$.ajax({ 
                url: 'chat messages.php', 
				type: 'post',
				data: {'email': $senderemail,'user_reciever': $user_email},
				success: function(response){
					$(".chat-in").html(response);
					$(".chat-in").removeClass("hide-small");
					$(".chat-out").addClass("hide-small");
					$(".chat-box").scrollTop($(".chat-box")[0].scrollHeight);
				}
		 });
		
	});
</script>
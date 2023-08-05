<?php
include "config bourbon.php";
if (isset($_POST["orderid"])) {
$emailOriginal = $_POST["email"];
$orderid = $_POST["orderid"];
$user_reciever = $_POST["user_reciever"];
$orderInSearch = $orderid;
$senderEmail = $emailOriginal;
$a = "SELECT * FROM orders WHERE reciever='$user_reciever' AND email='$emailOriginal' ORDER BY orders.orderID DESC";
        $ra = $conn->query($a);
        if ($ra->num_rows > 0) {
            while($row = $ra->fetch_assoc()) {
               $name = $row["name"];
				$pimg = $row["recieverimg"];
			}
		} else {
			$a = "SELECT * FROM admins WHERE adminID='1'";
        $ra = $conn->query($a);
        if ($ra->num_rows > 0) {
            while($row = $ra->fetch_assoc()) {
               $name = $row["name"];
				$pimg = $row["profile"];
			}
		}
		}
$as = "SELECT * FROM orders WHERE email='$emailOriginal' AND orderID='$orderInSearch' ORDER BY orders.orderID DESC";
        $ras = $conn->query($as);
        if ($ras->num_rows > 0) {
            while($row = $ras->fetch_assoc()) {
               $senderimg = $row["senderimg"];
				$recieverimg = $row["recieverimg"];
				
			}
			
		} 
echo '<div class="chat">
			<div class="chat-header">
			 <div class="chat-header-img">
				 <p class="hide-large"><span class="fas fa-chevron-left close-chat-in"></span></p>
				<img src="'.$pimg.'">
				 <span class="fas fa-circle status"></span>
			</div>
				<div class="user-info">
				<p class="name">';
		
	
		echo $name.'</p>
				<p class="seen">last seen ';
			$a = "SELECT * FROM orders WHERE reciever='$user_reciever' AND orderID='$orderInSearch' GROUP BY email ORDER BY orders.orderID DESC";
        $ra = $conn->query($a);
        if ($ra->num_rows > 0) {
            while($row = $ra->fetch_assoc()) {
               $date = $row["date"];
				$date = new DateTime($date);
				$r = "SELECT * FROM response WHERE orderid='$orderInSearch' AND sender<>'$user_reciever' ORDER BY response.responseID ASC";
        $rr = $conn->query($r);
        if ($rr->num_rows > 0) {
            while($row = $rr->fetch_assoc()) {
				$date = $row["date"];
				$date = new DateTime($date);
			}
		}
				echo date_format($date,"D d M, Y \\a\\t H : i a");
			}
		} else {
			echo " <span class='fas fa-stopwatch'> Waiting for response</span>";
		}
				echo '</p>
				</div>
				<div class="opts">
				<span class="fas fa-copy" title="Copy user email"></span>
				</div>
			 </div>
			 ' ;
}
?>
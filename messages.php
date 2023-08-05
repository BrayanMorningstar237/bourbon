<?php
include "config bourbon.php";
if (isset($_POST["email"])) {
$email = $_POST["email"];
$current_user = $_POST["user_reciever"];
	if($current_user == "team") {
	$a = "SELECT * FROM orders WHERE email='$email' GROUP BY email ORDER BY orders.orderID ASC";
        $ra = $conn->query($a);
        if ($ra->num_rows > 0) {
            while($row = $ra->fetch_assoc()) {
               $recieverimg = $row["recieverimg"];
			   $senderimg = $row["senderimg"];
				$name = $row["name"];
				$pimg = $senderimg;
				
			}
		}
	} else {
		$a = "SELECT * FROM admins WHERE adminID='1'";
        $ra = $conn->query($a);
        if ($ra->num_rows > 0) {
            while($row = $ra->fetch_assoc()) {
               $pimg = $row["profile"];
			   $name = $row["name"];
				
			}
		
			
		}
				}
			
				//get bourbon items
		$a = "SELECT * FROM orders WHERE email='$email' ORDER BY orders.date ASC";
        $ra = $conn->query($a);
        if ($ra->num_rows > 0) {
            while($row = $ra->fetch_assoc()) {
               $name = $row["name"];
			   $email = $row["email"];
			   $country = $row["country"];
			   $region_state = $row["region_state"];
			   $city = $row["city"];
			   $street = $row["street"];
			   $itemid = $row["itemid"];
			   $count = $row["count"];
			   $method = $row["method"];
			   $sender = $row["sender"];
			   $Order_reciever = $row["reciever"];
			   $orderid = $row["orderID"];
			   $date = $row["date"];
				$sendTo = "team";
				if ($sender == $current_user) {
					$sendTo = $Order_reciever;
					$ro = "UPDATE `orders` SET `sender_status`='seen' WHERE reciever='$current_user' AND email='$email'";
            
                    if ($conn->query($ro) === TRUE) {
                           //update unseen messages to seen
                         }
				} else {
					$sendTo = $sender;
					$ro = "UPDATE `orders` SET `reciever_status`='seen' WHERE reciever='$current_user' AND email='$email'";
            
                    if ($conn->query($ro) === TRUE) {
                           //update unseen messages to seen
                         }
				}
				
				$date = new DateTime($date);
				$i = "SELECT * FROM items WHERE itemID='$itemid' ORDER BY items.itemID DESC";
        $ri = $conn->query($i);
        if ($ri->num_rows > 0) {
            while($row = $ri->fetch_assoc()) {
               $mainNamee = $row["mainName"];
			   $miniName = $row["miniName"];
			   $description = $row["description"];
				$price = $row["price"];
				$img1 = $row["img"];
				$itemID = $row["itemID"];
				$stock = $row["stock"];
				$shipPrice = $row["ship-price"];
				$car = $row["car-price"];
				$bicycle = $row["walking-price"];
				if ($method == "fa-ship") {
					$method = "shipping 1km - $".$shipPrice; 
				}
				if ($method == "fa-shipping-fast") {
					$method = "truck 1km - $".$car; 
				}
				if ($method == "fa-bicycle") {
					$method = "bicycle 1km - $".$bicycle; 
				}
				
			}
		}
				$totalPrice = $count * $price;
				   $halfPrice = $totalPrice / 2;
			   if ($current_user == "team") {
				   
				 echo '
				 <div class="info-new"><span>Dear BourBon agent, New order</span></div>
				 <div class="chatter-main opp">
			 <div class="chatter-img">
				<div class="">
				 <img src="'.$img1.'">
				 </div>
				<p class="date">'.date_format($date, "D d M, Y").'</p>
				<p><span class="fas fa-info-circle"> </span> This message is a programmed notice to inform you about the customer\'s order</p>
				 </div>
	             <div class="chatter-message">
				 <div>
					 <p>This customer ordered for '.$count.' bottle(s) of;</p>
					 <ul>
					 <li>Title: '.$mainNamee.'</li>
					 <li>Subtitle: '.$miniName.'</li>
					 <li>Price: '.$price.'</li>
					 <li>Total price: '.$count * $price.'</li>
				     <li>Half price: '. $halfPrice.'</li>
				     <li>Delivery Method: '.$method.'</li>
					 <li>Country: '.$country.'</li>
					 <li>Region/state: '.$region_state.'</li> 
					 <li>City: '.$city.'</li> 
					 <li>Street: '.$street.'</li>
					 <li>Email: '.$email.'</li>
					 </ul>
					</div>
				 </div>
			 </div>
				 ';
			   } else {
				   echo '
				 <div class="info-new"><span>Order has been sent, Check back here for a response</span>
				 <br><br><br><span>Purchases are only complete when delivered</span>
				 <br><br><br><span>You ordered for '.$count.' bottle(s) of '.$mainNamee.'</span><br><br><br><span>Which cost '.$count * $price.' delivery free.</span>
				 <br><br><br><span>Pay ('. $halfPrice.')half before delivery.</span>
				 </div>
				   ';
			   }
				
		$r = "SELECT * FROM response WHERE orderid='$orderid' ORDER BY response.date ASC";
        $rr = $conn->query($r);
        if ($rr->num_rows > 0) {
            while($row = $rr->fetch_assoc()) {
				$responseid = $row["responseID"];
			   $message = $row["message"];
			   $sender2 = $row["sender"];
			   $reciever = $row["reciever"];
			   $firstMessage = $message;
				$date2 = $row["date"];
				$date2 = new DateTime($date2);
				if ($sender2 == $current_user) {
					$sendTo = $reciever;
					$ro = "UPDATE `response` SET `sender_status`='seen' WHERE reciever='$current_user'";
            
                    if ($conn->query($ro) === TRUE) {
                           //update unseen messages to seen
                         }
					$alignment = "team";
				} else {
					$sendTo = $sender2;
					$ro = "UPDATE `response` SET `reciever_status`='seen' WHERE reciever='$current_user'";
            
                    if ($conn->query($ro) === TRUE) {
                           //update unseen messages to seen
                         }
					$alignment = "opp";
				}
				
				if ($sender2 == "team") {
					
		$a = "SELECT * FROM admins WHERE adminID='1'";
        $ra = $conn->query($a);
        if ($ra->num_rows > 0) {
            while($row = $ra->fetch_assoc()) {
               $Cimg = $row["profile"];
			   $name = $row["name"];
			}
		} 
					$img = $Cimg;
		} else {
		$a = "SELECT * FROM orders WHERE email='$email' GROUP BY email ORDER BY orders.orderID ASC";
        $ra = $conn->query($a);
        if ($ra->num_rows > 0) {
            while($row = $ra->fetch_assoc()) {
               $senderimg = $row["senderimg"];
				
			}
		}
					$img = $senderimg;
				}
				echo '
			<div class="'.$alignment.'">
			 <div class="chatter" chatter-sender="'.$alignment.'">
				<div class="chatter-img">
				<div class="">
				 <img src="'.$img.'">
				 </div>
				<p>'.date_format($date2, "D d M, Y \\a\\t H : i a").'</p>
				 </div>
	             <div class="chatter-message">
				 <p>'.$firstMessage.'</p>
				 </div>
			</div>
			</div>	
				';
			}
		}
				
				
			}
		} 
}
		?>
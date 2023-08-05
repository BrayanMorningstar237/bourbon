<?php
include "config bourbon.php";
if (isset($_POST["counter"])) {
$count = $_POST["counter"];
$itemid = $_POST["itemid"];
//get bourbon items
$a = "SELECT * FROM items WHERE itemID='$itemid' ORDER BY items.itemID ASC";
$ra = $conn->query($a);
if ($ra->num_rows > 0) {
while($row = $ra->fetch_assoc()) {
$mainNamee = $row["mainName"];
$miniName = $row["miniName"];
$description = $row["description"];
$price = $row["price"];
$img = $row["img"];
$itemID = $row["itemID"];
$stock = $row["stock"];
$shipPrice = $row["ship-price"];
$car = $row["car-price"];
$bicycle = $row["walking-price"];
$totalCount = $count * $price;
 echo '
 <div class="order-left">
				<div class="order-box-header ">
					<div class="header-top">
						<p><span class="fas fa-circle"></span>Available Stock</p>
					<p><span class="fas fa-shopping-basket"></span><span class="item-num">'.$stock.'</span></p>
				    </div>
				<h2 class="mainName">'.$mainNamee.'</h2>
					<p class="miniName">'.$miniName.'</p>
				</div>
			<div class="order-left-mini">
			<div class="box-effect"></div>
				<div class="box-order">
				<div class="order-image">
					<img src="'.$img.'">
				</div>
					<div class="order-desc">
					'.$description.'
					</div>
					<div class="order-price">
					<span>$'.$price.'</span>
				    </div>
					<h4 class="method"><i class="fas fa-info-circle"> </i> Choose a delivery method</h4>
					<div class="info-delivery cart-delivery">
						<span class="desc-stand">Delivery</span>
						<div delivery="fa-shipping-fast" delivery-rate="'.$car.'">
						<span class="fas fa-shipping-fast"></span>
							<p>1km - $'.$car.'</p>
						</div>
					<div class="active" delivery="fa-ship" delivery-rate="'.$shipPrice.'">
						<span class="fas fa-ship"></span>
							<p>1km - $'.$shipPrice.'</p>
						</div>
					<div delivery="fa-bicycle" delivery-rate="'.$bicycle.'">
						<span class="fas fa-bicycle"></span>
							<p>1km - $'.$bicycle.'</p>
						</div>
					</div>
					<div class="info-order">
					<div class="count">
						<span class="fas fa-minus minusitem"></span>
						<span class="number cart-num">'.$count.'</span>
						<span class="fas fa-plus additem"></span>
						<div class="count-price">
						<span class="fas fa-ship order-cart" price="'.$price.'" method="fa-ship" itemid="'.$itemID.'"></span>
						</div>
					</div>
						<div class="btn-order">
						<p class="btn total-price">$<span class="totalCount">'.$totalCount.'</span/> + $<span class="deliveryPrice">'.$shipPrice.'</span></p>
						</div>
					</div>
			   </div>
			</div>
			</div>
 ';
}
}
	
	
}				
?>

<script>
$(".cart-delivery div").click(function() {
		$(".cart-delivery div").removeClass("active");
		$(this).addClass("active");
	    $deliveryRate = $(this).attr("delivery-rate");
		$typeOfDelivery = $(this).attr("delivery");
		$(".order-cart").removeClass("fa-shopping-cart");
		$(".order-cart").removeClass("fa-shipping-fast");
		$(".order-cart").removeClass("fa-ship");
		$(".order-cart").removeClass("fa-bicycle");
		$(".order-cart").addClass($typeOfDelivery);
		$(".order-cart").attr("method",$typeOfDelivery);
		$(".deliveryPrice").text($deliveryRate);
	});
$(".additem").click(function() {
		$number = $(this).prev().text();
		$fn = parseInt($number)+ 1;
		$(this).prev().text($fn);
		$price = $(this).next().children("span").attr("price");
		$price = parseInt($price);
		$price = $fn * $price;
		$(this).parent().next().children("p").children(".totalCount").text($price);
		
	});
$(".minusitem").click(function() {
		$number = $(this).next().text();
		$fn = parseInt($number) - 1;
	if ($fn < 1) {
		
	} else {
		$(this).next().text($fn);
		$price = $(this).next().next().next().children("span").attr("price");
		$price = parseInt($price);
		$price = $fn * $price;
		$(this).parent().next().children("p").children(".totalCount").text($price);
	}
		
	});
	$(".order-cart").click(function() {
		$(".purchase").click();
	});
</script>
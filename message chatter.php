<?php 
session_start();
include "config bourbon.php";
?>
<!Doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="This is commercial site for Winesand Whiskey.BourBon, A taste of infinity">
<meta name="author" content="Bourbon">
<meta name="generator" content="@BM & CO">
<title>Bourbon</title>

<link rel="stylesheet" href="fontawesome-free-5.15.2-web/css/all.css">
<link href="abdel/UploadedFromPhone_1246986.svg" rel="icon">

<!-- Bootstrap core CSS -->
<style>
@font-face {
	font-family: lenafont;
	src: url(css/Corabael.ttf);
}
@font-face {
	font-family: lenafont2;
	src: url(css/Fiolex_Girls.ttf);
}
@font-face {
	font-family: Zen_Kurenaido;
	src: url(Lena%20images/Zen_Kurenaido/ZenKurenaido-Regular.ttf);
}
@font-face {
	font-family: roboto;
	src: url(Lena%20images/Roboto/Roboto-Black.ttf);
}
@font-face {
	font-family: roboto2;
	src: url(Lena%20images/Roboto/Roboto-Bold.ttf);
}
* {
	padding: 0;
	margin: 0;
	box-sizing: border-box;
}
body, html {
	width: 100%;
	height: 100%;
	scroll-behavior: smooth;

}
.main-mini {
   display: block;
	height: 100%;
	max-width: 700px;
	margin: auto;


}
 .main {
	width: 100%;
	height: 100%;
    max-width: 700px;
	margin: auto; 
	transition: all 0.6s ease-in-out; 
	}
	.mini-pro {
		display: flex;
		justify-content: center;
		align-items: center;
		height: 100%;
	}
	.mini-v {
		height: 100%;
		width: 100%;
		max-height: 80vh;
		background-color: #ff005e;
		border-radius: 10px;
		box-shadow: -4px -1px 18px 0px rgb(116 106 106 / 17%), 4px -7px 13px -2px rgb(137 123 123 / 25%);
		overflow: hidden;
	}
	
	.mini {
		display: grid;
		grid-template-columns: 0.9fr 1.1fr;
		grid-template-rows: 1fr;
		align-items: center;
		justify-content: center;
		height: 100%;
		width: 100%;
	}
	.chat-out {
		display: grid;
		grid-template-columns: 1fr;
		grid-template-rows: 0.1fr 1.6fr 0.3fr;
		justify-content: center;
		align-items: center;
		background-color: #f9f9f9;
		height: 100%;
		width: 100%;
		overflow: hidden;
	}
	.chat-messages {
		padding: 10px;
		height: 100%;
		width: 100%;
		overflow-y: auto;
	}
	.listed-chat {
		display: grid;
		grid-template-columns: 0.1fr 1.8fr 0.8fr;
		grid-template-rows: 1fr;
		align-items: center;
		justify-content: center;
		margin: 10px 0;
		background-color: #fff;
		padding: 10px 5px;
		border-radius: 10px;
		transition: all 0.5s linear;
		cursor: pointer;
	}
	.listed-chat:hover {
		padding: 12px 6px;
		box-shadow: -4px -1px 18px 0px rgb(116 106 106 / 17%), 4px -7px 13px -2px rgb(137 123 123 / 25%);
	}
	.chat-left {
		
	}
	.chat-left img {
		height: 50px;
		width: 50px;
		border-radius: 50%;
		object-fit: cover;
		object-position: center;
		background-color: #ff9400;
	}
	.chat-middle {
		padding: 4px 8px;
		align-self: flex-start;
	}
	.chat-middle h2 {
		font-family: roboto;
		font-size: 16px;
	}
	.chat-middle p {
		font-family: Zen_Kurenaido;
		font-size: 14px;
	}
	.chat-right {
		align-self: flex-end;
	}
	.chat-right p {
		width: 100%;
		color: #808080;
		font-size: 10px;
		text-align: center;
	}
	.message_count  {
		text-align: center;
	}
	.message_count span {
		height: 20px;
		width: 20px;
		display: inline-flex;
		align-items: center;
		justify-content: center;
		color: #fff;
		background-color: #ff005e;
		border-radius: 50%;
		font-family: roboto2;
		font-size: 12px;
		padding-top: 1px;
		
	}
	.search-box {
		padding: 15px;
	}
	.search {
		position: relative;
		height: 40px;
		padding: 2px;
		box-shadow: 
        0 3px 5px rgba(0,0,0,0.25),
        inset 0 1px 0 rgba(255,255,255,0.3),
        inset 0 -5px 5px rgba(100,100,100,0.1),
        inset 0 5px 5px rgba(255,255,255,0.3);
		border-radius: 20px;
		border-collapse: separate;
	}
	.search input {
		border: none;
		height: 100%;
		width: 100%;
		outline: none;
		background-color: transparent;
		padding: 0 5px;
	}
	.search input:focus ~ span {
		color: #ff005e;
	}
	.search input::placeholder {
		padding-left: 28px;
	}
	.search span {
		position: absolute;
		top: 0;
		left: 0;
		height: 100%;
		display: flex;
		justify-content: center;
		align-items: center;
		pointer-events: none;
		font-size: 16px;
		color: #444;
		padding: 10px;
	}
	.search input:focus + .search span {
		color: red;
	}
	.bottom-bar {
		display: flex;
		justify-content: space-between;
		align-items: center;
		padding: 10px;
		background-color: #ff005e;
	}
	.bottom-img {
		position: relative;
	}
	.bottom-img span {
		position: absolute;
		bottom: 0;
		right: 0;
		padding: 8px;
		color: #ff005e;
		background-color: #fff;
		border-radius: 50%;
		font-size: 12px;
		transition: all 0.5s ease-in-out;
	}
	.bottom-img img {
		width: 60px;
		height: 60px;
		border-radius: 50%;
		border: 3px solid #fff;
		padding: 1px;
		background-color: #ff005e;
		object-fit: cover;
		object-position: center;
	}
	.hide {
		display: none !important;
	}
	.options span {
		color: #ff005e;
		background-color: #fff;
		border-radius: 50%;
		padding: 10px;
		transition: all 0.5s ease-in-out;
		font-size: 16px;
		box-shadow: 
        0 3px 5px rgba(0,0,0,0.25),
        inset 0 1px 0 rgba(255,255,255,0.3),
        inset 0 -5px 5px rgba(100,100,100,0.1),
        inset 0 5px 5px rgba(255,255,255,0.3);
	}
	.bottom-bar span:hover {
		color: #fff;
		background-color: #ff025e;
		box-shadow: 
        0 3px 5px rgba(0,0,0,0.25),
        inset 0 1px 0 rgba(255,255,255,0.3),
        inset 0 -5px 5px rgba(100,100,100,0.1),
        inset 0 5px 5px rgba(255,255,255,0.3);
		transform: scale(1.1);
		cursor: pointer;
	}
	.chat-in {
		height: 100%;
		width: 100%;
		overflow: hidden;
		background-color: #f0f0f0;
		animation: slidein 0.5s ease-in;
	}
	@keyframes slidein {
		from {
			transform: translateX(-100%);
			opacity: 0.5;
		}
		to {
			transform: translateX(0);
			opacity: 1;
		}
	}
	.slideout {
		animation: slideout 0.5s ease-out;
	}
	@keyframes slideout {
		from {
			transform: translateX(0);
			opacity: 1;
		}
		to {
			transform: translateX(-100%);
			opacity: 0.5;
		}
	}
	.chat {
		height: 100%;
		width: 100%;
		display: grid;
		grid-template-columns: 1fr;
		grid-template-rows: 0.1fr 1.7fr 0.2fr;
		justify-content: center;
		align-items: center;
	}
	.chat img {
		width: 50px;
		height: 50px;
	}
	.chat-header {
		display: grid;
		grid-template-columns: 0.1fr 1.8fr 0.1fr;
		grid-template-rows: 1fr;
		justify-content: center;
		align-items: center;
		background-color: #f9f9f9;
	}
	.chat-header-img {
		position: relative;
		display: flex;
		justify-content: center;
		align-items: center;
		padding: 5px;
	}
	.chat-header-img img {
		height: 50px;
		width: 50px;
		border-radius: 50%;
		object-fit: cover;
		object-position: center;
		background-color: #ff9400;
	}
	.chat-header-img span {
		color: #ccc;
		position: absolute;
		bottom: 5px;
		right: 0;
		font-size: 14px;
		transition: all 0.5s linear;
	}
	.chat-header-img p {
		
	}
	.chat-header-img p span {
		position: static;
		font-size: 20px;
		padding: 0 8px;
		cursor: pointer;
	}
	.user-info {
		align-self: flex-start;
		padding: 10px 2px;
		padding-top: 11px;
	}
	.user-info .name {
		font-family: roboto;
		font-size: 16px;
	}
	.user-info .seen {
		font-size: 12px;
		color: #555;
	}
	.fa-copy {
		color: #ff005e;
		padding: 5px 15px;
		transition: all 0.5s linear;
	}
	.fa-copy:hover {
		color: blueviolet;
		padding: 3px 10px;
	}
	.chat-box {
		height: 100%;
		width: 100%;
		overflow-y: auto;
		scroll-behavior: smooth;
	}
	.chatter-main {
		display: block;
		width: 100%;
		max-width: 300px;
		background-color: #fff;
		border-radius: 10px;
		padding: 10px;
		margin: 10px auto;
	}
	.chatter-main .chatter-img div {
		text-align: center;
	}
	.chatter-main .chatter-img p {
		text-align: center;
	}
	.chatter-img {
		text-align: center;
	}
	.chatter-img p:nth-child(2) {
		color: #222;
		font-size: 16px;
	}
	.chatter-img p:nth-child(3) {
		font-size: 14px;
		background-color: #f0f0f0;
		margin: 5px 10px;
		padding: 5px;
		color: #444;
		border-radius: 10px;
	}
	.chatter-img p:nth-child(3) span {
		color: #2379f9;
	}
	.chatter-img div img {
		height: 25px;
		width: 25px;
		border-radius: 50%;
		object-fit: cover;
		object-position: center;
		background-color: #ff9400;
	}
	.chatter-message {
		color: #404040;
	}
	.chatter-message p {
		font-size: 16px;
	}
	.chatter-message div {
		font-size: 14px;
	}
	.chatter-message div ul {
		list-style-type: none;
	}
	.chatter-message div ul li {
		padding: 5px;
	}
	.opp {
		text-align: left;
		padding: 5px;
	}
	.team {
		text-align: right;
		padding: 5px;
	}
	.opp .chatter-img {
		text-align: left;
	}
	.team .chatter-img {
		text-align: right;
	}
	.chatter {
		display: inline-block;
		width: 100%;
		max-width: 250px;
		
	}
	.chatter .chatter-img {
		padding: 6px;
	}
	.chatter .chatter-img p {
		color: #555;
		font-size: 14px;
		font-family: Zen_Kurenaido;
	}
	.chatter-message {
		background-color: #fff;
		color: #444;
		padding: 10px;
		border-radius: 10px;
	}
	.team .chatter-message {
		text-align: left;
		border-top-right-radius: 0;
		border-bottom-right-radius: 15px;
	}
	.opp .chatter-message {
		text-align: left;
		border-top-left-radius: 0;
		border-bottom-left-radius: 15px;
	}
	.chat-input {
		height: 100%;
		width: 100%;
	}
	.chat-input div {
		display: grid;
		grid-template-columns: 0.1fr 1.8fr 0.1fr;
		grid-template-rows: 1fr;
		justify-content: center;
		align-items: center;
		height: 100%;
		background-color: #f9f9f9;
		padding: 0 5px;
		position: relative;
	}
	.chat-input div input {
		height: 100%;
		width: 100%;
		background-color: transparent;
		outline: none;
		border: none;
		padding: 0 10px;
		font-family: roboto2;
		
	}
	.chat-input div .emptyput {
		position: absolute;
		left: 0;
		top: -38px;
		padding: 10px;
		color: blueviolet;
		background-color: #fff;
		font-size: 13px;
	}
	.chat-input div span {
		padding: 10px;
	}
	.chat-input div .fa-paper-plane {
		color: #fff;
		background-color: #ff005e;
		border-radius: 50%;
		box-shadow: 
        0 3px 5px rgba(0,0,0,0.25),
        inset 0 1px 0 rgba(255,255,255,0.3),
        inset 0 -5px 5px rgba(100,100,100,0.1),
        inset 0 5px 5px rgba(255,255,255,0.3);
	}
	.chat-input img {
		height: 100%;
		width: 40px;
		object-fit: cover;
		object-position: top;
		border-radius: 50%;
	}
	.hide-large {
		display: none;
	}
	.info-new {
		background-color: #e5d0d0;
		color: #fff;
		padding: 15px;
		text-align: center;
		font-size: 12px;
		margin: 10px 0;
		
	}
	.info-new span {
		background-color: #e77b7b;
		color: #fff;
		padding: 10px 15px;
		border-radius: 20px;
		border-bottom-left-radius: 0;
		border-top-right-radius: 0;
		font-family: roboto2;
	}
	@media(max-width: 768px) {
		.mini-v {
		max-height: 100vh;
		border-radius: 0;
		}
		.mini {
			grid-template-columns: 1fr;
			height: 100%;
		}
		
		.hide-large {
			display: inline-block;
		}
		.hide-small {
			display: none;
		}
	}
  @media(max-width: 568px) {
		
		.mini-v {
		max-height: 100vh;
		}
	}
	.date {
		font-family: Zen_Kurenaido;
	}
	.empty {
		text-align: center;
		height: 100%;
		display: flex;
		align-items: center;
		justify-content: center;
		flex-direction: column;
	}
	.empty img {
		display: inline-block;
		height: 60px;
		width: 60px;
		object-fit: contain;
		object-position: center;
	}
	.empty p {
		color: #444;
		font-size: 15px;
		padding: 10px;
	}
	.chat-header-img span.unseen {
		color: red !important;
	}
    .chat-header-img span.seen {
		color: blueviolet !important;
	}
	.login, .settings {
		position: fixed;
		top: 0;
		left: 0;
		height: 100%;
		width: 100%;
		display: flex;
		justify-content: center;
		align-items: center;
		background-color: rgba(0,0,0,0.2);
		z-index: 2;
		animation: zoomappear 0.8s ease-out;
		padding: 20px;
	}
	
	.setting-content {
		width: 100%;
		max-width: 400px;
		position: relative;
		padding: 10px;
		background-color: #fff;
		border-radius: 10px;
		animation: zoomin 0.8s ease-in-out;
	}
	.setting-content span {
		position: absolute;
		top: 0;
		right: 0;
		padding: 10px;
		font-size: 18px;
		color: #444;
		transition: all 0.5s ease-in;
		cursor: pointer;
	}
	.setting-content span:hover {
		color: #ff005e;
	}
	.setting-content h2 {
		text-align: center;
		color: #ff005e;
		font-family: roboto;
		font-size: 18px;
		padding: 5px 0;
	}
	.setting-content h4 {
		text-align: center;
		color: #555;
		font-size: 14px;
		padding-bottom: 5px;
	}
	.inputs {
		width: 100%;
		padding: 10px;
	}
	.inputs input {
		height: 40px;
		width: 100%;
		color: #444;
		background-color: transparent;
		padding: 0 10px;
		border: none;
		border-bottom: 1px solid #ccc;
		outline: none;
	}
	.inputs p {
		display: block;
		color: blueviolet;
		transition: all 0.5s ease-in;
		animation: slidedown 0.5s linear;
		padding: 10px;
	}
	.setting-content.zoomout {
		animation: zoomout 0.8s linear;
	}
	.setting.zoomsappear {
		animation: zoomsappear 0.8s linear;
	}
	@keyframes slidedown {
		from {
			transform: translateY(-100px);
			opacity: 0;
		}
		to {
			transform: translateY(0);
			opacity: 1;
		}
	}
	@keyframes zoomout {
		from {
			transform: translateX(0) translateY(0);
			opacity: 1;
			width: 400px;
			height: auto;
			overflow: auto;
		}
		to {
			transform: translateX(-200%) translateY(200%);
			opacity: 0;
			width: 0px;
			height: 0px;
			overflow: hidden;
		}
		
	}
	@keyframes zoomin {
		from {
			transform: translateX(-200%) translateY(200%);
			opacity: 0;
			width: 100px;
			height: 150px;
			overflow: hidden;
		}
		to {
			transform: translateX(0) translateY(0);
			opacity: 1;
			width: 400px;
			height: auto;
			overflow: auto;
		}
		
	}
	@keyframes zoomsappear {
		from {
			opacity: 1;
		}
		to {
			opacity: 0;
		}
	}
	@keyframes zoomappear {
		from {
			opacity: 0;
		}
		to {
			opacity: 1;
		}
	}
	.btn-h {
		text-align: right;
		padding: 10px;
	}
	.btn-h .btn {
		padding: 10px 20px;
		color: #fff;
		background-color: blueviolet;
		border-radius: 5px;
		outline: none;
		border: none;
		transition: all 0.5s ease-in-out;
		cursor: pointer;
	}
	.btn-h .btn:hover {
		background-color: #ff005e;
	}
	.symphonic {
		display: flex;
		justify-content: center;
		align-items: center;
		color: #111;
		font-size: 16px;
		font-family: lenafont;
		padding: 10px 0;
	}
	.symphonic img {
		width: 20px;
		height: 20px;
		object-fit: contain;
		object-position: center;
		padding-right: 1px;
		padding-bottom: 5px;
	}
	.symphonic h2 {
		font-size: 20px;
		color: #ff005e;
		font-family: lenafont;
	}
	.symphonic i {
		font-size: 5px;
		padding: 0 5px;
		color: #222;
	}
	.signError {
		color: #954d4d;
		padding: 10px;
		margin: 20px;
		background-color: #f6f6f6;
		border-radius: 5px;
		
	}
	.noevents {
		pointer-events: none;
		-webkit-filter: blur(5px);
		filter: blur(5px);;
	}
	.search-box h2 {
		padding: 5px 8px;
		padding-top: 10px;
		color: #ff005e;
		font-size: 18px;
		font-family: roboto2;
	}
	.search-box p {
		font-size: 16px;
		padding: 0 10px;
		padding-bottom: 15px;
		font-family: Zen_Kurenaido;
	}
	.border {
		position: absolute;
		bottom: 0px;
		left: 0;
		height: 100%;
		width: 100%;
		border: none;
		animation: go_round 0.9s linear infinite;
		border-radius: 50%;
		border-width: 2px;
		border-style: solid;
		border-color: transparent;
		background-color: rgba(0,0,100,0.2);
		
	}
	.border .border-content {
		height: 100%;
		width: 100%;
		display: flex;
		justify-content: center;
		align-items: center;
		
	}
	.border .border-content span {
		position: static;
		color: #fff;
		padding: 0;
		margin: 0 2px;
	}
	.border.mini .border-content span {
		font-size: 8px;
		margin: 0 1px;
	}
	.border .border-content span:nth-child(n) {
		color: blueviolet;
		animation: bounce1 0.5s infinite;
	}
	.border .border-content span:nth-child(2n) {
		color: #fff;
		animation: bounce2 0.5s infinite;
		animation-delay: 0.15s;
	}
	.border .border-content span:nth-child(3n) {
		color: #ff005e;
		animation: bounce3 0.5s infinite;
		animation-delay: 0.25s;
	}
	@keyframes bounce1 {
		0% {
			transform: translateY(0) scale(0.9);
		}
		100% {
			transform: translateY(-10px) scale(1);
		}
	}
	@keyframes bounce2 {
		0% {
			transform: translateY(0) scale(0.9);
		}
		100% {
			transform: translateY(-10px) scale(1);
		}
	}
	@keyframes bounce3 {
		0% {
			transform: translateY(0) scale(0.9);
		}
		100% {
			transform: translateY(-10px) scale(1);
		}
	}
	.tooltip {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        text-align: center;
        z-index: 5;
        padding: 10px;
        display: none;
    }
    .tooltip p {
        display: inline-block;
        background-color: rgba(0,0,230,0.8);
        padding: 10px 16px;
        color: #fff;
        font-size: 18px;
        border-radius: 5px;
        
    }
    .tooltip.show {
        display: block !important;
    }
    .tooltip.show p {
        animation: tooltip 3.1s ease-in-out;
    }
    @keyframes tooltip {
        0% {
           opacity: 0.1; 
            transform: translateY(-100%);
        }
        25% {
            opacity: 0.8; 
            transform: translateY(0);
        }
        50% {
            opacity: 1; 
            transform: translateY(0);
            
        }
        75% {
            opacity: 1; 
            transform: translateY(0);
            
        }
        90% {
            opacity: 0.5; 
            transform: translateY(-5px);
        }
        100% {
            opacity: 0.1; 
            transform: translateY(-100%);
        }
    }
    
  </style>
</head>
<body>
	<?php 
	if(isset($_SESSION["username"])) {
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
} else {
	/*admin photo*/
$g = "SELECT * FROM admins WHERE email='$user_email1' AND password='$user_pass' ORDER BY admins.adminID ASC";
$rg = $conn->query($g);
if ($rg->num_rows > 0) {
while($row = $rg->fetch_assoc()) {
$pimg = $row["profile"];
}
$adminPhoto = $pimg;
} else {
		$adminPhoto = "abdel/Going%20offline.svg";
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
	
	
	?>
	<div class="tooltip">
      <p>Copied this account's email</p>
      </div>
<div class="main <?php echo $noEvent; ?>">
	<div class="main-mini">
	 <div class="mini-pro">
	<div class="mini-v">
	<div class="mini">
		<div class="chat-out">
			<div class="search-box">
				<h2><?php echo $current_user;
;?></h2>
				<p><?php echo $user_email1; ?></p>
			<div class="search">
			<input type="text" placeholder="Search...">
				<span class="fas fa-search"></span>
			</div>
			</div>
		<div class="chat-messages">
<?php
$a = "SELECT * FROM orders WHERE reciever='$user_email' OR sender='$user_email' GROUP BY email ORDER BY orders.orderID DESC";
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
		<img src="abdel/4077407.jpg">
		<p>You don\'t have any new orders</p>
		</div>';
}
?>
			

		</div>
			
			<div class="bottom-bar">
		<div class="options">
			 <p><span class="fas fa-cog"></span></p>
			</div>
			 <div class="bottom-img">
			<img src="<?php echo $adminPhoto ?>" class="profile_pic">
				 <span class="fas fa-camera prof_pic_btn"></span>
				 <input type="file" class="prof_pic_input hide" accept="image/*">
			<div class="border hide">
			<div class="border-content">
			<span class="fas fa-circle"></span>
			<span class="fas fa-circle"></span>
			<span class="fas fa-circle"></span>
			</div>
			</div>
			</div>
		</div>
			
		 </div>
		 <div class="chat-in hide-small">
        <div></div>
		<div class="empty">
		<img src="abdel/undraw_welcome_re_h3d9.svg">
		<p>Click on an order to open</p>
		</div>
		<div></div>
		 </div>
		
	</div>
		
	</div>
	</div>
	</div>
</div>
	<div class="settings hide">
	<div class="setting-content">
		<span class="fas fa-times close-settings"></span>
		<h2><?php echo $current_user; ?></h2>
		<h4>Change Your Account Log in Detail</h4>
	<div class="form">
		<div class="inputs">
		<input type="text" class="emailacc" placeholder="Enter new email" value="<?php echo $user_email1; ?>">
		<p class="hide">Please enter your new email</p>
		</div>
		<div class="inputs">
		<input type="text" class="passacc" placeholder="Enter new password" value="<?php echo $user_pass; ?>">
		<p class="hide">Please enter your new password</p>
		</div>
		<div class="btn-h">
		<button class="btn saveinfo">Save</button>
		</div>
	</div>	
	</div>
	</div>
<div class="login <?php echo $hideLog ?>">
	<div class="setting-content login-content">
		<span class="fas fa-times close-login hide"></span>
		<div class="symphonic">
		<img src="abdel/UploadedFromPhone_1246986.svg">
			<h2>BourBon</h2>
			<i class="fas fa-circle"></i>
			<p>Chatter</p>
		</div>
		<h4>LOG in to your Account</h4>
	<div class="form">
		<div class="inputs">
		<input type="text" class="emailacc2" placeholder="Enter email" value="">
		<p class="hide">Please enter your email</p>
		</div>
		<div class="inputs">
		<input type="text" class="passacc2" placeholder="Enter password" value="">
		<p class="hide">Please enter your password</p>
		</div>
		<p class="signError hide">The data you have entered does not match with any of our service user's, Please try again or better still go to the main page</p>
		<div class="btn-h">
		<button class="btn logininfo">Continue</button>
		</div>
	</div>	
	</div>
	</div>
<script src="js/jquery-3.2.1.min.js"></script>
<script>
$(".fa-cog").click(function(){
		$("body").css("overflow","hidden");
		$(".main").addClass("noevents");
		$(".settings").removeClass("hide");
	});
	$(".close-settings").click(function(){
		$(".setting-content").addClass("zoomout");
		$(".settings").addClass("zoomsappear");
		setTimeout(function() {
			$(".setting-content").removeClass("zoomout");
			$(".settings").removeClass("zoomsappear");
			$(".settings").addClass("hide");
			$("body").css("overflow","auto");
			$(".main").removeClass("noevents");
		},700);
	});
	$(".close-login").click(function(){
		$(".login-content").addClass("zoomout");
		$(".login").addClass("zoomsappear");
		setTimeout(function() {
			$(".login-content").removeClass("zoomout");
			$(".login").removeClass("zoomsappear");
			$(".login").addClass("hide");
			$("body").css("overflow","auto");
			
		},700);
	});
	$(".saveinfo").click(function() {
		$email = $(".emailacc");
		$pass = $(".passacc");
		$email2 = "<?php echo $user_email1; ?>";
		$pass2 = "<?php echo $user_pass; ?>";
		if ($email.val()) {
			$e = true;
			$email.next().addClass("hide");
		} else {
			$e = false;
			$email.next().removeClass("hide");
		}
		if ($pass.val()) {
			$p = true;
			$pass.next().addClass("hide");
		} else {
			$p = false;
			$pass.next().removeClass("hide");
		}
		if ($p == true && $e == true) {
			$.ajax({ 
                url: 'chat reset.php', 
				type: 'post',
				data: {'email': $email.val(), 'oldemail': $email2, 'pass': $pass.val(), 'oldpass': $pass2},
				success: function(response){
					$(".close-settings").click();
					setTimeout(function() {
						location.reload();
					},700);
					
				}
		 });
		}
	});
	$(".logininfo").click(function() {
		$email = $(".emailacc2");
		$pass = $(".passacc2");
		if ($email.val()) {
			$e = true;
			$email.next().addClass("hide");
		} else {
			$e = false;
			$email.next().removeClass("hide");
		}
		if ($pass.val()) {
			$p = true;
			$pass.next().addClass("hide");
		} else {
			$p = false;
			$pass.next().removeClass("hide");
		}
		if ($p == true && $e == true) {
			$.ajax({ 
                url: 'chat reset.php', 
				type: 'post',
				data: {'checkemail': $email.val(), 'pass': $pass.val()},
				success: function(response){
					if (response == "verified") {
						$(".close-login").click();
						$(".signError").addClass("hide");
						$(".main").removeClass("noevents");
						setTimeout(function() {
						location.reload();
					},700);
					} else {
						$(".signError").removeClass("hide");
					}
					
					
				}
		 });
		}
	});
	
	/*upload btn*/
$(".prof_pic_btn").click(function() {
			$(".prof_pic_input").click();
			});
			$(".prof_pic_input").on("change",function() {
			//Now Upload profile Media Files
		         //profile image upload
                 $comment_imgs = $(".prof_pic_input");
            var fileList = $('.prof_pic_input').prop("files");
    if ($comment_imgs.val()) {
		$(".border").removeClass("hide");
      for (var i = 0; i < fileList.length; i++) {
       var form_data = "";
        form_data = new FormData();
        form_data.append('media_name', fileList[i]);
      $.ajax({
            url: 'change profile.php',
            cache: false,
            contentType: false,
            processData: false,
            type: 'POST',
            async: true,
            data: form_data,
            success: function(response) {
                   $comment_imgs.val("");
				   setTimeout(function() {
					$(".border").addClass("hide");
					   $(".profile_pic").attr("src",response);
				   },2000);
			   setTimeout(function() {
						location.reload();
					},2700);
				
			}
	  });
	  }
	}
		});
/*Search input*/
	$(".search input").on("input", function() {
		
	if ($(this).val()) {
		$searchData = $(".search input").val();
		$(".search span").addClass("hide");
		$.ajax({ 
                url: 'chatter search.php', 
				type: 'post',
				data: {'search': $searchData},
				success: function(response){
					$(".chat-messages").html(response);
				}
		});
	} else {
		$(".search span").removeClass("hide");
		$searchData = "";
		$.ajax({ 
                url: 'chatter search.php', 
				type: 'post',
				data: {'search': $searchData},
				success: function(response){
					$(".chat-messages").html(response);
				}
		});
	}
	
});
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
</body>
</html>
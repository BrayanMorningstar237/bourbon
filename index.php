<?php

//remember user till page closes
session_start();

/*get data if user has already exist*/
if(isset($_SESSION["username"])) {
$current_username = $_SESSION["username"];
$current_email = $_SESSION["email"];
$current_country = $_SESSION["country"];
$current_region = $_SESSION["region"];
$current_city = $_SESSION["city"];
$current_street = $_SESSION["street"];
$current_pass = $_SESSION["pass"];
} else {
$current_username = "";
$current_email = "";
$current_country = "";
$current_region = "";
$current_city = "";
$current_street = "";
$current_pass = "";
}
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
		
    }
	.bourbon {
		width: 100%;
		height: 100%;
		
	}
	.bourbon-content {
		display: grid;
		grid-template-rows: 0.1fr 1fr;
		grid-template-columns: 1fr;
		align-items: center;
		justify-content: center;
		height: 100%;
	}
	.bourbon-body {
		
	}
	.bourbon-content .bourbon-header {
		display: grid;
		grid-template-columns: 1fr 1fr;
		grid-template-rows: 1fr;
		align-items: center;
		justify-content: space-between;
		transition: all 0.5s linear;
		background-color: #f5f5f5;
	}
	.bourbon-content .bourbon-header .header-right {
		text-align: right;
	}
	.bourbon-content .bourbon-header .header-right p {
		display: inline-block;
	}
	.header-left {
		display: flex;
	}
	.header-right {
		overflow-x: hidden;
	}
    .header-right p {
		padding: 10px;
		color: #444;
		transition: all 0.5s linear;
		cursor: pointer;
		
	}
	.header-right p:nth-child(n) {
		animation: slide-in 0.4s ease-in-out;
	}
	.header-right p:nth-child(2n) {
		animation: slide-in 0.8s ease-in-out;
	}
	.header-right p:nth-child(3n) {
		animation: slide-in 1.2s ease-in-out;
	}
	.header-right p:nth-child(4n) {
		animation: slide-in 1.6s ease-in-out;
	}
	.header-right p:nth-child(5n) {
		animation: slide-in 2s ease-in-out;
	}
	
	.slide-out p {
		
	}
	.slide-out p:nth-child(n) {
		animation: slide-out 0.4s ease-in-out;
	}
	.slide-out p:nth-child(2n) {
		animation: slide-out 0.8s ease-in-out;
	}
	.slide-out p:nth-child(3n) {
		animation: slide-out 1.2s ease-in-out;
	}
	.slide-out p:nth-child(4n) {
		animation: slide-out 1.6s ease-in-out;
	}
	.slide-out p:nth-child(5n) {
		animation: slide-out 2s ease-in-out;
	}
	@keyframes slide-in {
		0% {
			transform: translateX(100%);
			opacity: 0;
		}
		100% {
			transform: translateX(0);
			opacity: 1;
		}
	}
	@keyframes slide-out {
		0% {
			transform: translateX(0);
			opacity: 1;
		}
		100% {
			transform: translateX(100%);
			opacity: 0;
		}
	}
	.header-right p:hover {
		color: #ff5e50;
	}
	.header-left p {
		padding: 10px;
		color: #444;
	}
	.header-left span {
		padding: 15px 0;
		font-family: roboto;
		font-size: 20px;
		color: #ff5e50;
	}
	.bourbon-content .bourbon-header img {
		height: 25px;
		
		
	}
	.bourbon-boxder {
		display: grid;
		grid-template-columns: 1fr 1fr;
		grid-template-rows: 1fr;
		align-items: center;
		justify-content: center;
		background-image: url("abdel/blob-scene-haikei.svg");
		background-repeat: no-repeat;
	}
	.img-h {
		
	}
	.img-h img {
		width: 100%;
		height: 100%;
		object-fit: cover;
		object-position: center;
		-webkit-mask-image: url('abdel/blob2.svg');
		-webkit-mask-size: 100% 100%;
		-webkit-mask-position: center;
		
	}
	.bourbon-left .img-h img {
		-webkit-mask-image: url('abdel/blob.svg');
	}
	.bourbon-left {
		padding: 10px;
		padding-top: 40px;
		align-self: flex-start;
	}
	.bourbon-left h2 {
		color: #ff5454;
		padding: 10px;
	}
	.bourbon-left h2 p {
		color: #fff;
	}
	.bourbon-left h2 p.title {
		color: #111;
	}
	.bourbon-left .desc {
		color: #333;
		padding: 5px 10px;
		
	}
	.btn-h {
		padding: 0 10px;
		padding-top: 15px;
	}
	.btn-h button {
		padding: 10px 15px;
		border: none;
		outline: none;
		border-radius: 20px;
		background-color: #ff556b;
		color: #fff;
		transition: all 0.5s linear;
		cursor: pointer;
	}
	.btn-h button:hover {
		box-shadow: inset 3px 2px 13px 2px rgb(100 0 0 / 30%),inset -7px 5px 13px -2px rgb(100 0 0 / 30%);
		font-size: 15px;
	}
	.btn-h a {
		text-decoration: none;
		color: #fff;
	}
	.hide {
		display: none !important;
	}
	.hide-large {
		display: none !important;
	}
	.bourbon-right {
		max-height: 90vh;
		overflow-y: hidden;
	}
	
	/*Bourbon-intro*/
	.bourbon-intro {
		padding: 20px 10px;
	}
	.title-intro {
		text-align: center;
		padding: 10px;
		padding-bottom: 20px;
	}
	.title-intro h2 {
		color: #111;
		
	}
	.title-intro p {
		color: #ff005e;
		font-size: 18px;
	}
	.intro {
		display: grid;
		grid-template-columns: 1fr 1fr 1fr;
		grid-template-rows: 1fr;
		justify-content: center;
		align-content: center;
	}
	.intro .image {
		height: 20vh;
	}
	.intro .image img {
		width: 100%;
		height: 100%;
		object-fit: contain;
		object-position: center;
	}
	.intro h3 {
		color: #333;
		padding: 5px 0;
	}
	.intro p {
		color: #202020;
	}
	.items {
		display: grid;
		grid-template-columns: 1fr 1fr 1fr;
		grid-template-rows: 1fr;
		align-items: center;
		justify-content: center;
		grid-gap: 25px 20px;
	}
	.item {
		overflow: hidden;
		border-radius: 20px;
		background-color: #f5f5f5;
		border: 5px solid #f0f0f0;
		box-shadow: 3px 3px 13px 2px rgb(106 53 53 / 19%), -4px -3px 13px 2px rgb(60 24 24 / 13%);
	}
	.item-image {
		height: 300px;
		position: relative;
	}
	.item-image img {
		width: 100%;
		height: 100%;
		object-fit: cover;
		object-position: center;
	}
	.item-info {
		margin-top: -50px;
		background-color: #F9F9F9;
		
	}
	.info-title {
		position: relative;
		margin: 5px;
		
		text-align: center;
		background-color: #F9F9F9;
		border-radius: 20px;
	}
	.info-title h3 {
		color: #574cb3;
	}
	.info-title p {
		color: #444;
		padding: 5px;
	}
	.info-title .side-line {
		position: absolute;
		left: 10px;
		top: 5px;
		width: 4px;
		height: 100%;
		background-color: #ff556b;
		border-radius: 10px;
	}
	.rating {
		
	}
	.rating span {
		color: #ff8478;
		font-size: 10px;
	}
	.price {
		position: absolute;
		bottom: 0;
		right: 0;
		margin: 10px;
		margin-bottom: 60px;
		padding: 10px;
		color: #574cb3;
		background-color: #fff;
		border-radius: 1px;
		border-bottom-right-radius: 20px;
		box-shadow: -3px -5px 13px 2px rgb(106 53 53 / 41%), 7px 4px 13px 2px rgb(60 24 24 / 36%);
	}
	.info-more {
		padding-left: 10px;
	}
	.info-description {
		padding: 10px;
		position: relative;
		padding-left: 20px;
	}
	.info-delivery {
		position: relative;
	}
	.info-description p {
		font-size: 13px;
		color: #555;
		text-align: center;
	}
	.desc-stand {
		display: inline-flex;
		transform: rotate(270deg);
		color: #444;
		position: absolute;
		left: -25px;
		top: 0;
		height: 100%;
		align-items: center;
		justify-content: center;
		font-weight: bold;
		font-size: 12px;
		letter-spacing: 2px;
	}
	.info-description .desc-stand {
		left: -35px;
	}
	.info-delivery {
		display: grid;
		grid-template-columns: 1fr 1fr 1fr;
		grid-template-rows: 1fr;
		align-items: center;
		justify-content: center;
		padding: 10px;
		grid-gap: 10px;
		padding-left: 15px;
	}
	.info-delivery div {
		height: 50px;
		border-radius: 10px;
		background-color: #ff00fc26;
		display: inline-grid;
		align-items: center;
		justify-content: center;
		text-align: center;
	}
	.info-delivery div p {
		font-size: 10px;
		color: #111;
	}
	.info-delivery span {
		color: #ff556b;
	}
	.info-delivery div span {
		color: #ff005e;
	}
	.info-order {
		padding: 10px;
		display: grid;
		grid-template-columns: 1fr 1fr;
		grid-template-rows: 1fr;
		justify-content: center;
		align-items: center;
	}
	.info-order .count {
		border: 2px solid #ff00fc26;
		padding: 10px 10px;
		display: inline-grid;
		grid-template-columns: 1fr 1fr 1fr;
		grid-template-rows: 1fr;
		text-align: center;
		border-bottom-left-radius: 10px;
		border-top-left-radius: 10px;
		position: relative;
	}
	.info-order .count .fa-plus {
		padding-right: 20px;
	}
	.count-price {
		position: absolute;
		right: -22px;
		top: -5px;
		
	}
	.count-price span {
		background-color: #fff;
		color: #ff005e;
		border: 3px solid #ff005e;
		border-radius: 50%;
		display: inline-flex;
		justify-content: center;
		align-items: center;
		height: 50px;
		width: 42px;
		transition: all 0.5s linear;
		cursor: pointer;
	}
	.count-price span:hover {
		background-color: #ff005e;
		color: #fff;
		border: 3px solid #ccc;
		transform: scale(1.1);
		animation: round 0.5s ease-in-out;
	}
	@keyframes round {
		from {
			transform: rotate3d(20deg);
		} 
		to {
			transform: rotate3d(-20deg);
		}
	}
	.btn-order {
		display: inline-flex;
		justify-content: center;
		align-items: center;
		background-color: #ff005e;
		color: #fff;
		text-align: right;
		height: 100%;
		border-bottom-right-radius: 10px;
		border-top-right-radius: 10px;
	}
	
	
	.service {
		display: grid;
		grid-template-columns: 1fr 1fr 1fr;
		grid-template-rows: 1fr;
		grid-row-gap: 70px;
		justify-content: center;
		align-items: center;
		padding: 10px;
		text-align: center;
		
	}
	.service.service2 {
		width: 70%;
		margin: auto;
		grid-template-columns: 1fr 1fr;
		padding-top: 50px;
		justify-content: space-between;
		padding-left: 40px;
	}
	.service-box {
		background-color: #fff4f4;
		border-radius: 20px;
		transform: rotate(-43deg);
		position: relative;
		height: 100%;
		
	}
	.service-box:before {
		content: "";
		position: absolute;
		bottom: -40px;
		left: -35px;
		height: 100%;
		width: 100%;
		background-color: rgba(200,0,0,0.2);
		border-radius: 20px;
		box-shadow: 5px 6px 13px 2px rgb(155 40 40 / 5%), -4px -3px 13px 2px rgb(243 152 152 / 5%);
	}
	.box-content {
		transform: rotate(43deg);
	}
	.box-img {
		width: 100%;
		text-align: center;
	}
	.box-img img {
		width: 60px;
		height: 60px;
		border-radius: 50%;
		display: inline-block;
		margin-top: -35px;
		padding: 5px;
		background-color: #fff4f4;
		border: 5px solid #ff005e;
		animation: lightup 1.2s ease-in-out infinite;
		transition: all 0.2s linear;
	}
	@keyframes lightup {
		0% {
		padding: 5px;
		background-color: #fff4f4;
		border: 5px solid #ff005e;
		}
		/*50% {
		padding: 5px;
		background-color: #fff;
		border: 5px solid #ff005e;
		}*/
		to {
		padding: 0;
		background-color: #ff005e;
		border: 5px solid #ff005e;
		}
	}
	.box-text {
		padding: 10px;
	}
	.box-text .text {
		padding: 10px;
		font-size: 13px;
		color: #3c3131;
	}
	.box-text .text p {
		text-align: justify;
	}
	.box-header {
		display: flex;
		justify-content: center;
		align-items: center;
		position: relative;
		padding: 20px;
	}
	.box-header h2 {
		text-align: center;
		padding: 0 10px;
		font-size: 16px;
		color: #261616;
	}
	.box-header span {
		display: block;
		position: absolute;
		font-size: 30px;
		color: #ff005e;
	}
	
	.box-header span.fa-chevron-left {
		transform: rotate(-45deg);
		bottom: 0;
		left: 0;
	}
	.box-header span.fa-chevron-right {
		transform: rotate(-45deg);
		top: 0;
		right: 0;
	}
	.bourbon-service .title-intro {
		margin: 20px 0;
		margin-bottom: 30px;
	}
	.about-content {
		margin-top: 80px;
	}
	.about {
		display: grid;
		grid-template-columns: 1fr 1fr;
		grid-template-rows: 1fr;
		justify-content: center;
		align-items: center;
		padding: 10px 0;
		
	}
	.about-item img {
		width: 100%;
		height: 100%;
	}
	.about-item.name {
		
	}
	.about-item.name h2 {
		color: #ff005e;
		font-size: 40px;
		font-family: lenafont
	}
	.about-item.name p {
		font-size: 20px;
		color: #454545;
		font-family: roboto;
	}
	.about-item.logo {
		display: grid;
		grid-template-columns: 1fr 1fr;
		grid-template-rows: 1fr;
		justify-content: center;
		align-items: center;
		grid-column-gap: 20px;
	}
	.logo-text {
		display: flex;
		width: 200px;
		overflow-x: hidden;
	}
	.logo-text-main {
		background-color: #f9efef;
		border-radius: 10px;
	    padding: 10px;
		
	}
	.logo-text p {
		min-width: 100%;
		height: 100%;
		transition: all 0.5s linear;
		font-size: 16px;
		color: #333;
		text-align: center;
	}
	.logo-text p span {
		display: block;
		color: #933c52;
		padding: 5px;
		font-size: 18px;
	}
	.logo-btn {
		text-align: center;
		padding: 5px 10px;
	}
	.logo-btn span {
		padding: 10px;
		border-radius: 50%;
		color: #fff;
		background-color: #933c52;
		margin: 0 2.5px;
		box-shadow: 1px 3px 18px 0px rgb(116 106 106 / 30%), 4px -7px 13px -2px rgb(137 123 123 / 25%);
		transition: all 0.2s linear;
		cursor: pointer;
	}
	.logo-btn span:hover {
		background-color: #f54975;
		transform: scale(1.1);
	}
	.fa-circle.active {
		color: #f54975;
	}
	.logo-indicator {
		text-align: center;
	}
	.logo-indicator span {
		padding: 2.5px;
		transition: all 0.5s linear;
	}
	.logo-image {
		background-color: #b94e4e;
		margin: auto;
		padding: 10px;
		border-radius: 20px;
	}
	.logo-h {
		background-color: #fff;
		padding: 10px;
		border-radius: 20px;
	}
	.logo-h img {
		height: 250px;
		width: 200px;
		background-color: rgba(200,0,0,0.3);
		border-radius: 20px;
		box-shadow: 8px 7px 13px 0px rgb(106 53 53 / 21%), -2px 4px 13px 2px rgb(60 24 24 / 34%);
		animation: slidein 2s ease-in-out infinite;
		transition: all 4s ease-in-out;
		
	}
	@keyframes slidein {
		0% {
			transform: translateY(-40px);
			background-color:  rgb(239 66 61 / 40%);
		}
		20% {
			transform: translateY(0px);
			background-color: rgb(173 167 67 / 40%);
		}
		30% {
			transform: translateY(20px);
			background-color:  rgb(239 66 61 / 40%);
		}
		50% {
			transform: translateY(40px);
			background-color:  rgb(239 66 61 / 40%);
		}
		70% {
			transform: translateY(0);
			background-color: rgb(173 167 67 / 40%);
		}
		80% {
			transform: translateY(0);
			background-color: rgb(173 167 67 / 40%);
		}
		100% {
			transform: translateY(-40px);
			background-color:  rgb(239 66 61 / 40%);
		}
	}
	.footer-content-mini {
		display: grid;
		grid-template-columns: 1.2fr 0.8fr;
		grid-template-rows: 1fr;
		justify-content: center;
		align-items: center;
		background-color: #ff0666;
		
		height: 100%;
		min-height: 30vh;
		background-image: url("abdel/pattern%20(4).svg");
		background-position: bottom;
		background-size: contain;
	}
	.footer-left {
		display: grid;
		grid-template-columns: 1fr 1.1fr 1fr;
		grid-template-rows: 1fr;
		justify-content: center;
		align-items: center;
		
	}
	.footer-left div {
		padding: 10px;
		text-align: center;
	}
	.follow {
		
	}
	.footer-left div h2 {
		font-size: 15px;
		padding: 5px;
		font-family: Zen_Kurenaido;
	}
	.follow h2 {
		padding: 10px 0;
		color: #fff;
	}
	.clients h2 {
		color: #fbb4b4;
		
	}
	.clients p {
		color: #fff;
		font-size: 20px;
		font-family: roboto;
	}
	.follow span {
		font-size: 15px;
		background-color: #fff;
		height: 25px;
		width: 25px;
		display: inline-flex;
		justify-content: center;
		align-items: center;
		color: #ff005e;
		border-radius: 50%;
		transition: all 0.5s linear;
		cursor: pointer;
		
	}
	.follow span:hover {
		background-color: #ff005e;
		color: #fff;
		border: 1px solid #fff;
	}
	.footer-right {
		display: flex;
		justify-content: center;
		align-items: center;
		border-left: 1px solid #fcc9ce;
		padding: 10px;
	}
	.footer-items {
		position: relative;
		text-align: center;
		width: 100%;
		height: 60px;
		
	}
	.footer-images {
		position: absolute;
		top: 0;
		left: 0;
		height: 100%;
		width: 100%;
		z-index: 4;
		display: grid;
		grid-template-columns: 1fr 1fr 1fr;
		grid-template-rows: 1fr;
		justify-content: center;
		align-items: center;
		grid-column-gap: 5px;
	}
	.box-deco {
		position: absolute;
		top: -20px;
		left: 0;
		bottom: -25px;
		width: 100%;
		z-index: 1;
		text-align: center;
	}
	.box-deco div {
		width: 50%;
		display: inline-block;
		border: 5px solid #fcc9ce;
		height: 100%;
		
	}
	.footer-right .footer-items img {
		width: 100%;
		height: 100%;
		object-fit: cover;
		object-position: center;
	}
	.customer-care {
		width: 40%;
		text-align: center;
	}
	.customer-care span {
		color: #fff;
		padding: 10px;
		font-size: 20px;
		background-color: #4f1f5c;
		border-radius: 50%;
		margin: 0 10px;
		transition: all 0.5s ease-in-out;
		cursor: pointer;
		
	}
	.customer-care span:hover {
		box-shadow: 1px 3px 18px 0px rgb(116 106 106 / 30%), 4px -7px 13px -2px rgb(137 123 123 / 25%);
		transform: scale(1.02);
	}
		.header-float {
		position: fixed;
		width: 100%;
		max-width: 700px;
		margin: auto;
		top: 0;
		
		z-index: 99;
		animation: slidetop 0.5s linear;
	}
	.header-float-back {
		animation: slidebottom 0.5s linear;
	}
	@keyframes slidetop {
		from {
			transform: translateY(-100%);
			opacity: 0.8;
		}
		to {
			transform: translateY(0);
			opacity: 1;
		}
	}
	@keyframes slidebottom {
		from {
			transform: translateY(0);
			opacity: 1;
		}
		to {
			transform: translateY(-50%);
			opacity: 0.8;
		}
	}
	.menu-opt p.active {
		color: #ff005e;
	}
	.bourbon-order {
		position: fixed;
		z-index: 100;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		background-color: rgba(0,0,0,0.2);
		display: flex;
		justify-content: center;
		align-items: center;
		transition: all 0.5s linear;
		animation: zoomappear 0.6s linear;
	}
	.order-content {
		position: relative;
		background-color: #fff;
		height: 100%;
		overflow-y: auto;
		animation: zoomin 0.6s linear;
	}
	.order-content.zoomout {
		animation: zoomout 0.6s linear;
	}
	.bourbon-order.zoomsappear {
		animation: zoomsappear 0.6s linear;
	}
	@keyframes zoomout {
		from {
			transform: scale(1);
			opacity: 1;
		}
		to {
			transform: scale(0);
			opacity: 0;
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
	@keyframes zoomin {
		from {
			transform: scale(0);
			opacity: 0;
		}
		to {
			transform: scale(1);
			opacity: 1;
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
	.order-header {
		display: flex;
		justify-content: space-between;
		align-items: center;
		padding: 10px;
		background-color: #ff005e;
		color: #fff;
		font-family: roboto;
		position: fixed;
		width: 100%;
		max-width: 700px;
		margin: auto;
		z-index: 3;
	}
	.order-header p:nth-child(1) {
		font-family: roboto;
	}
	
	.header-top {
		display: flex;
		justify-content: space-between;
		align-items: center;
		padding: 10px;
	}
	.header-top p {
		position: relative;
	}
	.header-top p .fa-shopping-basket {
		font-size: 20px;
	}
	.header-top p .fa-circle {
		font-size: 10px;
		color: mediumseagreen;
		padding: 0 5px;
	}
	
	.item-num {
		position: absolute;
		top: -8px;
		right: -12px;
		background-color: blueviolet;
		color: #fff;
		padding: 8px 2px;
		border-radius: 50%;
		font-size: 7px;
		font-weight: bolder;
	}
	.order-body {
		width: 100%;
		max-width: 700px;
		display: grid;
		grid-template-columns: 1fr 1fr;
		grid-template-rows: 1fr;
		justify-content: center;
		align-items: center;
		padding-top: 38px;
		
	}
	.order-box-header {
		text-align: center;
	}
	.order-box-header h2 {
		font-family: roboto;
	}
	.order-box-header p {
		font-family: Zen_Kurenaido;
	}
	.order-image {
		
	}
	.order-image img {
		width: 100%;
		height: 100%;
		object-fit: contain;
		object-position: center;
		
	}
	.order-right {
		height: 100%;
		padding: 10px;
		background-color: #3e3e3e;
	}
	.order-right h2 {
		color: #e51e6c;
		font-size: 18px;
		font-family: roboto;
		padding: 10px 0;
		text-align: center;
	}
	.form .inputs {
		padding: 20px;
	}
	.form.active .inputs {
		padding: 20px;
	}
	
	.inputs p {
		padding: 10px 0;
		color: blueviolet;
	}
	.inputs input {
		border: none;
		border-bottom: 1px solid #f0f0f0;
		color: #ccc;
		padding: 10px;
		outline: none;
		width: 100%;
		background-color: transparent;
		font-family: roboto;
	}
	.inputs input::placeholder {
		color: #ccc;
	}
	.order-left {
		padding: 0 10px;
	}
	.btn-chat {
		padding: 10px;
		text-align: right;
	}
	.btn-chat button {
		outline: none;
		padding: 10px 15px;
		color: #ff005e;
		background-color: #444;
		border-radius: 5px;
		cursor: pointer;
		border: 1px solid #333;
		box-shadow: 5px 6px 13px 2px #262121, inset -14px -17px 13px 2px #444141;
	}
	.btn-chat button:hover {
		box-shadow: inset 5px 6px 13px 2px #262121, inset -0px -8px 3px 2px #444141;
		color: #222;
		background-color: #ff005e;
	}
	.order-desc {
		color: #222;
		text-align: center;
		padding: 10px 0;
	}
	.order-price {
		text-align: center;
		padding: 10px 0;
		font-family: roboto;
	}
	.close-order {
		cursor: pointer;
	}
	.method {
		text-align: center;
		font-size: 15px;
		color: #444;
	}
	.method i {
		color: #ff005e;
	}
	.cart-delivery div.active {
		background-color: #ff1aa866;
	}
	
@media(max-width: 768px) {
		.hide-small {
			display: none !important;
		}
		.hide-large {
			display: inline-block !important;
		}
		.intro {
			grid-template-columns: 1fr;
		} 
		.items {
			grid-template-columns: 0.6fr;
		}
	    .order-body {
		grid-template-columns: 1fr;
		grid-row-gap: 10px;
	    }	
	}
	
	@media(max-width: 668px) {
		.hide-small {
			display: none !important;
		}
		.items {
			grid-template-columns: 0.6fr;
		}
		.box-img img {
		margin-top: -30px;
		}
		.service {
			grid-column-gap: 10px;
			grid-template-columns: 1fr 1fr;
		}
		.service-box {
		transform: rotate(0deg);
		position: relative;
	}
		
	.service-box:before {
		content: "";
		position: absolute;
		bottom: -30px;
		left: 7.5px;
		height: 100%;
		width: calc(100% - 15px);
		background-color: rgba(200,0,0,0.2);
		border-radius: 20px;
	}
	.box-content {
		transform: rotate(0deg);
	}
		.service.service2 {
			width: 100%;
			padding-left: 0;
		}
		.about {
		grid-template-columns: 1fr;
		text-align: center;
		grid-gap: 20px;
		padding: 0;
	    padding-top: 10px;
		}
		.about-item.logo {
		grid-template-columns: 1fr;
			
		}
		.logo-text {
		margin: auto;
		
	}
		.logo-image {
			margin: 40px auto;
		}
		.box-deco {
			bottom: -20px;
		}
		.box-deco div {
			width: 30%;
		}
		.footer-content-mini {
		grid-template-columns: 1fr;
		padding-bottom: 40px;
			grid-row-gap: 30px;
			background-repeat: no-repeat;
			background-position: bottom;
		}
		.footer-images {
			grid-template-rows: 60px;
			grid-template-columns: 60px 60px 60px;
		}
		.footer-right {
			flex-direction: column;
			border-right: 1px solid #fcc9ce;
		}
		.customer-care {
			width: 100%;
			margin-top: 30px;
		}
		
	}
	@media(max-width: 468px) {
		.hide-small {
			display: none !important;
		}
		.items {
			grid-template-columns: 0.85fr;
		}
	}
	.order-admin, .order-signed {
		padding: 10px;
		align-self: flex-start;
	}
	.order-admin h2, .order-signed h2 {
		color: #444;
		padding: 10px;
		font-family: roboto;
	}
	.order-admin p, .order-signed p {
		color: #222;
		padding: 0 10px;
	}
	
	</style>
	</head>
	<body>
	<div class="bourbon-order hide">
		<div class="order-content">
			<div class="order-header">
			<p>BOURBON ORDER</p>
				<p><span class="fas fa-times close-order"></span></p>
			</div>
		<div class="order-body">
			<div class="order-left-main">
			<div class="order-left">
				<div class="order-box-header ">
					<div class="header-top">
						<p><span class="fas fa-circle"></span>Available Stock</p>
					<p><span class="fas fa-shopping-basket"></span><span class="item-num">00</span></p>
				    </div>
				<h2 class="mainName">Loading...</h2>
					<p class="miniName">Loading...</p>
				</div>
			<div class="order-left-mini">
			<div class="box-effect"></div>
				<div class="box-order">
				<div class="order-image">
					<img src="abdel/3627634.jpg">
				</div>
					<div class="order-desc">
					Loading...
					</div>
					<div class="order-price">
					<span>$2000</span>
				    </div>
					<h4 class="method"><i class="fas fa-info-circle"> </i> Choose a delivery method</h4>
					<div class="info-delivery cart-delivery">
						<span class="desc-stand">Delivery</span>
						<div delivery="fa-shipping-fast" delivery-rate="0.2">
						<span class="fas fa-shipping-fast"></span>
							<p>Loading</p>
						</div>
					<div delivery="fa-ship" delivery-rate="1">
						<span class="fas fa-ship"></span>
							<p>Loading...</p>
						</div>
					<div delivery="fa-bicycle" delivery-rate="0.5">
						<span class="fas fa-bicycle"></span>
							<p>Loading...</p>
						</div>
					</div>
					<div class="info-order">
					<div class="count">
						<span class="fas fa-minus"></span>
						<span class="number cart-num">0</span>
						<span class="fas fa-plus"></span>
						<div class="count-price">
						<span class="fas fa-shopping-cart order-cart" price="00"></span>
						</div>
					</div>
						<div class="btn-order">
						<p class="btn total-price">$00</p>
						</div>
					</div>
			   </div>
			</div>
			</div>
			</div>
			<div class="order-signed hide">
			<h2>Continue this action</h2>
				<p>You have signed up already, proceed to chat with a sales attendant</p>
				<div class="btn-chat">
				<button class="purchase">Purchase Chat</button>
				</div>
			</div>
			<div class="order-admin hide">
			<h2>Admin Notice</h2>
				<p>Admins(sales attendant) cannot make any purchase, proceed to the chatter messenger.</p>
				<div class="btn-chat">
				<button class="purchase2">Chatter Messenger</button>
				</div>
			</div>
			<div class="order-right hide">
				<h2>Sign up and start a chat to continue this purchase</h2>
			<div class="form">
				<div class="inputs">
	<input type="text" placeholder="Enter name" class="username" value="<?php echo $current_username;?>">
				<p class="hide">Please enter your name</p>
				</div>
			<div class="inputs">
				<input type="text" placeholder="Enter email" class="email" value="<?php echo $current_email;?>">
				<p class="hide">Please enter your email</p>
				</div>
			<div class="inputs">
				<input type="text" placeholder="Country" class="country" value="<?php echo $current_country;?>">
				<p class="hide">Please enter your country</p>
				</div>
			<div class="inputs">
				<input type="text" placeholder="Region/state" class="region" value="<?php echo $current_region;?>">
				<p class="hide">Please enter your region</p>
				</div>
			<div class="inputs">
				<input type="text" placeholder="City" class="city" value="<?php echo $current_city;?>">
				<p class="hide">Please enter your city</p>
				</div>
			<div class="inputs">
				<input type="text" placeholder="Street" class="street" value="<?php echo $current_street;?>">
				<p class="hide">Please enter your street</p>
				</div>
			<div class="inputs">
				<input type="text" placeholder="Password" class="pass" value="<?php echo $current_pass;?>">
				<p class="hide">Please set a password</p>
				</div>
			<div class="btn-chat">
				<button class="purchase">Purchase Chat</button>
				</div>
			</div>
			</div>
		</div>
		</div>
	</div>
	<div class="main">
	<div class="main-mini">
<div class="bourbon">
<div class="bourbon-content">
	<div class="bourbon-header">
	<div class="header-left">
		<p><img src="abdel/UploadedFromPhone_1246986.svg"></p>
		<span>BourBon</span>
	</div>
		<div class="header-right">
			<div class="menu-opt hide-small">
		<p class="opt1 active" scrollTo="bourbon-home"><span>Home</span></p>
		<p class="opt2" scrollTo="bourbon-menu"><span>Menu</span></p>
		<p class="opt3" scrollTo="bourbon-service"><span>Services</span></p>
		<p class="opt4" scrollTo="bourbon-about"><span>About</span></p>
		<p class="opt5" scrollTo="bourbon-contact"><span>Contact</span></p>
				</div>
			<p class="hide-large open-opt"><span class="fas fa-bars"></span></p>
		</div>
		
	</div>
	<div class="bourbon-body">
	<div class="bourbon-boxder bourbon-home">
	<div class="bourbon-left">
	<h2>
	<p class="title">BourBon</p>
	<p>Taste Of Infinity</p>
	</h2>
		<p class="desc">There is more to life with one sip, take your tongue to a journey of a thousand cities blend into one. Richly coloured and smoothly made, Just for you.</p>
		<div class="btn-h">
		<button><a href="tel:651049115">Order Now</a></button>
		</div>
		<div class="img-h hide-small">
			<img src="abdel/UploadedFromPhone_IMG-20220611-WA0028.jpg">
		</div>
	</div>
	<div class="bourbon-right">
		<div class="img-h">
			<img src="abdel/UploadedFromPhone_IMG-20220611-WA0030.jpg">
			<img src="abdel/UploadedFromPhone_IMG-20220611-WA0031.jpg">
			
		</div>
	</div>
	</div>
	<div class="bourbon-intro">
		<div class="title-intro">
		<p>Intro</p>
		<h2>BourBon From Within</h2>
		</div>
		<div class="intro">
		<div class="story">
			<h3>Our Story</h3>
			<p>Bourbon is a company that offers you a variety of brilliantly created flavours of Wines &amp; whiskey.Made with detail from smallest to richest of tastes and ingredients.Variety is key but Our taste still stays unique and our mark in your heart.There isn't much to say as our story begins with you.</p>
		</div>
		<div class="image">
			<img src="abdel/UploadedFromPhone_1246986.svg">
		</div>
		<div class="vision">
			<h3>Our Vision</h3>
			<p>The future is with the present, Same as Bourbon is to it's features. Greatness is not complete if not shared that is why we hope to exploit every option at our disposal just so you can get a taste of this greatness.</p>
		</div>
		</div>
	</div>
		<div class="bourbon-menu">
		<div class="title-intro">
		<p>Menu</p>
		<h2>Our Products And Pricing</h2>
		</div>
			<div class="items">
				<?php
			include "config bourbon.php";
				//get bourbon items
		$a = "SELECT * FROM items ORDER BY items.itemID ASC";
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
				echo '
				<div class="item">
				<div class="item-image">
				<img src="'.$img.'">
					<span class="price">$'.$price.'</span>
				</div>
				<div class="item-info">
				<div class="info-title">
				<span class="side-line"></span>
				<p>'.$miniName.'</p>
				<h3>'.$mainNamee.'</h3>
				<div class="rating">
					<span class="fas fa-star"></span>
				<span class="fas fa-star"></span>
				<span class="fas fa-star"></span>
				<span class="fas fa-star"></span>
				<span class="fas fa-star"></span>
				</div>
				</div>
					<div class="info-more">
					<div class="info-description">
						<span class="desc-stand">Description</span>
						<p>'.$description.'</p>
					</div>
					<div class="info-delivery">
						<span class="desc-stand">Delivery</span>
						<div>
						<span class="fas fa-shipping-fast"></span>
							<p>1km - $'.$car.'</p>
						</div>
					<div>
						<span class="fas fa-ship"></span>
							<p>1km - $'.$shipPrice.'</p>
						</div>
					<div>
						<span class="fas fa-bicycle"></span>
							<p>1km - $'.$bicycle.'</p>
						</div>
					</div>
					</div>
					<div class="info-order">
					<div class="count">
						<span class="fas fa-minus"></span>
						<span class="number">1</span>
						<span class="fas fa-plus"></span>
						<div class="count-price">
						<span class="fas fa-shopping-cart" price="'.$price.'" itemid="'.$itemID.'" ></span>
						</div>
					</div>
						<div class="btn-order">
						<p class="btn">$'.$price.'</p>
						</div>
					</div>
				</div>
			</div>
				';
				
			}
		}
				
				?>
			
			</div>
		</div>
		<div class="bourbon-service">
		<div class="title-intro">
		<p>Services</p>
		<h2>What we offer</h2>
		</div>
		<div class="service">
			<div class="service-box">
			<div class="box-content">
				<div class="box-img">
				<img src="abdel/undraw_awards_fieb.svg">
				</div>
				<div class="box-text">
				<div class="box-header">
				<span class="fas fa-chevron-left"></span>
					<h2>Customer Rewards</h2>
					<span class="fas fa-chevron-right"></span>
				</div>
				<div class="text">
				<p>From time to time, stand a chance to win awards such as for being the first to make a purchase or being one of the 10th customers.This rewards are random so be sure to make a purchase, you never know, That free bottle could just be yours. </p>	
				</div>
				</div>
			</div>
			</div>
			
			<div class="service-box">
			<div class="box-content">
				<div class="box-img">
				<img src="abdel/windy.svg">
				</div>
				<div class="box-text">
				<div class="box-header">
				<span class="fas fa-chevron-left"></span>
					<h2>Delivery Services</h2>
					<span class="fas fa-chevron-right"></span>
				</div>
				<div class="text">
				<p>All purchases are delivered as per the customer's location and the various means are shown below each item. This delivery rate charges have been moderated to fit any customer.Each purchase via our site automatically includes this rates.</p>	
				</div>
				</div>
			</div>
			</div>
			
			<div class="service-box hide-small">
			<div class="box-content">
				<div class="box-img">
				<img src="abdel/undraw_personalization_re_grty.svg">
				</div>
				<div class="box-text">
				<div class="box-header">
				<span class="fas fa-chevron-left"></span>
					<h2>Free chat</h2>
					<span class="fas fa-chevron-right"></span>
				</div>
				<div class="text">
				<p>Purchases can be made manually, so you the customer can easily get to know the producer and product in order to fascilitate usage and transactions. </p>	
				</div>
				</div>
			</div>
			</div>
			</div>
			<div class="service service2 special-box">
			<div class="service-box">
			<div class="box-content">
				<div class="box-img">
				<img src="abdel/undraw_personalization_re_grty.svg">
				</div>
				<div class="box-text">
				<div class="box-header">
				<span class="fas fa-chevron-left"></span>
					<h2>Customer requests</h2>
					<span class="fas fa-chevron-right"></span>
				</div>
				<div class="text">
				<p>We offer every customer a chance to express and be heard. We are always available for your new wine and whiskey requests. Wine a day keeps the brain awake.</p>	
				</div>
				</div>
			</div>
			</div>
			<div class="service-box">
			<div class="box-content">
				<div class="box-img">
				<img src="abdel/undraw_wine_tasting_re_4jjf%20(1).svg">
				</div>
				<div class="box-text">
				<div class="box-header">
				<span class="fas fa-chevron-left"></span>
					<h2>Real time Negotiation</h2>
					<span class="fas fa-chevron-right"></span>
				</div>
				<div class="text">
				<p>Our providers are considerate enough to have a drag about the prices with you, Special wine &amp; whiskey requests are highly attended to, so don't hesitate to ask.</p>	
				</div>
				</div>
			</div>
			</div>
			</div>
			
		</div>
		<div class="bourbon-about">
		<div class="about-content">
			<div class="title-intro">
		<p>About</p>
		<h2>Our Story &amp; Vision</h2>
		</div>
			<div class="about">
			<div class="about-item name">
				<h2>BourBon</h2>
				<p>TASTE OF INFINITY</p>
			</div>
				<div class="logo-image hide-large">
					<div class="logo-h">
					<img src="abdel/UploadedFromPhone_1246986.svg">
					</div>
					</div>
				<div class="about-item logo">
				<div class="logo-text-main">
					<div class="logo-indicator">
					<span class="fas fa-circle active"></span>
					<span class="fas fa-circle"></span>
					<span class="fas fa-circle"></span>
					</div>
				<div class="logo-text">
					<p><span>Basis</span>
						Bourbon is an ecommercerce website that was thoughtfully and essentially made for the comfort of it's customers.We've been around for quite sometime as our experience with you will tell.Our whiskey and wines Portray our ability of variety. With Bourbon, you're just a tap away from a great day.</p>
					<p><span>Process</span>
					We have workers on stand by to attend to your enquiry or suggestions at any given time of the day. If you encounter any problems with this procedure, Kindly contact our customer care service using the button at the bottom of the page</p>
					<p><span>Transactionary</span>Our standard currency is the american dollar so beware of transaction rates when purchasing.we have experties on the best and most suitable wine and whikey for consumption. That's why our team will randomly give you suggestions on what we think is best.We look forward to your requests and hope you will inform others about us.Bourbon, A TASTE OF INFINITY</p>
				</div>
					<div class="logo-btn">
					<span class="fas fa-chevron-left logo-back"></span>
					<span class="fas fa-chevron-right logo-next"></span>
					</div>
				   
				</div>
					
					<div class="logo-image hide-small">
					<div class="logo-h">
					<img src="abdel/UploadedFromPhone_1246986.svg">
					</div>
					</div>
				</div>
			</div>
			
			</div>
		
		</div>
		<div class="bourbon-footer bourbon-contact">
		<div class="footer-content">
			<div class="footer-content-mini">
			<div class="footer-left">
				<div class="follow">
				<h2>FOLLOW US</h2>
				<span class="fab fa-facebook-f"></span>
				<span class="fab fa-instagram"></span>
				<span class="fab fa-twitter"></span>
				<span class="fab fa-pinterest-p"></span>
				</div>
				<div class="clients">
				<h2>CLIENTS SATISFIED</h2>
					<p>360+</p>
				</div>
			<div class="clients">
				<h2>PRODUCTS SOLD</h2>
					<p>1250+</p>
				</div>
			</div>
				
			<div class="footer-right">
				<div class="footer-items">
					<div class="box-deco"><div></div></div>
				<div class="footer-images">
				<img src="abdel/UploadedFromPhone_IMG-20220611-WA0030.jpg">
				<img src="abdel/UploadedFromPhone_IMG-20220611-WA0032.jpg">
				<img src="abdel/UploadedFromPhone_IMG-20220611-WA0031.jpg">
					</div>
				</div>
				<div class="customer-care"><span class="fas fa-user-tie"></span></div>
			</div>
			</div>
			
		</div>
		
		</div>
	</div>
	</div>
	</div>
		
	</div>
	</div>
	<a href="message%20chatter.php" target="_blank" class="openChat hide">Open Chat</a>	
<script src="js/jquery-3.2.1.min.js"></script>
<script>
$(".open-opt").click(function() {
	$opt = $(".menu-opt");
	$opt.children("p").removeClass("hide-small");
	if ($opt.hasClass("hide-small")) {
		$opt.removeClass("hide-small");
	} else {
		$opt.addClass("slide-out");
		setTimeout(function(){
			$opt.addClass("hide-small");
			$opt.removeClass("slide-out");
		},1900)
		setTimeout(function(){
			$(".opt1").addClass("hide-small");
			
		},300)
		setTimeout(function(){
			$(".opt2").addClass("hide-small");
			
		},700)
		setTimeout(function(){
			$(".opt3").addClass("hide-small");
			
		},1100)
		setTimeout(function(){
			$(".opt4").addClass("hide-small");
			
		},1500)
		setTimeout(function(){
			$(".opt5").addClass("hide-small");
			
		},1900)
	}
});
	$(".fa-plus").click(function() {
		$number = $(this).prev().text();
		$fn = parseInt($number)+ 1;
		$(this).prev().text($fn);
		$price = $(this).next().children("span").attr("price");
		$price = parseInt($price);
		$price = $fn * $price;
		$(this).parent().next().children("p").text("$"+$price);
		
	});
$(".fa-minus").click(function() {
		$number = $(this).next().text();
		$fn = parseInt($number) - 1;
	if ($fn < 1) {
		
	} else {
		$(this).next().text($fn);
		$price = $(this).next().next().next().children("span").attr("price");
		$price = parseInt($price);
		$price = $fn * $price;
		$(this).parent().next().children("p").text("$"+$price);
	}
		
	});
	$(".logo-next").click(function() {
		$currentScrollLeftpostion = $(".logo-text").scrollLeft();
		if ($(".logo-text").scrollLeft() >= 0 && $(".logo-text").scrollLeft() <= 800) {
			$(".logo-indicator span").removeClass("active");
			if ($(".logo-text").scrollLeft() >= 400) {
			$(".logo-text").scrollLeft(0);
			$(".logo-indicator span").eq(0).addClass("active");
		} else {
			$(".logo-text").scrollLeft($currentScrollLeftpostion + 200);
			if ($(".logo-text").scrollLeft() == 200) {
			$(".logo-indicator span").eq(1).addClass("active");
			} else {
				$(".logo-indicator span").eq(2).addClass("active");
			}
		}
		} 
		
	});
$(".logo-back").click(function() {
		$currentScrollLeftpostion = $(".logo-text").scrollLeft();
		if ($(".logo-text").scrollLeft() >= 0 && $(".logo-text").scrollLeft() < 800) {
			$(".logo-indicator span").removeClass("active");
			if ($(".logo-text").scrollLeft() <= 0) {
			$(".logo-text").scrollLeft(400);
			$(".logo-indicator span").eq(2).addClass("active");
		} else {
			$(".logo-text").scrollLeft($currentScrollLeftpostion - 200);
			if ($(".logo-text").scrollLeft() == 200) {
			$(".logo-indicator span").eq(1).addClass("active");
			} else {
				$(".logo-indicator span").eq(0).addClass("active");
			}
		}
		} 
		
	});
	$(".menu-opt p").click(function() {
	  $(".menu-opt p").removeClass("active");
	  $(this).addClass("active");
      $scrollto_element = $(this).attr("scrollTo");
      $("."+$scrollto_element)[0].scrollIntoView();
	
  });
	$(window).on("scroll", function() {
		$currentPos = $(this).scrollTop();
		if($currentPos > 60) {
			$(".bourbon-header").addClass("header-float");
		$(".bourbon-header").removeClass("header-float-back");
		} else {
			$(".bourbon-header").removeClass("header-float");
			$(".bourbon-header").addClass("header-float-back");
		}
		if ($(window).scrollTop() >= 0) {
			$(".menu-opt p").removeClass("active");
			$(".menu-opt p").eq(0).addClass("active");
		}
		if ($(window).scrollTop() >= $(".bourbon-home").offset().top + $(".bourbon-home").outerHeight() + 1000 - $(window).innerHeight()) {
			 $(".menu-opt p").removeClass("active");
			$(".menu-opt p").eq(1).addClass("active");
		}
		if ($(window).scrollTop() >= $(".bourbon-menu").offset().top + $(".bourbon-menu").outerHeight() - $(window).innerHeight()) {
			 $(".menu-opt p").removeClass("active");
			$(".menu-opt p").eq(2).addClass("active");
		}
		if ($(window).scrollTop() >= $(".bourbon-service").offset().top + $(".bourbon-service").outerHeight() - $(window).innerHeight()) {
			 $(".menu-opt p").removeClass("active");
			$(".menu-opt p").eq(3).addClass("active");
		}
		if ($(window).scrollTop() >= $(".bourbon-about").offset().top + $(".bourbon-about").outerHeight() - $(window).innerHeight()) {
			 $(".menu-opt p").removeClass("active");
			$(".menu-opt p").eq(4).addClass("active");
		}
	});
	$(".close-order").click(function(){
		$(".order-content").addClass("zoomout");
		$(".bourbon-order").addClass("zoomsappear");
		setTimeout(function() {
			$(".order-content").removeClass("zoomout");
			$(".bourbon-order").removeClass("zoomsappear");
			$(".bourbon-order").addClass("hide");
			$(".order-left-main").html("Loading...");
			$("body").css("overflow","auto");
		},200);
	});
	$(".fa-shopping-cart").click(function() {
		$currentUser = "<?php echo $current_username; ?>";
		$currentcountry = "<?php echo $current_country; ?>";
		if ($currentUser.length > 0) {
			if($currentUser !="BourBon Service") {
			$(".order-right").addClass("hide");
			$(".order-signed").removeClass("hide");
			$(".order-admin").addClass("hide");
			} else {
			$(".order-right").addClass("hide");
			$(".order-signed").addClass("hide");
			$(".order-admin").removeClass("hide");
				
			}
			
		} else {
			$(".order-right").removeClass("hide");
			$(".order-signed").addClass("hide");
			$(".order-admin").addClass("hide");
		}
		$count = $(this).parent().prev().prev().text();
		$itemID = $(this).attr("itemid");
		$(".bourbon-order").removeClass("hide");
		$("body").css("overflow","hidden");
		
		 $.ajax({ 
                url: 'bourbon order.php', 
				type: 'post',
				data: {'counter': $count, 'itemid': $itemID},
				success: function(response){
					$(".order-left-main").html(response);
				}
		 });
	});
	$(".purchase2").click(function() {
		$(".openChat")[0].click();
	});
	$(".purchase").click(function() {
		
		$name = $(".username");
		$pass = $(".pass");
		$email = $(".email");
		$country = $(".country");
		$region = $(".region");
		$city = $(".city");
		$street = $(".street");
		$count = $(".cart-num").text();
		$itemid = $(".order-cart").attr("itemid");
		$method = $(".order-cart").attr("method");
		$(".form div input").each(function() {
	    if($(this).val()) {
			$(this).next().addClass("hide");
		} else {
			$(this).next().removeClass("hide");
			$(this).focus();
		}
		});
		$emailaddress = $email;
         $e = false;   
                   /*Check if email is in the right format*/
       if ($emailaddress.val().length > 0) {
           
           $emailcheck = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
           if ($emailaddress.val().match($emailcheck)) {
               $e = true;
               $emailaddress.next().addClass("hide");
			   $emailaddress.next().text("Please enter your email");
           } else {
               $emailaddress.next().removeClass("hide");
               $emailaddress.next().text("Please enter a proper email address e.g example@gmail.com");
               $e = false;
           }
	   }
		$inputlength = $(".form div input").length;
		if ($name.val() && $pass.val() && $email.val() && $country.val() && $region.val() && $city.val() && $street.val() && $e == true) {
			$(".form").removeClass("active");
			 $.ajax({ 
                url: 'add order.php', 
				type: 'post',
				data: {'count': $count, 'itemid': $itemid, 'country': $country.val(), 'region': $region.val(), 'city': $city.val(), 'street': $street.val(), 'name': $name.val(), 'email': $email.val(), 'method': $method, 'pass': $pass.val()},
				success: function(response){
					$(".openChat")[0].click();
					$(".close-order").click();
					location.reload();
				}
		 });
		} else {
			$(".form").addClass("active");
		}
	});
</script>
	</body>
</html>
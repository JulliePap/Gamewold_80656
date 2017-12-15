<!DOCTYPE html>

<?php
require 'assets/php/functions.php';
?>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Studio">
	<link rel="stylesheet" type="text/css" href="css/style-index.css">
	<title>Studio</title>
</head>
<body>
	<header>
			<div class='items'>
	            <ul>
	  				<li><a class="active" href="index.php">Home</a></li>
	  				<li><a href="contact.php">Contact</a></li>
	  				<li><a href="about.php">About</a></li>
	  				<li><a href="shop.php?catid=0">Webshop</a></li>
	  				<div id='car"tSize'><li><a href="checkout.php">Cart (<?php echo sizeof($_SESSION['shoppinglist']); ?>)</a></li></div>
				</ul>
			</div>
			<div class='info'>
				<ul>
					<li><a href='login.php'>Login</a></li>
	  				<li><a href="logout.php">Logout</a></li>
				</ul>
			</div>
	</header>
	<div id= "main-textbox">
		<nav>
			<img src="./images/banner.jpg" alt="welcome" height="300" width="1000">
		</nav>
		<div class= "welcome">
			<a>Welcome,</a>
			<p>to Studio gaming webshop.</p>
			<a href="about.php"><img src="./images/oof.png"></li></a>
			<div class="clickable-img"><p><-- Clickable img</p></div>
		</div>
	</div>

	<div id= "main-container">
		<a href="shop.php?catid=1" class="pc">
			<p>PC</p>	
		</a>

		<a href="shop.php?catid=2" class="ps4">
			<p>PS4</p>	
		</a>

		<a href="shop.php?catid=3" class="xbox">
			<p>Xbox</p>	
		</a>		
	</div>
	<div id="footer">
		<footer>
    		<p>Made by: Tim van Bree © 2017</p>
		</footer>
</body>
</html>
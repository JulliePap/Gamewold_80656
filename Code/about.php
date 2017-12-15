<!DOCTYPE html>

<?php
require 'assets/php/functions.php';
?>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Studio">
	<link rel="stylesheet" type="text/css" href="css/style-about.css">
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
	  				<div id='cartSize'><li><a href="checkout.php">Cart (<?php echo sizeof($_SESSION['shoppinglist']); ?>)</a></li></div>
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
		<div class= "contact">
			<a>About</a>
			<p>DUMMY TEXT DUMMY TEXT DUMMY TEXT DUMMY TEXT DUMMY TEXT DUMMY TEXT DUMMY TEXT DUMMY TEXT DUMMY TEXT DUMMY TEXT DUMMY TEXT DUMMY TEXT DUMMY TEXT DUMMY TEXT DUMMY TEXT DUMMY TEXT DUMMY TEXT DUMMY TEXT DUMMY TEXT DUMMY TEXT DUMMY TEXT DUMMY TEXT DUMMY TEXT DUMMY TEXT DUMMY TEXT DUMMY TEXT DUMMY TEXT DUMMY TEXT DUMMY TEXT DUMMY TEXT DUMMY TEXT DUMMY TEXT DUMMY TEXT DUMMY TEXT DUMMY TEXT DUMMY TEXT DUMMY TEXT DUMMY TEXT DUMMY TEXT DUMMY TEXT DUMMY TEXT DUMMY TEXT DUMMY TEXT DUMMY TEXT DUMMY TEXT DUMMY TEXT DUMMY TEXT DUMMY TEXT DUMMY TEXT DUMMY TEXT DUMMY TEXT DUMMY IMAGES DUMMY IMAGES DUMMY IMAGES DUMMY IMAGES DUMMY IMAGES DUMMY IMAGES DUMMY IMAGES DUMMY IMAGES DUMMY IMAGES DUMMY IMAGES DUMMY IMAGES DUMMY IMAGES DUMMY IMAGES DUMMY IMAGES DUMMY IMAGES DUMMY IMAGES DUMMY IMAGES DUMMY IMAGES DUMMY IMAGES DUMMY IMAGES DUMMY IMAGES DUMMY IMAGES DUMMY IMAGES DUMMY IMAGES</p>
		</div>
		<div class="images">
			<img src="./images/mesh.jpg">
			<img src="./images/oof.png">
			<img src="./images/steep.jpg">
			<img src="./images/destiny.jpg">
		</div>
	</div>
	<div id="footer">
		<footer>
    		<p>Made by: Tim van Bree © 2017</p>
		</footer>
	</div>
</body>
</html>
<!DOCTYPE html>

<?php
require 'assets/php/functions.php';
?>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Studio">
	<link rel="stylesheet" type="text/css" href="css/style-contact.css">
	<title>Studio</title>
</head>
<body>
	<header>
			<div class='items'>
	            <ul>
	  				<li><a class="active" href="index.php">Home</a></li>
	  				<li><a href="contact.php">Contact</a></li>
	  				<li><a href="#about">About</a></li>
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
			<a>Contact</a>
		</div>
	</div>

	<form class="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
  <p class="name">
 		<p class="name">
  		    <input type="Name" name="Name" id="Name" placeholder="Name" />
  		</p>
  		<p class="email">
  		    <input type="E-mail" name="E-mail" id="E-mail" placeholder="E-mail" />
  		</p>
  		<p class="issue">
  		    <input type="Issue" name="Issue" id="Issue" placeholder="Issue" />
  		</p>
  		<p class="submit">
  		    <input type="submit" name='login' value="Send" />
  		</p>
  	</form>

	<div id="footer">
		<footer>
    		<p>Made by: Tim van Bree © 2017</p>
		</footer>
	</div>
</body>
</html>
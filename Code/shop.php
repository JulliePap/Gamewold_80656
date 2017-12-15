<?php
require 'assets/php/functions.php';


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Studio">
	<link rel="stylesheet" type="text/css" href="css/style-shop.css">
	<title>Studio</title>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>

	<script type="text/javascript">

    function AddToCart(el) {
        var id = $(el).attr('id'); // Gets the atribute ID, in this casr the game ID.
		var ShoppingList = <?php echo json_encode($_SESSION['shoppinglist']); ?>;
		// Makes a connection to our ajax.php file where we will add the game id to the session variable
		$.ajax({
			type: 'post', // Type = post
			data: {shoppinglist: id}, // Given variable
			url: "assets/php/ajax.php", // Link to your ajax file
			success: function(result){
				$(el).html("Added");
				GetCartSize(); // Get current cart size so its up to date :D
				setTimeout(function(){
					$(el).html("Add to cart");
				}, 2000);
		}});
    };

	function GetCartSize() {
		$.ajax({
			type: 'post', // Type = post
			data: {getcartsize: ' '}, // Given variable
			url: "assets/php/ajax.php", // Link to your ajax file
			success: function(result){
				$("#cartSize").html("<li><a href='checkout.php'>Cart (" + result + ")</a></li>"); // Update current cart size.
		}});
    };
	</script>
</head>
<body>

	<header>
		<nav id="main-nav">
            <ul>
  				<li><a class="active" href="index.php">Home</a></li>
  				<li><a href="contact.php">Contact</a></li>
  				<li><a href="about.php">About</a></li>
  				<li><a href="shop.php?catid=0">Webshop</a></li>
  				<div id='cartSize'><li><a href="checkout.php">Cart (<?php echo sizeof($_SESSION['shoppinglist']); ?>)</a></li></div>
			</ul>
        </nav>	</div>
	</header>
	<?php
	if(isset($_GET["catid"]))
	{
		$catid = $_GET["catid"];	
		if($catid == 1) {
			$txt = "PC";
			$colorClass = "grey";		
		}
		else if($catid == 2) {
			$txt = "PS4";	
			$colorClass = "blue";		
		}
		else if($catid == 3) {
			$txt = "Xbox";
			$colorClass = "green";		
		}
		else {
			$txt = "All Games";
			$colorClass = "yellow";		
		}
	}
	?>
	<div class="platform-banner <?php echo $colorClass; ?>">
		<?php
		echo $txt;
		?>
	</div>


	<div id= "main-container">
	<?php 
	/*
	echo "<pre>";
	var_dump(GetTotalGamesPlatform($_GET["catid"]));
	echo "</pre>";
	*/	
	for ($i=0; $i < GetTotalGamesPlatform($_GET["catid"]); $i++) {
		
		if (GetTotalGamesPlatform($_GET["catid"] % 3 == 0)) {
			$className = " lastitem";
		} else {
			$className = "";
		}
		?>
		<div class="blue-box<?php echo $className; ?>">
			<div class="name"><?php echo GetAllGameInfoPlatform($_GET['catid'], 'game_name', $i); ?></div>
			<img src="./images/games/<?php echo GetAllGameInfoPlatform($_GET['catid'], 'image', $i) ?>.jpg">
			<div class="price">€<?php echo GetAllGameInfoPlatform($_GET['catid'], 'price', $i) ?></div>
			<div class="button-buy" OnClick="AddToCart(this)" id="<?php echo GetAllGameInfoPlatform($_GET['catid'], 'game_id', $i); ?>">
				<label style="font-size: 15px;">Add to cart</label>
			</div>
			<span title="hoverwords"><?php echo GetAllGameInfoPlatform($_GET['catid'], 'description', $i)?></span>
		</div>
	<?php
	}
	?>
	</div>
</body>
</html>
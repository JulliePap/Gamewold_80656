<!DOCTYPE html>
<?php
require('assets/php/functions.php');
$shoppinglist = $_SESSION['shoppinglist'];

?>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="description" content="checkout">
	<link rel="stylesheet" type="text/css" href="css/style-checkout.css">
	<title>Checkout</title>
<body>
	<header>
			<div class='items'>
	            <ul>
	  				<li><a class="active" href="index.php">Home</a></li>
	  				<li><a href="#contact">Contact</a></li>
	  				<li><a href="#about">About</a></li>
	  				<li><a href="shop.php?catid=0">Webshop</a></li>
				</ul>
			</div>
			<div class='info'>
				<ul>
					<li><a href='login.php'>Login</a></li>
	  				<li><a href="logout.php">Logout</a></li>
				</ul>
			</div>
	</header>

	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>

	<script type="text/javascript">

    function RemoveFromCart(el) {
        var id = $(el).attr('id'); // Gets the atribute ID, in this casr the game ID.
		alert(id);
		$.ajax({
			type: 'post', // Type = post
			data: {removefromcart: id}, // Given variable
			url: "assets/php/ajax.php", // Link to your ajax file
			success: function(result){
		}});
    };
	</script>
</head>
<table id="table-checkout">
	<thead>
		<th>Image</th>
		<th>Game</th>
		<th>Platform</th>
		<th>Price</th>
		<th>Remove</th>
	</thead>
<tbody>
	<?php
	if(!isset($shoppinglist[0])){
		echo "<tr>Your cart is empty</tr>";		
	}
	$totalPrice = 0;
	foreach ($shoppinglist as $key => $value) {

	$totalPrice += GetGameInfo($value, 'price');
	?>

	<tr>
		<td><img style='width: 200px;' src="images/games/<?php echo GetGameInfo($value, 'image');?>.jpg"></td>
		<td><?php echo GetGameInfo($value, 'name'); ?></td>
		<td><?php echo GetGameInfo($value, 'platform'); ?></td>
		<td>&euro; <?php echo GetGameInfo($value, 'price'); ?></td>
		<td OnClick='RemoveFromCart(this)' id='<?php echo $value; ?>'>Remove</td>
	</tr>
	<?php }	
	?>
</tbody>
<tfoot>
	<tr>
		<td colspan="4">&euro; <?php echo $totalPrice; ?> - 
		<?php 
		if(isset($_SESSION['login'])) { 
			echo "<input type='submit' name='nextstep' value='Next Step'/>"; 
		}
		else { 
			echo "You have to log in before you can order something"; 
		} 
		?>			
		</td> 
	</tr>
</tfoot>
</table>
<body>

</body>
</html>
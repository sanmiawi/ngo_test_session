<?php
	include_once("cart.php");	
	$cart = new cart();
?>
<html>
<head></head>
<body>
	<?php if(isset($msg)){ echo $msg;} ?> 
	<div>
		<a href='view_cart.php' target='_self'>View Cart</a>&nbsp; &nbsp;<a href='empty_cart.php' target='_self'>Empty Cart</a>
	</div>
	<form action='process.php' method='post'>
		<label for='prod_id'>Product ID</label>
		<input type='text' max='3' name='prod_id' id='prod_id' />
		<br />
		<label for='prod_desc'>Product Description</label>
		<input type='text' name='prod_desc' id='prod_desc' />
		<br />
		<label for='qty'>Quantity</label>
		<input type='text' max='4' name='qty' id='qty' />
		<br />		
		<label for='price'>Price</label>
		<input type='text' max='3' name='price' id='price' />
		<br />
		<input type='submit' value='Add to cart' />
	</form>
</body>
</html>
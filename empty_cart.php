<?php
	include_once("cart.php");	
	$cart = new cart();

	$item = $cart->empty_cart();
	
	echo "<a href='view_cart.php' target='_self'>View Cart</a>";
?>
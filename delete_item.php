<?php
	include_once("cart.php");	
	$cart = new cart();

	$item = $cart->delete_item($_GET['id']);
	
	echo "<a href='view_cart.php' target='_self'>View Cart</a>";
?>
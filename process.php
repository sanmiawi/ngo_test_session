<?php
	include_once("cart.php");	
	$cart = new cart();

	$prod_id = $_POST['prod_id'];
	$prod_desc = $_POST['prod_desc'];
	$qty = $_POST['qty'];
	$price = $_POST['price'];
	
	if($prod_id !== ""){
		$cart->add_item($prod_id, $prod_desc, $qty, $price);
	}			
?>
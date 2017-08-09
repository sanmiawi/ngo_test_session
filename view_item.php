<?php
	include_once("cart.php");	
	$cart = new cart();

	$item = $cart->get_item($_GET['id']);
	
	if(count($item) > 0){
		echo "<table><thead><tr><th>Product Code</th><th>Description</th><th>Quantity</th><th>Price</th><th>Actions</th></tr></thead><tbody>";
		echo "<tr><td>" . $_GET['id'] . "</td><td>" . $item['prd_desc'] . "</td><td>" . $item['qty'] . "</td><td>" . $item['price'] . "</td><td><a href='delete_item.php?id=" . $_GET['id'] ."' target='_self'>Delete</a></td></tr>";
		echo "</tbody></table>";		
	}else{
		echo "0 items to display.";
	}	
	
	echo "<br />Click <a href='./' target='_self'>here</a> to go back.";		
?>
<?php
	include_once("cart.php");	
	$cart = new cart();

	$items = $cart->get_items();
	
	if(count($items) > 0){
		echo "<table><thead><tr><th>Product Code</th><th>Description</th><th>Quantity</th><th>Price</th><th>Actions</th></tr></thead><tbody>";		
		foreach($items as $ind=>$item){
			echo "<tr><td>" . $ind . "</td><td>" . $item['prd_desc'] . "</td><td>" . $item['qty'] . "</td><td>" . $item['price'] . "</td><td><a href='view_item.php?id=" . $ind ."' target='_self'>View</a>&nbsp;&nbsp;<a href='delete_item.php?id=" . $ind ."' target='_self'>Delete</a></td></tr>";
		}
		echo "</tbody></table>";			
	}else{
		echo "0 items to display.";
	}
	
	echo "<br />Click <a href='./' target='_self'>here</a> to go back.";		
?>
<?php
    if(!isset($_SESSION)){ 
        session_start(); 
    } 
	
	class cart{
	
		function add_item($prod_id, $prod_desc, $qty, $price){
			$_SESSION['cart'][$prod_id] = array('prd_desc' => $prod_desc, 'qty' => $qty, 'price' => $price);
			echo "Item successfully added. Click <a href='./' target='_self'>here</a> to go back.";
		}
		
		function get_item($id){
			if($id !== "" && isset($_SESSION['cart'])){
				// echo $_SESSION['cart'][$id];
				return $_SESSION['cart'][$id];
			}
		}	

		function get_items(){
			//echo $_SESSION['cart'];
			if(isset($_SESSION['cart'])){
				return $_SESSION['cart'];
			}
		}	
		
		function delete_item($id){
			if($id !== ""){
				unset($_SESSION['cart'][$id]);
				// unset($_SESSION['cart'][$prod_id]);
			}
		}	

		function empty_cart(){
			unset($_SESSION['cart']);
		}	
		
	}
?>
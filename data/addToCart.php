<?php 
require_once('../class/Cart.php');
if(isset($_POST['item_id'])){
	$item_id = $_POST['item_id'];
    $item_name = $_POST['item_name'];
	$item_quantity = $_POST['item_quantity'];
    $item_price = $_POST['item_price'];

	$saveCart = $cart->insertCart($item_id, $item_name, $item_quantity, $item_price);
	echo json_encode($saveCart);
}//end isset
$cart->Disconnect();
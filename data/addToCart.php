<?php 
require_once('../class/Cart.php');
if(isset($_POST['item_name'])){
    $item_name = $_POST['item_name'];
    $item_image = $_POST['item_image'];
	$item_quantity = $_POST['item_quantity'];
	$item_price = $_POST['item_price'];

	$saveCart = $cart->insertCart($item_name, $item_price, $item_image, $item_quantity);
	echo json_encode($saveCart);
}//end isset
$cart->Disconnect();
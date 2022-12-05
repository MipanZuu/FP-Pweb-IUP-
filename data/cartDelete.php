<?php 
require_once('../class/Cart.php');
if(isset($_POST['cart_id'])){
	$cart_id = $_POST['cart_id'];

	$result = $cart->deleteCart($cart_id);
	echo json_encode($result);
}//end isset

$cart->Disconnect();
<?php 
require_once('../class/Cart.php');
if(isset($_POST['cart_id'])){
	$cart_id = $_POST['cart_id'];
	$item_quantity = $_POST['item_quantity'];

	$saveCart = $cart->updateQuantity($cart_id, $item_quantity);
	if($saveCart){
        $return['valid'] = true;
        $return['msg'] = 'Update to cart Successfully!';
    } 
	echo json_encode($return);
}//end isset
$cart->Disconnect();
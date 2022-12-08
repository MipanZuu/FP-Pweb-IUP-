<?php 
require_once('../class/Cart.php');
if(isset($_POST['item_id'])){
	$item_id = $_POST['item_id'];
	$item_quantity = $_POST['item_quantity'];
	$item_name = $_POST['item_name'];
	$item_price = $_POST['item_price'];
	$item_image = $_POST['item_image'];

	$saveCart = $cart->insertCart($item_id, $item_quantity, $item_name, $item_price, $item_image);
	if($saveCart){
        $return['valid'] = true;
        $return['msg'] = 'Adding to cart Successfully!';
    } 
	echo json_encode($return);
}//end isset
$cart->Disconnect();
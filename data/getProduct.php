<?php 
require_once('../class/Product.php');
if(isset($_POST['item_id'])){
	$laun_id = $_POST['item_id'];

	$getProduct = $product->getProduct($item_id);
	echo json_encode($getProduct);	
}//end isset
$product->Disconnect();
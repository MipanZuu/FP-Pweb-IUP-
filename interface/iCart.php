<?php 
interface iCart{
	public function getAllCart();
    public function insertCart($item_id, $item_quantity, $item_name, $item_price, $item_image);
    public function updateQuantity($cart_id, $item_quantity);
}
<?php 
interface iCart{
	public function getAllCart();
    public function insertCart($cart_id, $item_name, $item_quantity, $item_price);
}
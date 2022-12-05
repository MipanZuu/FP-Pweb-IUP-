<?php 
interface iCart{
	public function getAllCart();
    public function insertCart($item_name, $item_price, $item_image, $item_quantity);
}
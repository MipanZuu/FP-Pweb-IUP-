<?php
    require_once('../database/Database.php');
    require_once('../interface/iCart.php');

    class Cart extends Database implements iCart {
        
    public function getAllcart()
    {
	$sql = "SELECT * FROM cart ORDER BY cart_id ASC";
	return $this->getRows($sql);
    }

    public function insertCart($item_name, $item_price, $item_image, $item_quantity)
	{
	$sql = "INSERT INTO laundry(item_name, item_price, item_image, item_quantity)
    VALUES(?,?,?,?);";
	return $this->insertRow($sql, [$item_name, $item_price, $item_image, $item_quantity]);
	}

    }
    $cart = new Cart();
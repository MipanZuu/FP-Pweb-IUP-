<?php
    require_once('../database/Database.php');
    require_once('../interface/iCart.php');

    class Cart extends Database implements iCart {
        
    public function getAllcart()
    {
	$sql = "SELECT * FROM cart ORDER BY cart_id ASC";
	return $this->getRows($sql);
    }

    public function insertCart($item_id, $item_quantity, $item_name, $item_price, $item_image)
	{
	$sql = "INSERT INTO cart(item_id, item_quantity, item_name, item_price, item_image)
    VALUES(?,?,?,?,?);";
	return $this->insertRow($sql, [$item_id, $item_quantity, $item_name, $item_price, $item_image]);
	}

    public function deleteCart($cart_id)
	{
		$sql = "DELETE FROM cart
				WHERE cart_id = ?";
		return $this->deleteRow($sql, [$cart_id]);
	}

    public function updateQuantity($cart_id, $item_quantity)
	{
		$sql = "UPDATE cart 
				SET item_quantity = ?
				WHERE cart_id = ?";
		return $this->updateRow($sql, [$item_quantity, $cart_id]);
	}


    }
    $cart = new Cart();
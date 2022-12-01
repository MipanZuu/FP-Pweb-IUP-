<?php
    require_once('../database/Database.php');
    require_once('../interface/iProducts.php');

    class Products extends Database implements iProducts {
        public function getAllProducts()
        {
		$sql = "SELECT item_name, item_price, item_image
				FROM item
                WHERE item_code = ?";
		return $this->getRow($sql);
        }

    }
    $product = new Products();
<?php
    require_once('../database/Database.php');
    require_once('../interface/iProducts.php');

    class Products extends Database implements iProducts {
        public function getAllProducts()
        {
		$sql = "SELECT *
				FROM item
                WHERE item_code = ?";
		return $this->getRows($sql, []);
        }

    }

    $product = new Products();
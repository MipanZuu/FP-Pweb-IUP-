<?php
    require_once('../database/Database.php');
    require_once('../interface/iProducts.php');

    class Products extends Database implements iProducts {
        
        public function getAllProducts()
        {
		$sql = "SELECT * FROM item ORDER BY item_code ASC";
		return $this->getRows($sql);
        }

        public function getSingleProduct($item_id)
        {
		$sql = "SELECT * FROM item WHERE item_id = ?";
		return $this->getRows($sql, [$item_id]);
        }

    }
    $product = new Products();
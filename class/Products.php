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
		$sql = "SELECT * FROM item 
        WHERE item_id = ?
        ORDER BY item_id ASC";
		return $this->getRows($sql, [$item_id]);
        }

        public function getProduct($item_id)
	    {
		$sql = "SELECT *
				FROM item
				WHERE item_id = ?";
		return $this->getRow($sql, [$item_id]);
	    }

    }
    $product = new Products();
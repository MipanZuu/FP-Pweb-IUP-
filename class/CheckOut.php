<?php
    require_once('../database/Database.php');
    require_once('../interface/icheckOut.php');

    class CheckOut extends Database implements icheckOut {
        
        public function insertCheckout($fname, $lname, $emailCheckout, $telephone, $billadd, $city, $postalcode, $country)
        {
            $sql = "INSERT INTO orders (firstName, lastName, email, phoneNum, address, city, postalCode, country) VALUES (?,?,?,?,?,?,?,?);";
            return $this->insertRow($sql, [$fname, $lname, $emailCheckout, $telephone, $billadd, $city, $postalcode, $country]);
        }
    }
    $checkout = new CheckOut();
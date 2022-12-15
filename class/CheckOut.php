<?php
    require_once('../database/Database.php');
    require_once('../interface/icheckOut.php');

    class CheckOut extends Database implements icheckOut {
        
        public function insertCheckout($user_id, $fname, $lname, $email, $phoneNumber, $userAddress, $city, $postalcode, $country, $total_Checkout)
        {
            $sql = "INSERT INTO orders(userID, firstName, lastName, emailCheckout, phoneNumber, userAddress, city, postalCode, country, totalPayment) VALUES (?,?,?,?,?,?,?,?,?,?);";
            return $this->insertRow($sql, [$user_id, $fname, $lname, $email, $phoneNumber, $userAddress, $city, $postalcode, $country, $total_Checkout]);
        }
    }
    $checkout = new CheckOut();
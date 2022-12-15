<?php 
interface icheckOut{
	public function insertCheckout($user_id, $fname, $lname, $email, $phoneNumber, $userAddress, $city, $postalcode, $country, $total_Checkout);
}
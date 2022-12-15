<?php 
interface icheckOut{
	public function insertCheckout($fname, $lname, $email, $phoneNumber, $userAddress, $city, $postalcode, $country, $total_Checkout);
}
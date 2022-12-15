<?php 
interface icheckOut{
	public function insertCheckout($fname, $lname, $emailCheckout, $telephone, $billadd, $city, $postalcode, $country);
}
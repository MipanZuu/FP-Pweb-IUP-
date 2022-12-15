<?php
require_once('../class/CheckOut.php');

if(isset($_POST['fname'])){
    $fname = $_POST['fname'];
	$lname = $_POST['lname'];
    $emailCheckout = $_POST['emailCheckout'];
	$telephone = $_POST['telephone'];
    $billadd = $_POST['billadd'];
    $city = $_POST['city'];
    $postalcode = $_POST['postalcode'];
    $country = $_POST['country'];

    $fname = strtolower($fname);
	$fname = ucwords($fname);
    
    $saveCheckout = $checkout->insertCheckout($fname, $lname, $emailCheckout, $telephone, $billadd, $city, $postalcode, $country);
	// echo($saveCheckout);
    if($saveCheckout){
        $return['valid'] = true;
        $return['msg'] = 'Checkout Successfully!';
    }
    echo json_encode($return);
}
$checkout->Disconnect();
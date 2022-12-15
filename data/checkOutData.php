<?php
require_once('../class/CheckOut.php');
require_once('../class/Cart.php');
require_once('../class/User.php');

if(isset($_POST['firstName']) && isset($_POST['emailCheckout'])){
    $fname = $_POST['firstName'];
	$lname = $_POST['lname'];
    $emailCheckout = $_POST['emailCheckout'];
	$telephone = $_POST['telephone'];
    $billadd = $_POST['billadd'];
    $city = $_POST['city'];
    $postalcode = $_POST['postalcode'];
    $country = $_POST['country'];

    
    $carts = $cart->getAllCart();
    $user_id = $_SESSION['user_logged'];

    $total_Ceckout = 0;
    foreach($carts as $c){
        $total_price = $c['item_price'] * $c['item_quantity'];
        $total_Checkout += $total_price;
    
    }

    $fname = strtolower($fname);
	$fname = ucwords($fname);
    
    $saveCheckout = $checkout->insertCheckout($user_id, $fname, $lname, $emailCheckout, $telephone, $billadd, $city, $postalcode, $country, $total_Checkout);
	// echo($saveCheckout);
    if($saveCheckout){
        $return['valid'] = true;
        $return['msg'] = 'Checkout Successfully!';
    }
    echo json_encode($return);
}
$checkout->Disconnect();
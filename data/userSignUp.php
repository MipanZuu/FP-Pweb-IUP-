<?php
require_once('../class/User.php');

if(isset($_POST['em']) && ($_POST['un']) && isset($_POST['pw']) ){
    $email = $_POST['em'];
	$username = $_POST['un'];
	$password = $_POST['pw'];
	$password = md5($password);
    
    $checkUser = $user->getUser($username, $email);

    if ($checkUser) {
        echo("Username/Email Already Exist!");
    }
    else {
	$saveUser = $user->signUp($email, $username, $password);
	if($saveUser){
        $return['valid'] = true;
        $return['url'] = "index.php";
        $return['msg'] = 'Signup Successfully!';
    }      
    echo json_encode($return);
}
}

$user->Disconnect();
<?php 
require_once('../class/User.php');
if(isset($_POST['pwd']) && isset($_POST['username'])){
	$username = $_POST['username'];
	$pwd =$_POST['pwd'];
	$pwd = md5($pwd);

	$res = $user->change_pass($pwd, $username);
	$return['valid'] = false;
	if($res){
		$return['valid'] = true;
		$return['url'] = "index.php";
		$return['msg'] = 'Password Change Successfully!';
	}
	echo json_encode($return);

}//end isset
$user->Disconnect();
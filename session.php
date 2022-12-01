<?php 
require_once('database/Database.php');
$session = new Database();

if(!isset($_SESSION['user_logged'])){
	$session->Disconnect();
	header('location: index.php');
}
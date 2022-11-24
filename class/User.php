<?php
require_once('../database/Database.php');
require_once('../interface/iUser.php');
class User extends Database implements iUser {

	public function login($username, $password)
	{
		$sql = "SELECT * 
				FROM users
				WHERE UserName = ?
				AND UserPassword = ?
				LIMIT 1";
		return $this->getRow($sql, [$username, $password]);
	}//end login

	public function signUp($email, $username, $password)
	{
		$sql = "INSERT INTO users (UserEmail, UserName, UserPassword) VALUES (?,?,?);";
		return $this->insertRow($sql, [$email, $username, $password]);
	}//end SignUp

	public function change_pass($pass, $uid)
	{
		$sql = "UPDATE user 
				SET UserPassword = ?
				WHERE user_id = ?";
		return $this->updateRow($sql, [$pass, $uid]);
	}//end change_pass
}//end class
$user = new User();
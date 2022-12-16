<?php 
interface iUser{
	public function login($username, $password);
	public function signUp($email, $username, $password);
	public function change_pass($pwd, $uname);
	public function getUser($username, $UserEmail);
}//end iUser
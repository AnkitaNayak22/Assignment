<?php
interface iUser{
	public function register($fullname,$username,$number,$password);
	public function login($username, $password);
	public function change_pass($pwd, $uid);
}//end iUser

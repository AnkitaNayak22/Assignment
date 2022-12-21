<?php
require_once('../database/Database.php');
require_once('../interface/iUser.php');
class User extends Database implements iUser {
	public function register($fullname,$username,$number,$password){
		$sql = "INSERT INTO user(user_fullname,user_username,user_number,user_password)
				VALUES (?,?,?,?)";
		return $this->insertRow($sql, [$fullname,$username,$number,$password]);
		}//end register
	public function login($username, $password)
	{
		$sql = "SELECT *
				FROM user
				WHERE user_username = ?
					AND user_password = ?
				LIMIT 1";
		return $this->getRow($sql, [$username, $password]);
	}//end login

	public function change_pass($pwd, $uid)
	{
		$sql = "UPDATE user
				SET user_password = ?
				WHERE user_id = ?";
		return $this->updateRow($sql, [$pwd, $uid]);
	}//end change_pass
}//end class
$user = new User();
/* End of file User.php */
/* Location: .//D/xampp/htdocs/laundry/class/User.php */

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Model {

	function user_login($user)
	{
		$query = "INSERT INTO users (first_name, last_name, email, password, created_at) VALUES (?,?,?,?,?)";
		$values = array($user['first_name'], $user['last_name'], $user['email'], $user['password'], $user['created_at']);
		return $this->db->query($query, $values);
	}

}

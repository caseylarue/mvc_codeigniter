<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Model {


	function add_user($user)
	{
		$query = "INSERT INTO users (first_name, last_name, email, password, user_access, created_at) VALUES (?,?,?,?,?,?)";
		$values = array($user['first_name'], $user['last_name'], $user['email'], $user['password'], $user['access'], $user['created_at']);
		return $this->db->query($query, $values);
	}

	function get_all_users()
	{
		return $this->db->query("SELECT * FROM users ORDER BY id DESC")->result_array();
	}

	function get_user($email)
	{
		return $this->db->query("SELECT * FROM users WHERE email = ?", array($email))->row_array();
	}

}
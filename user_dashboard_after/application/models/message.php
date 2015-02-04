<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Message extends CI_Model {

	public function get_user_info($id)
	{
		return $this->db->query("SELECT * FROM users WHERE id=$id")->result_array();
	}

	public function post_message($data)
	{
		$query = "INSERT INTO messages (user_id_from, message, created_at, blog_id_to) VALUES (?,?,?,?)";
		$values = array($data['created_by_user_id'], $data['message'], $data['created_at'], $data['message_to_user_id']);
		return $this->db->query($query, $values);
	}

}
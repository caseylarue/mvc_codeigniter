<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Message extends CI_Model {

	public function get_user_info($id)
	{
		// return $this->db->query("SELECT * FROM users WHERE id=$id")->result_array();
		return $this->db->query("SELECT messages.user_id_profile as profile_id, messages.id as message_id, messages.message as message, messages.created_at as created_at, messages.message_from_id as message_author_id, users.first_name as first_name, users.last_name as last_name, users.email as email, users.description as description, users.created_at as joined_on, users2.first_name as message_from_first_name, users2.last_name as message_from_last_name FROM messages JOIN users ON users.id = messages.user_id_profile JOIN users AS users2 on users2.id = messages.message_from_id WHERE messages.user_id_profile = 1 ORDER BY messages.created_at DESC")->result_array();
	}

	public function post_message($data)
	{
		$query = "INSERT INTO messages (user_id_profile, message, created_at, message_from_id) VALUES (?,?,?,?)";
		$values = array($data['user_id_profile'], $data['message'], $data['created_at'], $data['message_from_id']);
		return $this->db->query($query, $values);
	}

	public function display_messages($id)
	{
		return $this->db-query("SELECT * FROM messages WHERE user_id_profile = ?", array($id))->row_array();
	}

	public function insert_comment($data)
	{
		$query = "INSERT INTO comments (message_id, comment_user_id, comment, created_at) VALUES (?,?,?,?)";
		$values = array($data['msg_id'], $data['comment_user_id'], $data['comment'], $data['created_at']);
		return $this->db->query($query, $values);
	}
}
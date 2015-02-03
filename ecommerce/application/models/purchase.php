<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Purchase extends CI_Model {

	public function add_to_cart($item)
	{
		$query = "INSERT INTO cart (product_id, qty, created_at) VALUES (?, ?, ?)";
		$values = array($item['product_id'], $item['qty'], date('Y-m-d h:i:s'));
		return $this->db->query($query, $values);
	}

	public function get_cart_qty()
	{
		return $this->db->query ("SELECT sum(qty) FROM cart")->result_array();
	}
}
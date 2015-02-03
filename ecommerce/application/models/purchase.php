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
		return $this->db->query("SELECT sum(qty) FROM cart")->result_array();
	}

	public function retrieve_cart()
	{
		return $this->db->query("SELECT products.id, products.description, SUM(cart.qty) as total_qty,  products.price * SUM(cart.qty) as total_amt FROM cart JOIN products ON products.id = cart.product_id GROUP BY products.description")->result_array();
	}

	public function delete_item($id)
	{
		return $this->db->query("DELETE FROM cart WHERE product_id=$id");
	}
}

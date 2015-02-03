<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler(TRUE);
	}

	public function index()
	{
		if(($this->session->userdata('cart')))
		{
			$this->session->set_userdata('cart', 0);
		}
		$this->load->view('index');
		// $this->show();
	}

	public function cart()
	{
		$item = $this->input->post();
		$item['date'] = date('Y-m-d h:i:s');
		$this->load->model('Purchase');
		$this->Purchase->add_to_cart($item);
		$this->show();

	}

	public function show()
	{
		$this->load->model('Purchase');
		$qty = $this->Purchase->get_cart_qty();
		$this->session->userdata('cart');
		$this->session->set_userdata('cart', $qty[0]['sum(qty)']);
		$this->load->view('index');
	}

	public function checkout()
	{
		$this->load->model('Purchase');
		$result = $this->Purchase->retrieve_cart();
		$cart['items'] = $result;
		$this->load->view('checkout', $cart);
	}

	public function delete_item($id)
	{
		
	}
}

//end of main controller-
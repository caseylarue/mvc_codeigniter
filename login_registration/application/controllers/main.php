<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler(TRUE);
	}

	public function index()
	{

		$this->load->view('index');
	}

	public function login()
	{
		$email = $this->input->post('email');
		$password = md5($this->input->post('password'));
		$this->load->model("Login");
		
		
	}

	public function registration()
	{
		$results = $this->input->post();
		
		$first_name = $results['first_name'];
		$last_name = $results['last_name'];
		$email = $results['email'];
		$password = $results['password'];
		$created_at = date('Y-m-d h:i:s');

		$user = array(
			"first_name" => $first_name,
			"last_name" => $last_name,
			"email" => $email,
			"password" => $password,
			"created_at" => $created_at
		);

		$this->load->model("Login");
		$this->Login->user_login($user);
	}
}

//end of main controller
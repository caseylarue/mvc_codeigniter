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
		// did not add md5 to password
		$password = $this->input->post('password');
		$this->load->model("Login");
		$login = $this->Login->get_user($email);
		if($login && $login['password'] == $password)
		{
			$user = array(
				'first_name' => $login['first_name'],
				'last_name' => $login['last_name'],
				'email' => $login['email'],
				'is_logged_in' => true
			);
			$this->session->set_userdata($user);
			redirect("/main/profile");
		}
		else
		 {
           $this->session->set_flashdata("login_error", "Invaild email or password!");
           redirect("/main/index");
          } 
	}

	public function profile() 
	{
		if($this->session->userdata('is_logged_in') === TRUE)
		{
			$this->load->view('welcome');
		}
		else
		{
			echo "hello";
		}
	}

	public function registration()
	{
		
		$this->load->library("form_validation");
		$this->form_validation->set_rules("first_name", "First Name", "required");
		$this->form_validation->set_rules("last_name", "Last Name", "required");
		$this->form_validation->set_rules("email", "Email", "required|valid_email|is_unique[users.email]");
		$this->form_validation->set_rules("password", "Password", "min_length[8]");
		$this->form_validation->set_rules("confirm_password", "Password Confirmation", "matches[confirm_password]");
		if($this->form_validation->run() ===  FALSE)
		{
			// echo "this this is not correct";
			$this->load->view('index');
		}
		else
		{
			// echo "this is correct";
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
				"created_at" => $created_at,
				'is_logged_in' => true
			);

			$this->load->model("Login");
			$this->Login->user_login($user);
			$this->session->set_userdata($user);
			redirect("/main/profile");
		}

	}

	public function log_off()
	{
		$this->session->sess_destroy();
		redirect("/main/index");
	}
}

//end of main controller
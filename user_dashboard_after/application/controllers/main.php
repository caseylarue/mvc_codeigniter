<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler();
	}

	public function index()
	{
		$this->load->view('index');
	}

	public function login()
	{
		$this->load->view('login');
	}

		public function dashboard()
	{
		$this->load->model('Login');
		$result = $this->Login->get_all_users();
		$data['users'] = $result;
		$this->load->view('dashboard', $data);
	}

	public function login_verify()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$this->load->model('Login');
		$login = $this->Login->get_user($email);
		if($login && $login['password'] == $password)
		{
			$this->session->set_userdata($login);
			redirect('/main/dashboard');
		}
		else
		{
			$this->session->set_flashdata('login_error', 'Invaild email or password!');
			redirect('/main/login');
		}
	}

	public function register()
	{
		$this->load->library("form_validation");
		$this->form_validation->set_rules("first_name", "First Name", "required");
		$this->form_validation->set_rules("last_name", "Last Name", "required");
		$this->form_validation->set_rules("email", "Email", "required|valid_email|is_unique[users.email]");
		$this->form_validation->set_rules("password", "Password", "min_length[8]");
		$this->form_validation->set_rules("confirm_password", "Password Confirmation", "matches[confirm_password]");
		if($this->form_validation->run() ===  FALSE)
		{
			$this->session->set_flashdata('validation_error',validation_errors());
			redirect('/main/login');
		}
		else
		{
			$results = $this->input->post();

			$first_name = $results['first_name'];
			$last_name = $results['last_name'];
			$email = $results['email'];
			$password = $results['password'];
			$created_at = date('Y-m-d h:i:s');
			$access = 'admin';

			$user = array(
				"first_name" => $first_name,
				"last_name" => $last_name,
				"email" => $email,
				"password" => $password,
				"created_at" => $created_at,
				"access" => $access,
				"is_logged_in" => true
			);
			$this->load->model("Login");
			$this->Login->add_user($user);
			$user['id'] = $this->db->insert_id();
			$this->session->set_userdata($user);  
			redirect('/main/dashboard');
		} //end of else stmt
	}  // end of register function

}  //end of main controller
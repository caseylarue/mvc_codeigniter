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
		// session destroy?
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

	public function profile()
	{
		echo "profile";
	}

	public function login_verify()
	{
		$results = $this->input->post();
		var_dump($results);
	}

	public function register()
	{
		$this->load->library("form_validation");
		$this->form_validation->set_rules("first_name", "First Name", "required");
		$this->form_validation->set_rules("last_name", "Last Name", "required");
		// $this->form_validation->set_rules("email", "Email", "required|valid_email|is_unique[users.email]");
		// $this->form_validation->set_rules("password", "Password", "min_length[8]");
		// $this->form_validation->set_rules("confirm_password", "Password Confirmation", "matches[confirm_password]");
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

			$user = array(
				"first_name" => $first_name,
				"last_name" => $last_name,
				"email" => $email,
				"password" => $password,
				"created_at" => $created_at,
				"is_logged_in" => true
			);

			$this->load->model("Login");
			$this->Login->add_blog($user);
			// $this->session->set_userdata($user);  // commented this out, may not work
			$this->add_user($user);
		}
	}

	public function add_user($user)
	{
		$user['blog_id'] = $this->db->insert_id();
		$user['access'] = 'admin';
		$this->load->model("Login");
		$this->Login->add_user($user);
		$user['id'] = $this->db->insert_id();
		$this->session->set_userdata($user);
		redirect('/main/dashboard');
	}

	// public function wall($id)
	// {
	// 	$this->load->view('wall');
	// }

}

//end of main controller
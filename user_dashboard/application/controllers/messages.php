<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Messages extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler();
	}

	public function wall($id)
	{
		$this->load->model('Message');
		$results = $this->Message->get_user_info($id);
		$info['profile'] = $results;
		$this->load->view('wall', $info); 

		// query to get user info(top header) and messages on load, make this a seprate function?
		// $this->load->model('Message');
		// $this->Message->get_messages($id);
	}

	public function post_msg()
	{
		$data = $this->input->post();
		$data['created_at'] = date('Y-m-d h:i:s');
		$this->load->model('Message');
		$this->Message->post_message($data);
	}

}

//end of main controller
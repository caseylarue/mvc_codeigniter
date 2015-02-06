<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Messages extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler();
	}

	public function wall($id)
	{
		// do one query  to get the user info and messages
		$this->load->model('Message');
		$results = $this->Message->get_user_info($id);
		$info['profile'] = $results;
		$this->load->view('wall', $info); 
	}

	public function post_msg()
	{
		$data = $this->input->post();
		$data['created_at'] = date('Y-m-d h:i:s');
		$this->load->model('Message');
		$this->Message->post_message($data);
		// echo $data['user_id_profile'];
		//////// #1  need to pass the profile id in the URL below
		redirect('/messages/wall/'.$data['user_id_profile']);
	}

}

//end of main controller
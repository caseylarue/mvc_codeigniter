<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Messages extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
	}

	public function wall($id)
	{
		// do one query  to get the user info and messages
		$this->load->model('Message');
		$messages = $this->Message->get_messages($id);
		$comments = $this->Message->get_comments($id);

		$this->load->view('wall', array('messages' => $messages, 
										  'comments' => $comments)); 
	}

	public function post_msg()
	{
		$data = $this->input->post();
		$data['created_at'] = date('Y-m-d h:i:s');
		$this->load->model('Message');
		$this->Message->post_message($data);
		redirect('/messages/wall/'.$data['user_id_profile']);
	}

	
	public function comments($id) 
	{
		$data = $this->input->post();
		$data['created_at'] = date('Y-m-d h:i:s');
		$this->load->model('Message');
		$this->Message->insert_comment($data);
		redirect("/messages/wall/".$id);
	}

}

//end of main controller
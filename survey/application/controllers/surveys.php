<?php

class Surveys extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler();
	}

	public function index()
	{
		$this->load->view('index');
	}


	public function process_form()
	{
		$info = $this->input->post();
		$this->session->set_userdata($info);
		redirect('/result');
	}

	public function result()
	{
		$results = $this->session->all_userdata();
		$this->load->view('results', $results);

		if($this->session->userdata('counter'))
		{
			$counter = $this->session->userdata('counter');
			$this->session->set_userdata('counter', $counter+1);
		}
		else
		{
			$this->session->set_userdata('counter', 1);
		}

		// $countdata = $this->session->userdata('counter');

	}


}
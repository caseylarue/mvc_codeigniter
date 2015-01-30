<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	// public function __construct()
	// {
	// 	parent::__construct();
	// 	$this->output->enable_profiler();
	// }

	public function index()
	{
		$counter=0;
		$rand_num=0;
		$this->load->view('index', array('counter' => $counter, 'rand_num' => $rand_num));	
	}

	public function random_gen()
	{

		if($this->session->userdata('counter'))
		{
			$counter = $this->session->userdata('counter');
			$this->session->set_userdata('counter', $counter+1);
		}
		else
		{
			$this->session->set_userdata('counter', 1);
		}

		$this->session->set_userdata('rand_num',substr(md5(rand()),0,14) );
		
		$results = $this->session->all_userdata();


		// redirect('/');

		$this->load->view('index', $results);
	}
}

//end of main controller
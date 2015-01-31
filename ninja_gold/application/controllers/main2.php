<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main2 extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler();
	}

	function index()
	{

		$this->session->set_userdata('activity', array());
	}


	function index2()
	{
		$activity = $this->session->userdata('activity');
		$activity[] = 'hi dojo';
		$this->session->set_userdata('activity', $activity);
		if( $this->session->userdata('activity') )
		{
			echo "<h1>came here</h1>";
		}
	}

	function index3()
	{
		
	}


}

//end of main controller
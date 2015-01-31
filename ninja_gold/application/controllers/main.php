<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler();	
	}

	public function index()
	{
		$total_gold = $this->session->set_userdata('total_gold', 0);
		$activity = $this->session->set_userdata('activity', array());
		$session = $this->session->all_userdata();
		$this->load->view('index', $session);
	}

	public function process_money()
	{				
		$results = $this->input->post();

		if(isset($results['farm']))
		{
			$rand_num = rand(10,20);
			$button = 'farm';
			$date = date('Y-m-d h:i:s');
			$gold=$this->session->userdata('total_gold');
			$this->session->set_userdata('total_gold', $gold+$rand_num);
			
			$activity=$this->session->userdata('activity');

			$x = array();
			$x['rand_num'] = $rand_num;
			$x['button'] = $button;
			$x['date'] = $date;
			$activity[] = $x;

			$this->session->set_userdata('activity', $activity);

			$session = $this->session->all_userdata();
			$this->load->view('index', $session);
		}

		if(isset($results['cave']))
		{
			$rand_num = rand(5,10);
			$button = 'cave';
			$date = date('Y-m-d h:i:s');
			$gold=$this->session->userdata('total_gold');
			$this->session->set_userdata('total_gold', $gold+$rand_num);
			
			$activity=$this->session->userdata('activity');

			$x = array();
			$x['rand_num'] = $rand_num;
			$x['button'] = $button;
			$x['date'] = $date;
			$activity[] = $x;

			$this->session->set_userdata('activity', $activity);

			$session = $this->session->all_userdata();
			$this->load->view('index', $session);
		}

		if(isset($results['house']))
		{
			$rand_num = rand(2,5);
			$button = 'house';
			$date = date('Y-m-d h:i:s');
			$gold=$this->session->userdata('total_gold');
			$this->session->set_userdata('total_gold', $gold+$rand_num);
			
			$activity=$this->session->userdata('activity');

			$x = array();
			$x['rand_num'] = $rand_num;
			$x['button'] = $button;
			$x['date'] = $date;
			$activity[] = $x;

			$this->session->set_userdata('activity', $activity);

			$session = $this->session->all_userdata();
			$this->load->view('index', $session);
		}

		if(isset($results['casino']))
		{
			$rand_num = rand(-50,50);
			$button = 'casino';
			$date = date('Y-m-d h:i:s');
			$gold=$this->session->userdata('total_gold');
			$this->session->set_userdata('total_gold', $gold+$rand_num);
			
			$activity=$this->session->userdata('activity');

			$x = array();
			$x['rand_num'] = $rand_num;
			$x['button'] = $button;
			$x['date'] = $date;
			$activity[] = $x;

			$this->session->set_userdata('activity', $activity);

			$session = $this->session->all_userdata();
			$this->load->view('index', $session);
		}
	}

}

//end of main controller
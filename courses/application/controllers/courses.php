<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Courses extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler(TRUE);
	}

	public function index()
	{
		$this->show();
	}

	public function add()
	{

		$results = $this->input->post();

		$name = $results['course'];
		$description = $results['description'];
		$date = date('Y-m-d h:i:s');
		$active = "y";

		$course_details = array(
			"name" => $name,
			"description" => $description,
			"created_at" => $date,
			"active" => $active
		);

		$this->load->model("Course");
		$this->Course->add_course($course_details);

		$this->show();
	}

	public function show()
	{
		
		$this->load->model("Course"); 
		$all_courses = $this->Course->get_all_courses();
		$data['courses'] = $all_courses;
		$this->load->view('index', $data);
	}

	public function destroy($id)
	{
		$this->load->model("Course");
		$this->Course->delete_course($id);
		$this->show();
	}

}

//end of main controller
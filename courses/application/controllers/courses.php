<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Courses extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler(TRUE);
	}

	public function index()
	{
		$this->load->view('index');
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

		// var_dump($course_details);
		// die();


		$this->load->model("Course");
		$this->Course->add_course($course_details);



		// validate that the course name is not full 
		// validate that the course name is at leaast 15 characters
		// add course to database via model
		// render the course data in the index page
	}


	public function destroy()
	{
		// delete course via the models
	}

}

//end of main controller
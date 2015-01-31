<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Courses extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler(TRUE);
	}

	public function index()
	{
		// $this->load->view('index');
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


		// validate that the course name is not full 
		// validate that the course name is at leaast 15 characters

		// add course to database via model
		// render the course data in the index page
	}

	public function show()
	{
		
		$this->load->model("Course"); 
		$all_courses = $this->Course->get_all_courses();
		$data['courses'] = $all_courses;
		// echo "<pre>";
		// var_dump($data[0]['name']);
		// echo "</pre>";




		// echo "<pre>";
		// var_dump($data[0]['name']);
		// echo "</pre>";

		// var_dump($data[0]);

		// $this->session->set_userdata('display', $data);


		// $display_data = $this->session->userdata('display');


		$this->load->view('index', $data);

		// put these in session?
		// redirect('index');

		

	}

	public function destroy()
	{
		// delete course via the models
	}

}

//end of main controller
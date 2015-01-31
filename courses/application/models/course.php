<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Course extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler(TRUE);
	}
	
	function add_course($course_details)
	{
		$query = "INSERT INTO courses (name, description, created_at, active) VALUES (?,?,?,?)";
		$values = array($course_details['name'], $course_details['description'], $course_details['created_at'], $course_details['active']);
		return $this->db->query($query, $values);
		echo "this is the model";
		var_dump($query);
	}


}

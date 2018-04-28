<?php 
class Course_Model extends CI_Model{
	public function __construct(){
		$this->load->database();
	}
	public function get_course(){
		$query=$this->db->select("*")
		->from('course')
		->where('course.createdby',$_SESSION['user_id'])->get();
		return $query->result_array();
	}

	public function insertCourse($value){
		$query = $this->db->insert('course', $value);
		
	}
	public function retrieve_course($id){
		$query=$this->db->select("*")
		->from('course')
		->where('course.id',$id)->get();
		return $query->row_array();
		
	}
	public function updateCourse($value){

	$this->db->where('course.id', $this->input->post('id'));
	$this->db->update('course', $value);
		
	}
	public function deleteCourse($value){

		$this->db->where('course.id', $value);
		$this->db->delete('course');
		
	}
}
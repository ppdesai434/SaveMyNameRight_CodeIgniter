<?php 
class Univ_Model extends CI_Model{
	public function __construct(){
		$this->load->database();
	}
	public function get_univ(){
		$query=$this->db->select("*")
		->from('university')
		->where('university.createdby',$_SESSION['user_id'])->get();
		return $query->result_array();
	}

	public function insertUniversity($value){
		$query = $this->db->insert('university', $value);
		
	}
	public function retrieve_univ($id){
		$query=$this->db->select("*")
		->from('university')
		->where('university.id',$id)->get();
		return $query->row_array();
		
	}
	public function updateUniversity($value){

	$this->db->where('university.id', $this->input->post('id'));
	$this->db->update('university', $value);
		
	}
	public function deleteUniversity($value){

		$this->db->where('university.id', $value);
		$this->db->delete('university');
		
	}
}
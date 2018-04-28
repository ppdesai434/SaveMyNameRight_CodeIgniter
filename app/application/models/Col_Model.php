<?php 
class Col_Model extends CI_Model{
	public function __construct(){
		$this->load->database();
	}
	public function get_col(){
		$query=$this->db->select("*")
		->from('college')
		->where('college.createdby',$_SESSION['user_id'])->get();
		return $query->result_array();
	}

	public function insertCollege($value){
		$query = $this->db->insert('college', $value);
		
	}
	public function retrieve_col($id){
		$query=$this->db->select("*")
		->from('college')
		->where('college.id',$id)->get();
		return $query->row_array();
		
	}
	public function updateCollege($value){

	$this->db->where('college.id', $this->input->post('id'));
	$this->db->update('college', $value);
		
	}
	public function deleteCollege($value){

		$this->db->where('college.id', $value);
		$this->db->delete('college');
		
	}
}
<?php  
class Conf_Model extends CI_Model{
	public function __construct(){
		$this->load->database();
	}

	public function get_conf(){
		$query=$this->db->get('conference');
		return $query->result_array();
	}
	public function insertConference($value){
		$query = $this->db->insert('conference', $value);
		
	}
	public function retrieve_conf($id){
		$query=$this->db->select("*")
		->from('conference')
		->where('conference.id',$id)->get();
		return $query->row_array();
		
	}
	public function updateConference($value){

		$query = $this->db->update('conference', $value);
		
	}
	public function deleteConference($value){

		$this->db->where('conference.id', $value);
		$this->db->delete('conference');
		
	}
}
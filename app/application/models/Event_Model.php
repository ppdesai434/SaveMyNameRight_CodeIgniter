<?php 
class Event_Model extends CI_Model{
	public function __construct(){
		$this->load->database();
	}

	public function get_event(){
		$query=$this->db->select("*")
		->from('event')
		->where('event.createdby',$_SESSION['user_id'])->get();
		return $query->result_array();
	}
	public function insertEvent($value){
		$query = $this->db->insert('event', $value);
		
	}
	public function retrieve_event($id){
		$query=$this->db->select("*")
		->from('event')
		->where('event.id',$id)->get();
		return $query->row_array();
		
	}
	public function updateEvent($value){

		$this->db->where('event.id', $this->input->post('id'));
		$this->db->update('event', $value);
		
	}
	public function deleteEvent($value){

		$this->db->where('event.id', $value);
		$this->db->delete('event');
		
	}
}
?>
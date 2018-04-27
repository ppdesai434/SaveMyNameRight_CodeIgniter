<?php 
class Org_Model extends CI_Model{
	public function __construct(){
		$this->load->database();
	}

	public function get_org(){
		$query=$this->db->select("*")
		->from('organization')
		->where('organization.createdby',$_SESSION['user_id'])->get();
		return $query->result_array();
	}
	public function insertOrganization($value){
		$query = $this->db->insert('organization', $value);
		
	}
	public function retrieve_org($id){
		$query=$this->db->select("*")
		->from('organization')
		->where('organization.id',$id)->get();
		return $query->row_array();
		
	}
	public function updateOrganization($value){

	$this->db->where('organization.id', $this->input->post('id'));
	$this->db->update('organization', $value);
		
	}
	public function deleteOrganization($value){

		$this->db->where('organization.id', $value);
		$this->db->delete('organization');
		
	}
}
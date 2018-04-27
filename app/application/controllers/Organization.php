<?php
class Organization extends CI_Controller {
	
	public function myorganization(){
	
	
	$data['org']= $this->org_model->get_org();
	$data['message']='';
	$data['title']='My Organization';
	$this->load->view('header',$data);
	$this->load->view('organization/myOrganizations', $data);
	$this->load->view('footer');
	}

	public function neworganization(){
	
	$this->load->library('form_validation');
// set validation rules

		$this->form_validation->set_rules('name', 'Name', 'callback_customNameValidation');
		$this->form_validation->set_message('customNameValidation','Name is not valid!');
		$this->form_validation->set_rules('noofpeople', 'No. of People', 'numeric');
		$this->form_validation->set_rules('address', 'Address', 'trim|required');
		$this->form_validation->set_rules('city', 'City', 'trim|required');
		$this->form_validation->set_rules('zip', 'Zip', 'alpha_numeric');
		
		if ($this->form_validation->run() === false) {
			$data['org']='';
			
			// validation not ok, send validation errors to the view
			
			$data['title']='Create Organization';
			$this->load->view('header',$data);
			$this->load->view('organization/newOrganization',$data);
			$this->load->view('footer');
			
		} 

		else {
			
			$value = array(
	            'name' => $this->input->post('name'),
	            'description' => $this->input->post('desc'),
	            'noofpeople' => $this->input->post('noofpeople'),
	            'address'=> $this->input->post('address'),
	            'City' =>  $this->input->post('city'),
	            'State' => $this->input->post('state'),
	            'Country' => $this->input->post('country'),
	            'zip' => $this->input->post('zip'),
	            'createdby' => $this->input->post('createdby')
       		);
			
			if(empty( $this->input->post('id'))){
				
			$this->org_model->insertOrganization($value);
			$data['message']='Organization created!';
			}
			else{
			
			$this->org_model->updateOrganization($value);
			$data['message']='Organization updated!';
			}

			$data['org']= $this->org_model->get_org();
			
			$data['title']='My Organization';
			$this->load->view('header',$data);
			$this->load->view('organization/myOrganizations',$data);
			$this->load->view('footer');
	
		}
}
public function editorganization($id=null){
	
	
	$data['org']= $this->org_model->retrieve_org($id);
	
	$data['title']='Edit Organization';
	$this->load->view('header',$data);
	$this->load->view('organization/newOrganization', $data);
	$this->load->view('footer');
	}


public function deleteorganization($id=null){
	
	
	$this->org_model->deleteOrganization($id);
	$data['org']= $this->org_model->get_org();
	$data['message']='Organization Deleted!';
	$data['title']='My Organization';
	$this->load->view('header',$data);
	$this->load->view('organization/myOrganizations', $data);
	$this->load->view('footer');
	}

public function customNameValidation($str){
	if(!empty($this->input->post('name'))){
		  $length = strlen($this->input->post('name'));
		if( $length>4 ){
			return true;
		}
	}
	return false;
}
}
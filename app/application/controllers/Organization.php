<?php
class Organization extends CI_Controller {
	
	public function myorganization(){
	
	$data['title']='My Organization';
	$data['org']= $this->org_model->get_org();
	$data['message']='';
	$this->load->view('header');
	$this->load->view('organization/myOrganizations', $data);
	$this->load->view('footer');
	}

	public function neworganization(){
	
	$this->load->library('form_validation');
// set validation rules

		$this->form_validation->set_rules('name', 'Name', 'trim|required|alpha_numeric|min_length[4]');
		$this->form_validation->set_rules('noofpeople', 'No. of People', 'numeric');
		$this->form_validation->set_rules('address', 'Address', 'trim|required');
		$this->form_validation->set_rules('city', 'City', 'trim|required');
		$this->form_validation->set_rules('zip', 'Zip', 'alpha_numeric');
		if ($this->form_validation->run() === false) {
			$data['org']='';
			
			// validation not ok, send validation errors to the view
			
			$this->load->view('header');
			$this->load->view('organization/newOrganization',$data);
			$this->load->view('footer');
			
		} else {
			$error='in else';
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
			
			$value['id']=$this->input->post('id');
			print_r($value);
			$this->org_model->updateOrganization($value);
			$data['message']='Organization updated!';
		}
			$data['org']= $this->org_model->get_org();
			
			$this->load->view('header');
			$this->load->view('organization/myOrganizations',$data);
			$this->load->view('footer');
	
	}
}
public function editorganization($id=null){
	
	
	$data['org']= $this->org_model->retrieve_org($id);
	
	$this->load->view('header');
	$this->load->view('organization/newOrganization', $data);
	$this->load->view('footer');
	}


public function deleteorganization($id=null){
	
	
	$this->org_model->deleteOrganization($id);
	$data['org']= $this->org_model->get_org();
	$data['message']='Organization Deleted!';
	$this->load->view('header');
	$this->load->view('organization/myOrganizations', $data);
	$this->load->view('footer');
	}
}
<?php
class University extends CI_Controller {
	
	public function myuniversity(){
	
	
	$data['univ']= $this->univ_model->get_univ();
	$data['message']='';
	$data['title']='My Universities';
	$this->load->view('header',$data);
	$this->load->view('university/myUniversities', $data);
	$this->load->view('footer');
	}

	public function newuniversity(){
	
	$this->load->library('form_validation');
// set validation rules

		$this->form_validation->set_rules('name', 'Name', 'callback_customNameValidation');
		$this->form_validation->set_message('customNameValidation','Name is not valid!');
		$this->form_validation->set_rules('city', 'City', 'trim|required');
		$this->form_validation->set_rules('zip', 'Zip', 'alpha_numeric');
		
		if ($this->form_validation->run() === false) {
			$data['univ']='';
			
			// validation not ok, send validation errors to the view
			
			$data['title']='Create University';
			$this->load->view('header',$data);
			$this->load->view('university/newUniversity',$data);
			$this->load->view('footer');
			
		} 

		else {
			
			$value = array(
	            'name' => $this->input->post('name'),
	            'foundedIn' => $this->input->post('foundedIn'),
	            'city' =>  $this->input->post('city'),
	            'state' => $this->input->post('state'),
	            'country' => $this->input->post('country'),
	            'zip' => $this->input->post('zip'),
	            'createdby' => $this->input->post('createdby')
       		);
			
			if(empty( $this->input->post('id'))){
				
			$this->univ_model->insertUniversity($value);
			$data['message']='University created!';
			}
			else{
			
			$this->univ_model->updateUniversity($value);
			$data['message']='University updated!';
			}

			$data['univ']= $this->univ_model->get_univ();
			
			$data['title']='My University';
			$this->load->view('header',$data);
			$this->load->view('university/myUniversities',$data);
			$this->load->view('footer');
	
		}
}
public function edituniversity($id=null){
	
	
	$data['univ']= $this->univ_model->retrieve_univ($id);
	
	$data['title']='Edit University';
	$this->load->view('header',$data);
	$this->load->view('university/newUniversity', $data);
	$this->load->view('footer');
	}


public function deleteuniversity($id=null){
	
	
	$this->univ_model->deleteUniversity($id);
	$data['univ']= $this->univ_model->get_univ();
	$data['message']='University Deleted!';
	$data['title']='My University';
	$this->load->view('header',$data);
	$this->load->view('university/myUniversities', $data);
	$this->load->view('footer');
	}

public function customNameValidation($str){
	if(!empty($this->input->post('name'))){
		  $length = strlen($this->input->post('name'));
		if( $length>=2 ){
			return true;
		}
	}
	return false;
}
}
<?php
class College extends CI_Controller {
	
	public function mycollege(){
	
	
	$data['col']= $this->col_model->get_col();
	$data['message']='';
	$data['title']='My Colleges';
	$this->load->view('header',$data);
	$this->load->view('college/myColleges', $data);
	$this->load->view('footer');
	}

	public function newcollege(){
	
	$this->load->library('form_validation');
// set validation rules

		$this->form_validation->set_rules('name', 'Name', 'callback_customNameValidation');
		$this->form_validation->set_message('customNameValidation','Name is not valid!');
		$this->form_validation->set_rules('city', 'City', 'trim|required');
		$this->form_validation->set_rules('zip', 'Zip', 'alpha_numeric');
		
		if ($this->form_validation->run() === false) {
			$data['col']='';
			$data['univ']= $this->univ_model->get_univ();
			// validation not ok, send validation errors to the view
			
			$data['title']='Create College';
			$this->load->view('header',$data);
			$this->load->view('college/newCollege',$data);
			$this->load->view('footer');
			
		} 

		else {
			
			$value = array(
	            'name' => $this->input->post('name'),
	            'uid' => $this->input->post('university'),
	            'address' => $this->input->post('address'),
	            'city' =>  $this->input->post('city'),
	            'state' => $this->input->post('state'),
	            'country' => $this->input->post('country'),
	            'zip' => $this->input->post('zip'),
	            'createdby' => $this->input->post('createdby')
       		);
			
			if(empty( $this->input->post('id'))){
				
			$this->col_model->insertCollege($value);
			$data['message']='College created!';
			}
			else{
			
			$this->col_model->updateCollege($value);
			$data['message']='College updated!';
			}

			$data['col']= $this->col_model->get_col();
			
			$data['title']='My Colleges';
			$this->load->view('header',$data);
			$this->load->view('college/myColleges',$data);
			$this->load->view('footer');
	
		}
}
public function editcollege($id=null){
	
	
	$data['col']= $this->col_model->retrieve_col($id);
	$data['univ']= $this->univ_model->get_univ();
	$data['title']='Edit College';
	$this->load->view('header',$data);
	$this->load->view('college/newCollege', $data);
	$this->load->view('footer');
	}


public function deletecollege($id=null){
	
	
	$this->col_model->deleteCollege($id);
	$data['col']= $this->col_model->get_col();
	$data['message']='College Deleted!';
	$data['title']='My Colleges';
	$this->load->view('header',$data);
	$this->load->view('college/myColleges', $data);
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
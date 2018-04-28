<?php
class Conference extends CI_Controller {
	
	

	public function myconference(){
	
	$data['title']='My Conference';
	$data['conf']= $this->conf_model->get_conf();
	$data['message']='';
	$this->load->view('header',$data);
	$this->load->view('conference/myConferences',$data);
	$this->load->view('footer');
	}


	public function newconference(){		
	
	$this->load->library('form_validation');
// set validation rules

		$this->form_validation->set_rules('name', 'Name', 'callback_customNameValidation');
		$this->form_validation->set_message('customNameValidation','Name is not valid!');
		$this->form_validation->set_rules('address', 'Address', 'trim|required');
		$this->form_validation->set_rules('city', 'City', 'trim|required');
		$this->form_validation->set_rules('zip', 'Zip', 'alpha_numeric');
		if ($this->form_validation->run() === false) {
			$data['conf']='';
			
			// validation not ok, send validation errors to the view
			$data['title']='Create Conference';
			$this->load->view('header',$data);
			$this->load->view('conference/newConference',$data);
			$this->load->view('footer');
			
		} else {
			$error='in else';
			$value = array(
            
            'name' => $this->input->post('name'),
            'startdatetime' => $this->input->post('startdatetime'),
            'enddatetime' => $this->input->post('enddatetime'),
            'address'=> $this->input->post('address'),
            'City' =>  $this->input->post('city'),
            'State' => $this->input->post('state'),
            'Country' => $this->input->post('country'),
            'zip' => $this->input->post('zip'),
            'createdby' => $this->input->post('createdby')
        );
			
			if(empty( $this->input->post('id'))){
				
			$this->conf_model->insertConference($value);
			$data['message']='Conference created!';
		}
		else{
			
			$value['id']=$this->input->post('id');
			
			$this->conf_model->updateConference($value);
			$data['message']='Conference updated!';
		}
			$data['conf']= $this->conf_model->get_conf();
			$data['title']='My Conferences';
			$this->load->view('header',$data);
			$this->load->view('conference/myConferences',$data);
			$this->load->view('footer');
	
	}
}
public function editconference($id=null){
	
	
	$data['conf']= $this->conf_model->retrieve_conf($id);
	
	$data['title']='Edit Conference';
	$this->load->view('header',$data);
	$this->load->view('conference/newConference', $data);
	$this->load->view('footer');
	}

	public function deleteconference($id=null){
	
	$this->conf_model->deleteconference($id);
	$data['conf']= $this->conf_model->get_conf();
	$data['title']='My Conferences';
	$data['message']='Conference Deleted!';
	$this->load->view('header',$data);
	$this->load->view('conference/myConferences', $data);
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


?>
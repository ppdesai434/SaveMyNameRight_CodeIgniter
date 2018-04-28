<?php
class Event extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('event_model');
    }
	
	public function myevent(){
	
	$data['title']='My Event';
	$data['event']= $this->event_model->get_event();
	$data['message']='';
	$this->load->view('header');
	$this->load->view('event/myEvent', $data);
	$this->load->view('footer');
	}

	public function newEvent(){
	
	$this->load->library('form_validation');
// set validation rules

		$this->form_validation->set_rules('name', 'Name', 'callback_customNameValidation');
		$this->form_validation->set_rules('description', 'Description', 'trim|alpha_numeric|min_length[4]');
	
		$this->form_validation->set_rules('city', 'City', 'trim|required');
		$this->form_validation->set_rules('zip', 'Zip', 'alpha_numeric');
		if ($this->form_validation->run() === false) {
			$data['event']='';
			
			// validation not ok, send validation errors to the view
			$data['title']='Create Event';
			$this->load->view('header',$data);
			$this->load->view('event/newEvent',$data);
			$this->load->view('footer');
			
		} else {
			$error='in else';
			$value = array(
            
            'name' => $this->input->post('name'),
            'description' => $this->input->post('desc'),
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
				
			$this->event_model->insertEvent($value);
			$data['message']='Event created!';
		}
		else{
			
			$value['id']=$this->input->post('id');
			
			$this->event_model->updateEvent($value);
			$data['message']='Event updated!';
		}
			$data['event']= $this->event_model->get_event();
			$data['title']='My Organization';
			$this->load->view('header',$data);
			$this->load->view('event/myEvent',$data);
			$this->load->view('footer');
	
	}
}
public function editEvent($id=null){
	
	
	$data['event']= $this->event_model->retrieve_event($id);
	$data['title']='Edit Event';
	$this->load->view('header',$data);
	$this->load->view('event/newEvent', $data);
	$this->load->view('footer');
	}


public function deleteevent($id=null){
	
	
	$this->event_model->deleteEvent($id);
	$data['event']= $this->event_model->get_event();
	$data['message']='Event Deleted!';
	$data['title']='Delete Event';
	$this->load->view('header',$data);
	$this->load->view('event/myEvent', $data);
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
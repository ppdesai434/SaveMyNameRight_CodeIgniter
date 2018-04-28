<?php
class Course extends CI_Controller {
	
	public function mycourse(){
	
	
	$data['course']= $this->course_model->get_course();
	$data['message']='';
	$data['title']='My Courses';
	$this->load->view('header',$data);
	$this->load->view('course/myCourses', $data);
	$this->load->view('footer');
	}

	public function newcourse(){
	
	$this->load->library('form_validation');
// set validation rules

		$this->form_validation->set_rules('name', 'Name', 'callback_customNameValidation');
		$this->form_validation->set_message('customNameValidation','Name is not valid!');
		
		
		if ($this->form_validation->run() === false) {
			$data['course']='';
			$data['col']= $this->col_model->get_col();
			// validation not ok, send validation errors to the view
			
			$data['title']='Create Course';
			$this->load->view('header',$data);
			$this->load->view('course/newCourse',$data);
			$this->load->view('footer');
			
		} 

		else {
			
			$value = array(
	            'name' => $this->input->post('name'),
	            'cid' => $this->input->post('college'),
	            'profname' => $this->input->post('profname'),
	            'sem' =>  $this->input->post('sem'),
	            'year' => $this->input->post('year'),
	            'createdby' => $this->input->post('createdby')
       		);
			
			if(empty( $this->input->post('id'))){
				
			$this->course_model->insertCourse($value);
			$data['message']='Course created!';
			}
			else{
			
			$this->course_model->updateCourse($value);
			$data['message']='Course updated!';
			}

			$data['course']= $this->course_model->get_course();
			
			$data['title']='My Courses';
			$this->load->view('header',$data);
			$this->load->view('course/myCourses',$data);
			$this->load->view('footer');
	
		}
}
public function editcourse($id=null){
	
	
	$data['course']= $this->course_model->retrieve_course($id);
	$data['col']= $this->col_model->get_col();
	$data['title']='Edit Course';
	$this->load->view('header',$data);
	$this->load->view('course/newCourse', $data);
	$this->load->view('footer');
	}


public function deletecourse($id=null){
	
	
	$this->col_model->deleteCourse($id);
	$data['course']= $this->course_model->get_course();
	$data['message']='Course Deleted!';
	$data['title']='My Courses';
	$this->load->view('header',$data);
	$this->load->view('course/myCourses', $data);
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
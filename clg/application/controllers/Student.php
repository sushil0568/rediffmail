<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
	$this->load->model('Student_model');	
        date_default_timezone_set('Asia/kolkata');
    }
    
    public function add(){
        $data['title'] = 'Add Student';
        $this->load->view('student',$data);
    }
    
    public function ins_stu(){
        $data['title'] = 'Add Student';
        $res = $this->Student_model->insert();
        if($res ==TRUE){
            redirect(base_url().'index.php/Student/stu_list');
        }
    }
    
    public function Stu_list(){
        $data['title'] = 'Student List';
        $data['student'] = $this->Student_model->get_student_list();
        $this->load->view('student_list',$data);
    }
    
    public function stu_view($id){
        $data['title'] = 'Student View';
        $data['result'] = $this->Student_model->specfic_details($id);
//        print_r($data['result']);
        $this->load->view('student_view',$data);
    }
    
    public function stu_edit($id){
        $data['title'] = 'Student Edit';
        $data['st'] = $this->Student_model->specfic_details($id);
        $this->load->view('student_edit',$data);
    }
    
    public function update($id){
	
	if($_FILES["file_name"]['name']!=''){	
	$config['upload_path'] = './student_img/';   
	$config['allowed_types'] = 'gif|jpg|jpeg|png';
	$config['file_name'] = time().$_FILES["file_name"]['name'];        
	$new_name = $config['file_name'];  
	$this->load->library('upload', $config);
		if($this->upload->do_upload('file_name') == true)
		{	
			$data_img = array('img'=>$new_name);
			$student_result = $this->Student_model->update_student_img($data_img,$id);
		}
	}
		
		
		$data = array(
                        'enrollment_no'=>$this->input->post('enrollment_no'),
                        'year'=>$this->input->post('year'),
                        'course_name'=>$this->input->post('course'),
                        'fees'=>$this->input->post('fees'),
                        'year_of_programe'=>$this->input->post('poy'),
                        'councler_name'=>$this->input->post('counsellor'),
                        'full_name'=>$this->input->post('full_name'),
                        'email'=>$this->input->post('email'),
                        'contact'=>$this->input->post('contact_no'),
                        'gender'=>$this->input->post('gender'),                        
                        'category'=>$this->input->post('category'),
                        'relation'=>$this->input->post('relation'),
                        'fh_name'=>$this->input->post('fh_name'),
                        'mother_name'=>$this->input->post('mother_name'),
                        'dob'=>$this->input->post('dob'),
                        'nationality'=>$this->input->post('nationality'),                         
                        'exam'=>$this->input->post('exam'),
                        'passing_year'=>$this->input->post('passing_year'),
                        'payment_status'=>$this->input->post('payment_status')
                      );
        
		
		
        $student_result = $this->Student_model->update_student($data,$id);
        if($student_result == TRUE){
            redirect(base_url().'index.php/Student/stu_list');
        }
        
    }


    public function stu_del($id){
       $res = $this->Student_model->delete_student($id);
       if($res ==TRUE){
            redirect(base_url().'index.php/Student/stu_list');
        }
       
    }
}

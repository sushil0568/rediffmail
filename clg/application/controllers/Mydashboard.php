<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mydashboard extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
		
        $this->load->model('Dashboard_model'); 
        $this->load->model('Mydashboard_model');
        
        date_default_timezone_set('Asia/kolkata');
    }

    public function index()
    {
        $this->load->view('examples/login');
    }
    
    public function password(){
        $data['title'] = 'Password';
        $data['answer'] = '5';
        $this->load->view('pass',$data);
    }
    
    public function change_password(){
        $data['title'] = 'Password';
        $c = $this->session->userdata('logged_in');
        if($this->session->userdata('logged_in'))
        {       
            if($c['type']==1)
            {
               $tbl_name ='tbl_admin';
            }
            else{
                $tbl_name ='tbl_user';
            }
                $this->form_validation->set_rules('old','Old Password','required');
                $this->form_validation->set_rules('new','New Password','required');
                $this->form_validation->set_rules('confirm','Confirm Password','required|matches[new]');

                if($this->form_validation->run() == FALSE)
                {	 
//                   echo"1";
                    $data['answer'] = '2';
                    $this->load->view('pass',$data);
                
                }
                else
                {	
                        $old = $this->input->post('old');
                        $new = $this->input->post('new');

                        $result = $this->Dashboard_model->chk_old($old,$tbl_name,$c['id']);
                        
                        if($result == FALSE)
                        {
                            $data['answer'] = '0';
                            $this->load->view('pass',$data);
                            
                        }
                        else {
                                $new = $this->input->post('new');
                                $c = $this->session->userdata('logged_in');
                                $data1=array('password'=>$new);
                                $result1 = $this->Dashboard_model->Update_password($data1,$tbl_name,$c['id']);
                                $data['title'] = 'Admin Panel| Password';
                                $data['answer'] = '1';  
                                $this->load->view('pass',$data);
                                }
                }
                
                        //$this->load->view('pass',$data);

        }
    }
    
    public function dash()
    {
        $data['title'] = 'Dashboard';
        $session_data = $this->session->userdata('logged_in');
        
//        print_r($session_data);
        $data['personal'] = $this->Mydashboard_model->get_student($session_data['id']);
        $this->load->view('student_dashboard',$data);
    }
    
    public function my_profile(){
        $data['title'] = 'Update Profile';
        $data['st'] = $this->Mydashboard_model->specfic_details();
        $this->load->view('student_edit_profile',$data);
    }
    
    public function update(){
        $data['title'] = 'Update Profile';
        $student_result = $this->Mydashboard_model->update_student();
        if($student_result == TRUE){
            redirect(base_url().'index.php/Mydashboard/dash');
        }
    }
    
    public function fees(){
        $data['title'] = 'My Fees Records';
        $data['fees_res'] = $this->Mydashboard_model->fee_list();
        $this->load->view('student_fee_record',$data);
    }
    
    
}
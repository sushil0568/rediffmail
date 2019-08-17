<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
		
        $this->load->model('Dashboard_model');        
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
    
    public function my_dash()
    {
        $data['title'] = 'Dashboard';
        $data['personal'] = $this->Dashboard_model->get_admin();
        $data['student_list'] = $this->Dashboard_model->get_student_list();
        $data['company_list'] = $this->Dashboard_model->company_list();
//        print_r($data['personal']);
        $this->load->view('dashboard',$data);
    }
    
    
    
}
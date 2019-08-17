<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
		
        $this->load->model('Login_model');        
        date_default_timezone_set('Asia/kolkata');
    }

    public function index()
    {
        if($this->session->userdata('logged_in'))
		{
			//$this->dashboard();
                        redirect(base_url().'index.php/Dashboard/password');
		}
		else
		{	
			$this->load->view('login');
		}

    }
        
    public function validate_user()
    {
        $data = array();        		
        $email = $this->input->post('email');
        $password = $this->input->post('password'); 
//        exit();
        $this->form_validation->set_rules('email','Email','trim|required');
        $this->form_validation->set_rules('password','Password','trim|required');
        if($this->form_validation->run() == TRUE)
        { 
                $result = $this->Login_model->check_userdata($email,$password);
                if($result)
                {
                    $session_array = array();
                    
                    foreach($result as $row){
                        $session_array =  array('id' =>$row->id,
                                                'name'=>$row->full_name,
                                                'email'=>$row->email,
                                                'type'=>$row->type,
                                                'contact'=>$row->contact_no
                                                );
                    }
//                    print_r($sesion_array);
                    $x = $this->session->set_userdata('logged_in',$session_array);
                   
                    if($result[0]->type==1)
                    {
                    $data['title'] = 'Admin';                       
                    //$this->load->view('dashboard',$data);
                    redirect(base_url().'index.php/Dashboard/my_dash');
                    }else if($result[0]->type == 2){
                         $data['title'] = 'Student';   
                         redirect(base_url().'index.php/Mydashboard/dash');
                    }
                    
                }else{
                        echo '<div class="alert bg-danger col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4" role="alert">
                                <center>Please Check Username or Password</center>
				</div>';
                                
                     $this->load->view('login');
                }
                                
        }else{
            echo '<div class="alert bg-warning col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4" role="alert"><center>'. validation_errors().'</center>				
				</div>';
            $this->load->view('login');
           
        }
    }
    
    public function logout($type,$id)
    {	
            $data = array();
            $ip = $this->input->ip_address();
            //$date = date('d-m-Y h:i:s a');

            $data = array('ip_address'=>$ip);

            $this->Login_model->update_tbl($type,$id,$data);
            $sess_array = array();
            $sess_array = array('username' => '','id'=>'','email'=>'','type'=>'');
            $this->session->unset_userdata('logged_in', $sess_array);
            //$this->load->view('login',refresh);
            redirect(base_url().'index.php/Login');

    }

    
    
//    private function get_mail_body($data, $first_name, $gender)
//    {         
//        if ($gender == 'MALE'){
//            $mail_body="Dear Mr.".$first_name.',';
//        }elseif($gender == 'FEMALE'){
//             $mail_body="Dear Ms.".$first_name.',';            
//        }else{
//            $mail_body="Dear ".$first_name.',';
//        }
//        $extra_text = '';
//            $extra_text = 'a change of ';
//        $mail_body.= "<br/><br/>
//                You have requested for $extra_text Password.<br/><br/>
//                <strong>Your Password for TMS login is: </strong>".$data."<br/><br/>
//                If you have not made this request, please notify us immediately by forwarding this email to admin@biipmi.com <br/><br/>";
//        $mail_body .= FORGOT_PWD_MAIL_FOOTER;     
//        return $mail_body;
//    }
        
        
}

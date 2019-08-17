<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
		
        $this->load->model('Add_model');        
        date_default_timezone_set('Asia/kolkata');
    }

    public function index()
    {
        $data['title'] = 'Company';
        $tbl_name = 'tbl_place';
        $data['company'] = $this->Add_model->select_all($tbl_name); 
        $this->load->view('place',$data);
    }
    
    public function ins_placement(){
        if($this->input->post('name')!=''){
            $tbl_name = 'tbl_place';
            $data = array('name'=>$this->input->post('name'));
            $res = $this->Add_model->insert($tbl_name,$data);
            $this->index();
        }
    }
    
    public function del($id){
        $tbl_name = 'tbl_place';
        if($id!='')
        {
            $res = $this->Add_model->delete($tbl_name,$id);
        }
        if($res == TRUE){
            //$this->index();
            redirect(base_url().'index.php/Add');
        }
    }
    
    public function doc(){
        $data['title'] = 'Doc upload';
        $data['doc_res'] = $this->Add_model->select_all('tbl_download_doc');
//        print_r($data);
        $this->load->view('download',$data);
    }
    
    public function upload_doc(){
        $data['title'] = 'Doc upload';        
	$config['upload_path'] = './documents/';
       
	$config['allowed_types'] = 'gif|jpg|jpeg|png|doc';
	$config['file_name'] = time().$_FILES["file_name"]['name'];        
	$new_name = $config['file_name'];   
        
        $this->load->library('upload', $config);
					
        if($this->upload->do_upload('file_name') == true)
        {
                $tbl_name = 'tbl_download_doc';
                $data = array(
                                'doc_name' =>$this->input->post('doc_name'),
                                'file_name' => $new_name
                                );
                $res = $this->Add_model->insert($tbl_name,$data);
                if($res)
                {
                        redirect(base_url().'index.php/Add/doc');
                        //$result = $this->Exe_model->specific_data($tbl_name,$colmn_id,$update_id);

                }

        }
	
        
    }
    
    
    public function del_file($id){
        $tbl_name = 'tbl_download_doc';
        if($id!='')
        {
            $res = $this->Add_model->delete($tbl_name,$id);
        }
        if($res == TRUE){
            //$this->index();
            redirect(base_url().'index.php/Add/doc');
        }
    }
    
    public function news_board(){
        $data['title'] = 'News Board';
        $data['news'] = $this->Add_model->select_all('tbl_news');
        $this->load->view('news_board',$data);
    }
    
    public function news_ins(){
        $data = array('matter'=>$this->input->post('matter'));
        $tbl_name = 'tbl_news';
        $this->Add_model->insert($tbl_name,$data);
        redirect(base_url().'index.php/Add/news_board');
    }
    
    public function del_news($id){
        $tbl_name = 'tbl_news';
        
        if($id!='')
        {
            $res = $this->Add_model->delete($tbl_name,$id);
        }
        if($res == TRUE){
            //$this->index();
            redirect(base_url().'index.php/Add/news_board');
        }
    }
    public function carrer(){
        $data['title'] = 'Career';
        $this->load->view('career',$data);
    }
    
    public function ins_job(){
        $tbl_name = 'tbl_job';
        $data = array('heading' => $this->input->post('heading'),
                      'qualification'=>$this->input->post('qualification'),
                      'location'=>$this->input->post('location'),
                      'details'=>$this->input->post('description')
                      );
        $res = $this->Add_model->insert($tbl_name,$data);
        if($res == TRUE){
            redirect(base_url().'index.php/Add/view_jobs');
        }
    }
    
    public function view_jobs(){        
        $data['title'] = 'Job Posting List';
        $tbl_name = 'tbl_job';
        $data['job_res'] = $this->Add_model->select_all($tbl_name);
        $this->load->view('career_view',$data);
        
    }
    
    public function specific_record($id)
    {
        //$this->input->post('id');
        $data['title'] = 'Job Post Details';
        $tbl = 'tbl_job';
        
        $data['specific_res'] = $this->Add_model->specific_data($tbl,$id);
        $this->load->view('job_view',$data);
    }
    public function del_job($id){
        $tbl_name = 'tbl_job';
        
        if($id!='')
        {
            $res = $this->Add_model->delete($tbl_name,$id);
        }
        if($res == TRUE){
            //$this->index();
            redirect(base_url().'index.php/Add/view_jobs');
        }
    }
    
    public function fee(){
        $data['title'] = 'Fees Payment';
        $tbl_name = 'tbl_user';
        $data['stu_enroll'] = $this->Add_model->select_all($tbl_name);
        $this->load->view('fee',$data);
    }
    
    public function fee_submition(){
       $enrollment = $this->input->post('enrollment_no');
       $enroll = explode("#", $enrollment);
       $enrollment_no = $enroll[0];
        
        $user_id = $enroll[1];
        $amount = $this->input->post('amount');
        $data = array('user_id'=>$user_id,
                      'enrollment_no'=>$enrollment_no,
                       'amount' =>$amount,
                       'date' => date('d-m-Y'));
        $tbl_name = 'tbl_user_fee';
        if($enrollment_no!=''){
            $res = $this->Add_model->insert_fees($tbl_name,$data);
            if($res == TRUE){
                redirect(base_url().'index.php/Add/fee_list');
            }
        }
        
        
    }
    
    public function fee_list(){
        $data['title'] = 'Fees Submition List';
        $data['fees'] = $this->Add_model->get_fees_list();
//        print_r($data);
        $this->load->view('fees_list',$data);
        
    }
    
    public function fee_edit($id){
        $data['title'] = 'Fee Update';
        $tbl = 'tbl_user_fee';        
        $data['specific_res'] = $this->Add_model->specific_data($tbl,$id);
//        print_r($data);
        $this->load->view('fees_edit',$data);
        
    }
    
    public function update_fees(){
        $result_fees = $this->Add_model->update();
        if($result_fees == TRUE){
            redirect(base_url().'index.php/Add/fee_list');
        }
    }
    
    public function contact_list(){
        $data['title'] = 'Contact List';
        $tbl_name = 'tbl_contact';
        $data['contact_list'] = $this->Add_model->select_all($tbl_name);
        $this->load->view('contact_list',$data);
    }
    
    public function student_verify(){
        $data['title'] = 'Student Verification List';
        $tbl_name = 'tbl_student_verification';
        $data['verify_list'] = $this->Add_model->select_all($tbl_name);
        $this->load->view('verify_list',$data);
    }
    
}
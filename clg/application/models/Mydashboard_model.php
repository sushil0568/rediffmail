<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mydashboard_model extends CI_Model {
    
    public function __construct() {
        
        parent::__construct();        
            }
            
    public function get_student($id){
        $this->db->select('*');
        $this->db->from('tbl_user');        
        $this->db->where('id',$id);
        $this->db->where('type',2);
        $sql = $this->db->get();
        if($sql->num_rows()>0){
            $data['my'] = $sql->result_array();
           $data['edu'] = $this->edu_info($id);
           
           return $data;
           
        }else{
           return FALSE;
        }
        
    }
    
    public function edu_info($id){
        $this->db->select('*');
        $this->db->from('tbl_user_education');
        $this->db->where('user_id',$id);
        $sql = $this->db->get();
        if($sql->num_rows()>0){
            return $sql->result_array();
        }else{
            return FALSE;
        }
        
    }
    public function specfic_details(){
        $c = $this->session->userdata('logged_in');
        $this->db->select('*');
        $this->db->from('tbl_user tu');    
        $this->db->where('tu.id',$c['id']);
        $sql = $this->db->get();
        $x = $sql->row();
        $data['student_details'] = $x;
        return $data;
        
    }
    
     public function update_student(){
         $c = $this->session->userdata('logged_in');
        $data = array(
                        'full_name'=>$this->input->post('full_name'),
                        'email'=>$this->input->post('email'),
                        'contact'=>$this->input->post('contact_no'),
                        'gender'=>$this->input->post('gender'),                                       
                        'relation'=>$this->input->post('relation'),
                        'fh_name'=>$this->input->post('fh_name'),
                        'mother_name'=>$this->input->post('mother_name'),
                        'dob'=>$this->input->post('dob'),
                        'c_address'=>$this->input->post('c_add'),                        
                        'c_distict'=>$this->input->post('c_distict'),
                        'c_state'=>$this->input->post('c_state'),
                        'c_city'=>$this->input->post('c_city'),
                        'c_pincode'=>$this->input->post('c_pincode'),                        
                        'work_exp'=>$this->input->post('work_exp'),
                        
                      );
                    $this->db->where('id',$c['id']);
                  $res =  $this->db->update('tbl_user',$data);
                  
                  if($res){
                      return TRUE;
                  }else{
                      return FALSE;
                  }
                
    }
    
    public function fee_list(){
        $c = $this->session->userdata('logged_in');
        $this->db->select('*');
        $this->db->from('tbl_user_fee');
        $this->db->where('user_id',$c['id']);
        $this->db->order_by('id','desc');
        $sql = $this->db->get();
        return $sql->result_array();
    }
    
    
}

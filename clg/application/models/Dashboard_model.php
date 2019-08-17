<?php
/*
  * Model class for ACL  
*/
class Dashboard_model extends CI_Model {
   
    public function __construct() {
        parent::__construct();
    }
    
    public function chk_old($old,$tbl_name,$id)
    {
            $this->db->select('password');
            $this->db->from($tbl_name);
            $this->db->where('password',$old);
            $this->db->where('id',$id);
            $query = $this->db->get();
//            echo $this->db->last_query();
//            exit();
//            //echo $query->num_rows();
            if($query->num_rows()==1)
            {
                    return TRUE;
            }else
            {
                    return FALSE;
            }
            
    }
    
    public function Update_password($new,$tbl_name,$id)
    {
            $this->db->where('id',$id);
            $this->db->update($tbl_name,$new);
            //echo $this->db->last_query();
            if($this->db->affected_rows()>0)
            {
                    return "Password Updated Successfully";
            }
            else
            {
                    return "Something Happen Wrong";
            }
    }
    
    public function get_admin(){
        $this->db->select('*');
        $this->db->from('tbl_admin');
        $sql = $this->db->get();
        return $sql->row_array();
    }
    
    public function doc_count(){
        $this->db->select('*');
        $this->db->from('tbl_download_doc');
        $sql = $this->db->get();
//        echo $this->db->last_query();
        return $sql->num_rows();
    }
    
    public function job_count(){
        $this->db->select('*');
        $this->db->from('tbl_job');
        $sql = $this->db->get();
        return $sql->num_rows();
    }
    
    public function user_count(){
        $this->db->select('*');
        $this->db->from('tbl_user');
        $sql = $this->db->get();
        return $sql->num_rows();
    }
    
    public function place_count(){
        $this->db->select('*');
        $this->db->from('tbl_place');
        $sql = $this->db->get();
        return $sql->num_rows();
    }
    
    public function get_student_list(){
        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->order_by('id','desc');
        $this->db->limit(10);        
        $sql = $this->db->get();
        if($sql->num_rows()>0){
            return $sql->result();
        }else{
            $sql->num_rows();
        }
        
    }
    
    public function company_list()
    {
        $this->db->select('*');
        $this->db->from('tbl_place');
        $this->db->order_by('id','desc');
        $this->db->limit(15);
        $sql = $this->db->get();
        if($sql->num_rows()>0){
            return $sql->result();
        }else{
            $sql->num_rows();
        }
        
    }
}
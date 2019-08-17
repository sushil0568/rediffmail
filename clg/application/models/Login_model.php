<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login_Model extends CI_Model {
    
    public function __construct() {
        parent::__construct();        
            }
    
    public function check_userdata($email,$password)
    {
        
        $this->db->select('*');
        $this->db->from('tbl_admin');
        $this->db->where('email',$email);
        $this->db->where('password',$password);
        $sql = $this->db->get();
        $this->db->last_query();
        if($sql->num_rows() == 1){
           
            return $sql->result();
        }
        else
        {        
            $this->db->select('*');
            $this->db->from('tbl_user');
            $this->db->where('email',$email);
            $this->db->where('password',$password);
            $sql = $this->db->get();
            if($sql->num_rows()==1)
            {
                return $sql->result();

            }else{
                return FALSE;
            }
        }
        
       
        
    }
    
    
    public function update_tbl($type,$id,$data)
    {
            $this->db->where('type',$type);
            $this->db->where('id',$id);
            if($type ==1)
            {
                    $this->db->update('tbl_admin',$data);
            }            
            else
            {
                    $this->db->update('tbl_users',$data);
            }

    }
}

?>
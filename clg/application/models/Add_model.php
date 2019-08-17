<?php
/*
  * Model class for ACL  
*/
class Add_Model extends CI_Model {
   
    public function __construct() {
        parent::__construct();
    }
    
    public function insert($tbl,$data)
    {
        $this->db->insert($tbl,$data);
        if($this->db->affected_rows()==1){
            return TRUE;
        }
    }
    
    public function insert_fees($tbl,$data)
    {
        $enrollment_no = $this->input->post('enrollment_no');
        $user_id = $this->input->post('user_id');
        
        $this->db->insert($tbl,$data);
        if($this->db->affected_rows()==1){
            
            $this->db->select_sum('amount','amount');
            $this->db->from('tbl_user_fee');
            $this->db->where('user_id',$user_id);
            $this->db->where('enrollment_no',$enrollment_no);
            $sql = $this->db->get();
            $fee_amount = $sql->result();  
            $remain_fee = $fee_amount[0]->amount;
            $this->db->where('id',$user_id);
            $this->db->where('enrollment_no',$enrollment_no);
            $data= array('remain_fee'=>$remain_fee);
            $res =  $this->db->update('tbl_user',$data);   
           
            return TRUE;
        }
    }

        public function select_all($tbl)
    {
        $this->db->select('*');
        $this->db->from($tbl);
        $this->db->order_by('id','desc');
        $sql = $this->db->get();
//        echo $this->db->last_query();
        return $sql->result_array();
    }
    
    public function delete($tbl,$id){
        $this -> db -> where('id', $id);
        $this->db->delete($tbl);
        if($this->db->affected_rows()==1){
            return TRUE;
        }
    }
    
    public function specific_data($tbl,$id){
        $this->db->select('*');
        $this->db->from($tbl);
        $this->db->where('id',$id);        
        return $this->db->get()->row();
    }
    
    public function get_fees_list(){
        $this->db->select('*');
        $this->db->from('tbl_user tu');
        $this->db->join('tbl_user_fee tuf','tuf.user_id = tu.id and tuf.enrollment_no = tu.enrollment_no');
        $this->db->order_by('tuf.date','desc');
        $sql = $this->db->get();
        if($sql->num_rows()>0){
            return $sql->result_array();
        }else{
            return FALSE;
        }
    }
    
    public function update(){
        $id  = $this->input->post('id');
        $user_id  = $this->input->post('user_id');
        $enrollment_no  = $this->input->post('enrollment_no');
        $amount  = $this->input->post('amount');
        $this->db->where('id',$id);
        $this->db->where('user_id',$user_id);
        $this->db->where('enrollment_no',$enrollment_no);
        $data= array('amount'=>$amount);
        $res =  $this->db->update('tbl_user_fee',$data);
//        echo $this->db->last_query();
//        exit();
        if($res){
           
            $this->db->select_sum('amount','amount');
            $this->db->from('tbl_user_fee');
            $this->db->where('user_id',$user_id);
            $this->db->where('enrollment_no',$enrollment_no);
            $sql = $this->db->get();
            $fee_amount = $sql->result();  
            $remain_fee = $fee_amount[0]->amount;
            $this->db->where('id',$user_id);
            $this->db->where('enrollment_no',$enrollment_no);
            $data= array('remain_fee'=>$remain_fee);
            $res =  $this->db->update('tbl_user',$data);   
            
            return TRUE;
        }else{
            return FALSE;
        }
    }
}
<?php
/*
  * Model class for ACL  
*/
class Student_Model extends CI_Model {
   
    public function __construct() {
        parent::__construct();
    }
    
    public function insert()
    {
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
                        'marital_status'=>$this->input->post('marital_status'),
                        'category'=>$this->input->post('category'),
                        'relation'=>$this->input->post('relation'),
                        'fh_name'=>$this->input->post('fh_name'),
                        'mother_name'=>$this->input->post('mother_name'),
                        'dob'=>$this->input->post('dob'),
                        'nationality'=>$this->input->post('nationality'),
                        'c_address'=>$this->input->post('c_add'),                        
                        'c_distict'=>$this->input->post('c_distict'),
                        'c_state'=>$this->input->post('c_state'),
                        'c_city'=>$this->input->post('c_city'),
                        'c_pincode'=>$this->input->post('c_pincode'),                        
                        'work_exp'=>$this->input->post('work_exp'),
                        'exam'=>$this->input->post('exam'),
                        'password'=>$this->input->post('contact_no')
                      );
        
                $this->db->insert('tbl_user',$data);
                //echo $this->db->last_query();
                $user_id = $this->db->insert_id(); 
                //echo"<br/>";echo"<br/>";echo"<br/>";
                      
                $one = $this->input->post('one');
                $two = $this->input->post('two');
                $three = $this->input->post('three');
                $four = $this->input->post('four');
                $five = $this->input->post('five');              
                $one_one = array_filter($one);
                $counter = count($one_one);
                
                for($i=0;$i<$counter;$i++){
                    $education[] = array(
                                    'user_id' =>$user_id,
                                    'examination_name'=>$one_one[$i],
                                    'university'=>$two[$i],
                                    'yop'=>$three[$i],
                                    'percentage'=>$four[$i],
                                    'division'=>$five[$i]
                                );
                    
                }
                //print_r($education);
                   $this->db->insert_batch('tbl_user_education', $education); 

              return TRUE ; 
                
    }
    
    public function update_student($data,$id){
				$this->db->where('id',$id);
				$res =  $this->db->update('tbl_user',$data);
				
			    $one = $this->input->post('one');
                $two = $this->input->post('two');
                $three = $this->input->post('three');
                $four = $this->input->post('four');
                $five = $this->input->post('five');              
                $one_one = array_filter($one);
                $counter = count($one_one);
                
                for($i=0;$i<$counter;$i++){
                    $education[] = array(
                                    'user_id' =>$id,
                                    'examination_name'=>$one_one[$i],
                                    'university'=>$two[$i],
                                    'yop'=>$three[$i],
                                    'percentage'=>$four[$i],
                                    'division'=>$five[$i]
                                );
                    
                }
                $del = $this->delete_student_edu($id);
                if($del == TRUE){
                    $inse = $this->insert_education($education);
                    if($inse == TRUE){
                        return TRUE;
                    }
                }
    }
	
	public function update_student_img($data,$id){
	$this->db->where('id',$id);
	$res =  $this->db->update('tbl_user',$data);
	return TRUE;
	}
    
    public function delete_student_edu($id){
        if($id!=''){
        $this->db->where('user_id', $id);
        $this->db->delete('tbl_user_education');
        return TRUE;
        }else{
            return FALSE;
        }
    }
    
    public function insert_education($data){
        $st1 = $this->db->insert_batch('tbl_user_education', $data); 
        if($st1){
        return TRUE;
        }
    }

    public function get_student_list(){
        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->order_by('id','desc');
        $sql = $this->db->get();
        return $sql->result_array();
        
    }
    
    public function specfic_details($id){
         $this->db->select('*');
        $this->db->from('tbl_user tu');
       // $this->db->join('tbl_user_education tue','tue.user_id = tu.id');
        $this->db->where('tu.id',$id);
        $sql = $this->db->get();
//        echo $this->db->last_query();
        $x = $sql->row();
        $data['student_details'] = $x;
        $data['student_edu'] = $this->education($x->id);
        $data['student_fee'] = $this->fees($x->id,$x->enrollment_no);
        return $data;
        
    }
    
    public function education($user_id)
    {
        $this->db->select('examination_name,university,yop,university,division,percentage');
        $this->db->from('tbl_user_education');
        $this->db->where('user_id',$user_id);
        $sql = $this->db->get();
        return $sql->result_array();
    }
    
    public function fees($user_id,$enrollment_no)
    {
        $this->db->select('*');
        $this->db->from('tbl_user_fee');
        $this->db->where('user_id',$user_id);
        $this->db->where('enrollment_no',$enrollment_no);
        $sql = $this->db->get();
        return $sql->result_array();
    }
    
    public function delete_student($id){
        if($id!=''){
        $this->db->where('id', $id);
        $this->db->delete('tbl_user');
        return TRUE;
        }else{
            return FALSE;
        }
    }
    
    
}
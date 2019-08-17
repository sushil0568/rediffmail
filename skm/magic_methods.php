<?php

class Magic_methods{
    
    private $employee_list = array('emp01'=>'sushil','emp02'=>'kumar','emp03'=>'mishra','emp04'=>'skm');

    public function __get($emp_id){

        if(array_key_exists($emp_id, $this->employee_list))
        {
            return "Employee Name = ".$this->employee_list[$emp_id];
        }else{
            return "Employee not found";
        }
    }
    
    public function __set($emp_id, $value) {
      
        echo "before change in array ".print_r($this->employee_list); echo"<br/>";
        if(array_key_exists($emp_id, $this->employee_list))
        {   
            $this->employee_list[$emp_id] = $value;
            echo "after change in array " .print_r($this->employee_list); echo"<br/>";
            
        }else{
            return "Employee not found";
        }
    }
    
    public function __call($method_name,$array){
       
        if(count($array)== 2)
        {
          return  ($array[0]*$array[1]); //length*width
        }else{ echo"<br/>";
           return ($array[0]*$array[1]*$array[2]); echo"<br/>";//length*width*height
        }
        
    }
    
    public function __callStatic($name, $arguments) {
        echo "<br/>";
          echo "this is function not presnet= ". $name   .' with arguments '.implode(' ', $arguments);
        
    }
    
    public function addElement(){
        
    }

        public function __isset($name) {
        
    }
    
}

 $obj = new Magic_methods();

 echo $obj->emp01; echo "<br/>"; //get
 
 $obj->emp04 = 'ER SKM'; "<br/>"; //set
 
 echo $obj->area(10,10);"<br/>"; //call
 echo $obj->area(10,10,5); //call
 
Magic_methods::add("sushil","kumar","mishra");
 
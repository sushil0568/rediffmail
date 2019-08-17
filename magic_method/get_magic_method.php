<?php
class ABC{
    
   private $emp = ['one'=>'value of one','two'=>'value of two'];
   
   public function __get($name){
       if(array_key_exists($name, $this->emp))
       {
           return $this->emp[$name];
       }else{
           
       }
    }
    
    public function __set($name, $value) {
        if(array_key_exists($name, $this->emp)){
            $x = $this->emp[$name] = $value;
            print_r($this->emp);
            
            return $x;
        }else{
             echo"trying to access undefined value in array  =".$name;
        }
    }
}

$obj = new ABC();
echo $obj->two = sushil;

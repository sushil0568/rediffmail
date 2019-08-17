<?php

class abc{
    
    public $z = '';
    public function __construct($a,$b) {
        $this->z = $a+$b;
    }
    
    public function __toString() {
        
//        return $this->firstName.'-'.$this->lastName.'-'.$this->email;
        
        return $this->z ; // to get class name
    }
}

  $obj = new abc(5,6);




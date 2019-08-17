<?php
Class base{
    
    public $name;
    private $gender = 'M';
    public function get_name($name)
    {
        echo "I am base class function ".__METHOD__.'and parameter name = '. $this->name =$name;
    }
    
    private function gender(){
     
        echo "this is private method you can not accesss it".   $this->gender;;
    }
    
}

class child extends base{
    
    public function get_age()
    {
        echo "I am child class function ".__METHOD__." no age defined";
    }
} 

$obj = new child();
$obj->get_name("sushil"); echo "<br/>";

$obj->get_age();echo "<br/>";

$obj->gender(); // throgh error

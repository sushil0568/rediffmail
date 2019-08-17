<?php

class Encapsulation
{
    public $name;
    private $account_number;
    protected $bank_name;
    
    public function get_name($name){
       return "Hello ". $this->name = $name;
    }
    
    
}

$obj = new Encapsulation();
echo $obj->get_name("sushil");
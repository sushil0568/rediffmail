<?php
/*Rules:
 * abstract keyword must use before class name or function name
 * inside abstrct class we can create protected and public specifiers and function also
 *  */

abstract class Employee{
    
    private $username = "SuperAdmin";
    
    public function login(){
       echo $this->username;
        echo "use username and password";
    }
    
    abstract protected function prefix($name);
}

class Details extends Employee{
    
    public function prefix($name,$prefix="") {
        echo $prefix.' '.$name;
    }
}

$obj =  new Details;
$obj->login();
$obj->prefix("sushil","Mr.");
       

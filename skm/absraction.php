<?php
// 
abstract class Abstraction{
    public $name;    
    abstract public function department();
    abstract public function employee();
    
    public function office_add(){
        echo "ofc add :  ITPL";
    }
}

class Company extends Abstraction{
    
    public function department($dept_name = null) {
        return "working in  ".$dept_name;
    }
    
    public function employee($name = null) {
        return " I am ". $this->name = $name;
    }
}


$obj = new Company();
echo $obj->employee("Susil"); echo "<br/>";
echo $obj->department("IT Department");echo "<br/>";
echo $obj->office_add();

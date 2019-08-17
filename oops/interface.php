<?php
/*Rules : 
 * All the methods should be public or abstract
 * We must have to declare all the methods inside the interface
 * we can call more then one constrctor at the child class same time
 * we can not delare any constrctor inside the interface because we can not create the obj of interface
 *  */
interface Employee{
    public function employee_list($dept);
}

interface Emp_details{
    public function details();
}

class Department implements Employee, Emp_details{
    
    public function employee_list($dept){
       echo"this is dept=".$dept; 
        
    }
    public function details() {
       echo"<br/>". "this is details";
    }
}

$obj = new Department();
$obj->employee_list("skm");
$obj->details();


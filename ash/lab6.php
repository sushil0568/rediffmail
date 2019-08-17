<?php
class Person {

    const AVG_MAX_AGE = 80;

    public $firstName = "rupesh";
    public $lastName = "kumar";
    public $dob;

    function __construct($fname = "", $lname = "", $dob ="") {
        echo "Person Constructor called";
//        $this->firstName = $fname;
//        $this->lastName = $lname;
//        $this->dob = $dob;
    }
    
    function getFirstName(){
        return $this->firstName;
    }
    function setFirstName($fname){
        $this->firstName = $fname;
    }
    function getFullName(){
       return $this->firstName . $this->lastName;
    }

}
// When assigning an already created instance of a class to a new variable, the new variable will access the same instance as the object that was assigned. 
$instance = new Person();

$assigned   =  $instance;
$reference  =& $instance;

$instance->var = '$assigned will have this value';

$instance = null; // $instance and $reference become null

var_dump($instance);
var_dump($reference);
var_dump($assigned);
?>
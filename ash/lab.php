<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

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

class Author extends Person{
    public $pen_name = "Ashish Kumar";
    public $lastName = "Kumar";
    public $firstName = "Ashish";
    public function getPenName(){
        return $this->pen_name;
    }
    public function getFullName(){
        echo "Author->getFullName() called";
        return $this->pen_name;
    }
    public function getCompleteName(){
        return $this->firstName . $this->lastName;
    }
    
}

$myAuthor = new Author("Rupesh", "Kumar", "sdfsadfas");
echo $myAuthor->getCompleteName();

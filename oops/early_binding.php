<?php

/* 
 * Early binding or compline time binding : in this compiler checks the sytax error and assign the values to the variables
 */

class BOOK
{
    public $name = "SUSHIL"; //compiler assign the value
    
    public function aurthor()
    {
        echo "The Author name is : ".$this->name; //compiler assign the value
    }
    
    /*late binindg example start */
    public function get_aurthor()
    {
        $this->aurthor(); // this funciton called the child class function
    }
     /*late binindg example start*/
}

class NewBook extends BOOK{
    
    public function aurthor()
    {
        echo "The Aurtor name is Mishra and ".$this->name;
    }
}

$obj =  new NewBook();

$obj->aurthor(); //In This complier check synatx error then assign the value to the variable

$obj->get_aurthor();// this is late binding exapmle becasue compiler read thisfunction but didn't assiggn the value bcoz it will 
                    // call when object call this cuntion this is called late binding

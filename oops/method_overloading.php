<?php

/* 
 * php does not support method over laoding, by use of magic method __Call , we can achive method overlaoding
 * __Call takes two perameters, first one treat like function name & second one takes as a array argument
 */

class Overlaoding
{
    public function __call($name, $arguments) {
        
        if(is_integer($arguments[0]))
        {
            echo $val = $arguments[0]+$arguments[1]+$arguments[2];
        
        }else{
             echo $val =  $arguments[0].' '.$arguments[1].' '.$arguments[2];
        }
        
    }
}

$obj = new Overlaoding();

$obj->addition("sushil","kumar","mishra");

$obj->addition(5,3,5);
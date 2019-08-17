<?php

final class users{
    
    final public function get_name($name){
        return "Mr. ".$name;
    }
}
$obj = new users();
echo $obj->get_name("susil");

// class emp extends users{
   
//    public function get_emp($mr,$name){
       
//        $this->get_name($name);
//    }
// }

// $obj = new emp();
// echo $obj->get_name("mr","sushil");

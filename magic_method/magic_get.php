<?php
error_reporting(-1);
 class abc
 {
     
    private $total =5;

    private function get_name($x,$y)
    {
      return $this->total = $x+$y;
    }
 }
 
 $obj = new abc();
  echo $obj->total;
 echo $obj->get_name(4,5);
 
 
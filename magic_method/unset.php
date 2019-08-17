<?php
echo"__unset is use to delte the proprty from array which is private"; echo"<br/><br/>";
echo "__unset() is invoked when unset() is used on inaccessible properties.";echo"<br/><br/>";

error_reporting(-1);
class ABC{
    private $array = array('abc'=>'value of index abc','xyz'=>'value of index xyz','two'=>'value of index two');
    
    public function __unset($name) {
         unset($this->array[$name]);
        
    }
    
    public function __get($name) {
         echo $this->array[$name];
    }
    
    
}


$obj = new ABC();
unset($obj->two);
 echo $obj->two;
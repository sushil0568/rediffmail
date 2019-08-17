<?php
echo"By the use of __set method we can set the value of any undefinded or not accessible varibale values";echo"<br/><br/>";
Class Abc{
    
    private $abc = "I AM SET VALUE";
    
    public function __get($name) {
        return $this->abc;
    }

        public function __set($name, $value) {
           
             $this->abc = $value;
    }
    
}

$obj = new Abc();
echo $obj->xyz; echo"<br/>";

 $obj->abc ="<i>I AM SET VALUE</i> ==> <b>I AM SET VALUE NOW</b>";

echo"o/p = " .$obj->abc;
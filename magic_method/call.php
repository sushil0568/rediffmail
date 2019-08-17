<?php
echo "By this funcation we can call any mthod which is not defined or present into the class."
. "this method take two arguments 1. method name 2. argumnets which is in array form";echo"<br><br/>";

echo"Call method is use for function overloading also with the help of this we can achive fn overloading";echo"<br><br/>";

class Abc{
    
    public function __get($name) {
        echo"name not presnt";
    }
    
    public function __call($name, $arguments) {
        
        if(is_numeric($arguments[0]) && is_numeric($arguments[1]))
        {
            return array_sum($arguments);
        }else{
           return implode(" ", $arguments);
        }
        
    }
}

$obj = new Abc();
echo $obj->add;

echo "o/p =".$obj->add(5,4);
echo"<br/>";
echo "o/p =".$obj->add("sushil","Mishra");

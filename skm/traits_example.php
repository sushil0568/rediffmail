<?php
class Traits_example{
    
    use traits1 ;
    
    public function sayHello1(){
        echo "I am ".__CLASS__." function ".__FUNCTION__;
    }
}

$obj = new Traits_example();
$obj->sayHello();
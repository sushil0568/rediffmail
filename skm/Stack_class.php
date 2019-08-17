<?php

class Stack_class{
    
    public $stack = array();
    public $limit = 5;
    
    
//    public function __construct($stack = array(),$limit) {
//        $this->
//    }

    public function push($iteam)
    {
        if(count($this->stack)<$this->limit)
        {
            array_unshift($this->stack, $iteam);
            echo "value $iteam added into the stack"."<br/>";
        }else{
            echo "Stack is full"."<br/>";
            
        }
    }
    
    public function pop()
    {
       $val =  $this->top();
        echo "value $val removed from stack"."<br/>";
        array_shift($this->stack);
    }
    
    public function top(){
        return current($this->stack);
    }
}

$obj = new Stack_class();

$obj->push(5);
$obj->push(4);
$obj->push(3);
$obj->push(2);
$obj->push(51);
$obj->push(101); //stack full

$obj->pop();
$obj->push(111);

echo"<pre>";
print_r($obj);




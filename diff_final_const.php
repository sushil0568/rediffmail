<?php
// constant can not call by funcation they can call by scope resolution operator
class ABC
{
    

    const name  = "Parent class";
    
    final public function hello()
    {
        echo self ::name;
    }
    
    
}

class XYZ extends ABC
{
    const name = "child class";

    public function hi()
    {
 
        echo self:: now();
    }
    
    public function now()
    {
        return "no data";
    }
}


$obj = new ABC();
$obj->hello();
echo"<br/>";

$obj =  new XYZ();
$obj->hi();

<?php

echo" __get is used to call any undefined or non-accessible(private, protded) variable or property, we can not access any method of class."
. "Magic methods must be alwyas public.";echo"<br><br/>";
class Abc
{

    private $abc = "Private Varibale called/accessed through __get";
//    protected $bcd ="called already";
    public function __get($name)
    {
        return $this->abc;
//        echo $this->bcd;
    }
    
   
    
}


$obj = new Abc();
echo "o/p = ". $obj->abc;

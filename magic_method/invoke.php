<?php
echo"If we want to use object as method then we will use __invoke method"; echo"<br/><br/>";
echo"jitne argumnet object se pass karnge utne hi invoike me bhi hone chahiye"; echo"<br/><br/>";

class Abc
{
    
    public function __invoke($a,$b,$c) {
        return $a+$b+$c;
    }
    
}

$obj = new Abc();

echo $obj(3,5,5);
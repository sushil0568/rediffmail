<?php

class ABC{
    
    public function __call($name, $arguments) {
        if(count($arguments)==3)
        {
            return $arguments[0]+$arguments[1]+$arguments[2];
        }else{
            return $arguments[0].''.$arguments[1];
        }
    }
}

$obj = new ABC();
echo $obj->add(2,3,5);
echo "<br/>";
echo $obj->add('sushil','mishra');
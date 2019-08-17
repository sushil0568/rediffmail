<?php

function add (array $a){
    return $a;
}

$x =  add(array(5,5));
print_r($x);


function add1($a,$b){ 
    
    if(is_int($b)){ 
        echo "true";
    }else{
        echo "false";
    }       
}

echo $y= add1(5,"5");
//print_r($x);

?>

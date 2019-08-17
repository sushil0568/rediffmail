<?php
function add($a, $b) 
{ 
    return $a * $b; 
    
}

$origarray1 = array(2.4, 2.6, 3.5);
$origarray2 = array(2.4, 2.6, 3.5);


   $x = array_map(add,$origarray1, $origarray2);
   
   print_r($x);

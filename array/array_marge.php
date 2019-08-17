<?php
//$x = array('0'=>'0','1'=>'1','2'=>'2');
//$y = array('0'=>5);
//$x = array('naam'=>'RAM');
//$y = array('name'=>'Mohan','NAME'=>'Sohan');

//$x = 'sushil';
//$y = array('surname'=>'MISHRA');

$x = array("color" => "red", 2, 4);
$y = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);

$z = array_merge($x,$y);
echo '<pre>';
print_r($z);
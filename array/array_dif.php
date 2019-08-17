<?php
$array1 = array("a" => "green", "red", "blue", "red","sushil");
$array2 = array("b" => "green", "yellow", "red","blue","skm");
$result = array_diff($array1, $array2);

print_r($result);

echo"<br/><br/><br/>";
$x = array('one'=>'skm','two'=>'mks','three'=>'rks','four'=>'lks');
$y = array('php'=>'v5.5','html'=>'v5','css'=>'v3');

$z = array_merge($x, $y);
       
echo"<pre>";
print_r($z);
?>
<?php
echo"Slice";echo"<br/>";
$fruits_list = array('Orange','green','yellow','white','black');

$x = array_slice($fruits_list,1,3);
print_r($x);
echo "<br/>";




$result= array_slice($fruits_list,-2,2);
//echo"<pre>";
print_r($fruits_list);
echo"After slieced array";echo"<br/>";
print_r($result);echo "<br/>";

echo"Orignal array";echo"<br/>";
print_r($fruits_list);echo"<br/>";echo"<br/>";

echo"Splice";echo"<br/>";echo"<br/>";
$color = array('Orange','green','yellow','white','black');

$res = array_splice($color,-3,1,array('red','pink','volet'));
print_r($res);
//
//print_r($color);
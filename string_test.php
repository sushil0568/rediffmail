<?php
$x ='sushil kuamr mishra';

echo "substr(string, 'start', 'length')"; echo"<br/>";
echo substr($x,3,2); echo"<br/>";

echo substr($x, 1,3); echo"<br/>";

echo substr($x, 1,-3);echo"<br/>";


echo "=============================================";echo"<br/>";

$y = "sushil";
$z ="sushil";

if($y === $z){
    echo"yes";
}else{
    echo"NO";
}

echo "=============================================";echo"<br/>";

$a = "sushil@gmail.com.@gamil.in";

echo strstr($a, 'gmail');

echo "=============================================";echo"<br/>";
$c = "bhopal is a lake of city";

echo strpos($c, 'lake','6');
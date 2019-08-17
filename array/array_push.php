<?php

$x =  array('abc','xyz','pqrs');


array_push($x,'sushil','mishra');

echo'<pre>';
print_r($x);
echo"<br/><br/>";

$y =array('abc','xyz','pqrs','sushil','mishra');

array_pop($y);
echo'<pre>';
print_r($y);
echo"<br/><br/>";

array_unshift($x,"lafender");
print_r($x);
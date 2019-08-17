<?php

 function __autoload($class_name)
 {
     include "$class_name".'.php';
 }

$obj = new test1();
echo"<br/>";
$obj = new test2();
?>


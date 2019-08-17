<?php

$a = array([0]=>'green', [1]=>'red', [2]=>'yellow');
$b = array([0]=>'avocado', [1]=>'apple', [2]=>'banana');
$c = array_combine($a, $b);

echo'<pre>';
print_r($c);
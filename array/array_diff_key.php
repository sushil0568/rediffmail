<?php

$array1 = array('Math'=>77, 20, 'Geography'=>89, 'Language'=>67);
$array2 = array('Language'=>71, 'Science'=>91 ,20, 'Geography'=>89);

$res = array_diff_key($array1, $array2);

echo"<pre>";

print_r($res);
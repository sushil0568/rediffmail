<?php
echo $string1 = "I need cookies & soda."; echo "<br/>";
echo $needle = "cookies"; echo "<br/>";

//find length of the needle
echo "string length = " . $needle_len = strlen($needle); echo "<br/>";


echo strpos($string1,$needle); echo "<br/>";

//find postion
echo "find the position = " . $position_num = strpos($string1,$needle) + $needle_len; echo "<br/>";

//cut the string
"after cut stding = ". $result_string = substr("$string1",0,$position_num); echo "<br/>";

//display it
echo "$result_string"; // I need cookies
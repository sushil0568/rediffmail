<?php

$x = "sushil kumar mishra, kumar is a good person, so we can say sushil is also good because kumar is good";

echo str_replace('kumar', 'prased', $x);

echo"<br/>";echo"<hr/>";

$y = "sushil kumar mishra";

echo substr($y,6);

echo"<br/>";echo"<hr/>";

$z = "HELLO";
print_r(str_split($z)); 

echo"<br/>";echo"<hr/>";

echo strrev("sushil");

echo"<br/>";echo"<hr/>";
$text = 'This is a test';
echo substr_count($text, 'is', 3);
echo"<br/>";echo"<hr/>";

$email  = 'name@example@rediffmail.com';
$domain = strstr($email, 'a');
echo $domain; // prints @example.com

echo"<br/>";echo"<hr/>";

$user = strstr($email, '@', true); // As of PHP 5.3.0
echo $user; // prints name

echo"<br/>";echo"<hr/>";

$path = 'sushil ok mishra, ok is very imp, in also present';
$filename = substr(strrchr($path, "ok"),2   );
echo $filename; // "index.html"
?>
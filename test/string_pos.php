<?php
$mystring = 'abc';
$findme   = 'a';
$pos = strpos($mystring, $findme);

// Note our use of ===.  Simply == would not work as expected
// because the position of 'a' was the 0th (first) character.
//$x = ;
        echo gettype(false);echo"<br/>";    

if ($pos === false) {
    echo "The string '$findme' was not found in the string '$mystring'";
} else {
    echo "The string '$findme' was found in the string '$mystring'";
    echo " and exists at position $pos";
}

echo"---------------------------------------------------------------<br/><br/>";
echo $a =5; echo"<br/>"; 
echo $b =$a; echo"<br/>"; 

echo $$b;
echo"NULL"
?> 
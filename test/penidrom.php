<?php

echo "number=".       $num = 121; echo"<br/>";
echo "assing no to other variable p= ".  $p=$num; echo"<br/>";
echo "rev no=".     $revnum = 0;  echo"<br/>";
while ($num != 0)
{
    
echo"reminder=". $revnum = $revnum * 10 + $num % 10; echo "-----&nbsp;";echo "&nbsp;";
//below cast is essential to round remainder towards zero
echo"after devided=". $num = (int)($num / 10);  echo"<br/>";
}
 
if($revnum==$p)
{
echo $p," is Palindrome number";
}
else
{
echo $p." is not Palindrome number";
}

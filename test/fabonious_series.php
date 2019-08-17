<?php

function printFibonacci($n)
 {
 
  $first = 0;
  $second = 1;
 
  echo "Fibonacci Series \n";
 
  echo $first.' '.$second.' ';
 echo "<br/>";echo "<br/>";
  for($i = 2; $i < $n; $i++){
      
      echo "nor first = ".$first;echo "<br/>";
      echo "now seond=".$second;echo "<br/>";
    $third = $first + $second;
 
    echo $third.' ';echo "-----------------<br/>";
 
   echo'first element='. $first = $second; echo "<br/>";
    echo'second element='. $second = $third; echo "<br/>";
 
    }
}
printFibonacci(8);
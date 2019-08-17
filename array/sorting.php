<?php
echo"Sorting of array in assending order";echo"<br/>";
$array =array(1,9, 2, 18, 34, 1, 10, 15);
print_r($array);echo"<br/>";

$count = count($array);

for($i=0;$i<$count;$i++)
{
    for($j=1;$j<$count;$j++)
    { 
//        echo"===". $j;
//    echo"<br/>";echo"<br/>";
//            echo $array[$i].">".$array[$j];
            if($array[$i] > $array[$j])
            {
                
//                echo
                $temp = $array[$i];         echo"<br/>";
//                echo
                $array[$i] = $array[$j];    echo"<br/>";
//                echo 
                $array[$j] = $temp;         echo"<br/>";
                
            }
//           print_r($array); echo"<br/>";
    }
     
//            exit;
//            echo"i = ".$i;echo"<br/>";
}
 print_r($array); 



<?php

$x = array(50,-25,5,-5,30,-120,60,5,10);
print_r($x); echo "<br/>";
$res = array(50,25,30,25,55,-65,-5,0,10);
print_r($res);echo "<br/>";
$arr = array();
$y = 0;
for($i=0;$i<9;$i++)
{
    $y = $y+$x[$i];
    $arr[] = $y;    
}
print_r($arr); echo"<br/>";

echo "Q.2: #101#,#211#,#321#,#433#,#541# find the sum";echo"<br/>";

$str = "#101#,#211#,#321#,#433#,#541#";
echo $string = str_replace('#', '', $str); echo"<br/>";
$array = explode(',',$string);echo"<br/>";

echo $sum = array_sum($array);
echo"<hr/>";echo"<br/>";

echo"Q.3:";
$links =  array("cartrade" => "https://www.cartrade.com",
                "carwale" =>  "https://www.cartrade.com"
    );
$text = "we accuired carwale they ware sushil kumar mishra cartrade"; echo "<br/>";

foreach($links as $key  => $value)
{
 
  
    $first_string = str_replace("carwale",'&lt;a href=&quot;https://www.cartade.com&quot;&gt;cartade.com&lt;/a&gt;',$text);
     $str = str_replace("cartrade",'&lt;a href=&quot;https://www.cartade.com&quot;&gt;cartade.com&lt;/a&gt;',$first_string);
      
}
echo html_entity_decode($str);
echo"<br/>";echo"<br/>";echo"<br/>";








echo"Q4.:(state code 2 chars)-(sub code two digits)-(sub code 1 or 2 chars)-(number max 4 digits)";echo"<br/>";echo"<br/>";

echo"AP-05-BJ-9353";echo"<br/>";
echo"TN-35-AB-638";echo"<br/>";
echo"MH-03-C-3843";echo"<br/>";

$str = "$^[A-Z]{2}-[0-9]{2}-[A-Z]{1,2}-[0-9]{4}$";
$test="AP-05-BeJ-9353";
  echo $retval = preg_match($str, $test);
  if(preg_match($str, $test))
  {
      echo"match found";
  }else{
      echo "m match";
  }
    
    
    
    





//echo $str = str_replace('carewale',$links,$text);


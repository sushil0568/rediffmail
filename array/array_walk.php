<?php
echo"1. no need to freach loop"
. "2. use of this functin we can change into the maine array values also for tahht we need to use &(refrance value)";
function w3rfunction(&$value,$key)
{
echo $value = strtoupper($value);echo"<br/>";
}

$tutorials=array("tutorial1"=>"php","tutorial2"=>"xml","tutorial3"=>"javascript");

array_walk($tutorials,"w3rfunction");

echo"<pre>";
print_r($tutorials);

echo"<br/><br/><br/>";
echo"Array Map";echo"<br/>";

//function change_case($key)


?>

<?php
echo"Find the value present in array or not, if present then print key or print TRUE";echo"<br/>";
$array = array('1','2','3','4');

function array_search1($arr,$val)
{

    foreach($arr as $k => $v)
    {
       
        if($v == $val)
        {
               echo"Match found in postioon =".$k;echo"<br/>";
        }else{
            echo"No match found in postioon =".$k; echo"<br/>";
        }
    }
}
array_search1($array,4);
?>
<?php
echo"<br/><br/>";echo "Find how many times values of array repeating";echo"<br/>";
$array = array('0','2','1','2','0','3');
$counter = count($array);

$element_array = array();

for($i=0; $i<$counter; $i++)
{
    echo $key = $array[$i];
   

    if($element_array[$key]>=1)
    {
        $element_array[$key]++;
    }else{
        $element_array[$key]=1;
    }
}
echo"<pre>";print_r($element_array);
?>

<?php
echo "<br/><br/>"; echo "remove duplicate values from array";
$arr = array('0','2','1','2','0','3');
$counts = array_count_values($arr);

foreach ($arr as $key => $value) {
        if ($counts[$value] > 1) {
                unset($arr[$key]);
        }
}
print_r($arr);
?>
<?php
echo "<br/><br/>";
$origarray1 = array(2.4, 2.6, 3.5);
$origarray2 = array(2.4, 2.6, 3.5);
print_r(
    array_map(function ($a, $b) { return $a * $b; }, $origarray1, $origarray2)
);

?>
<?php
echo "<br/><br/>";
$arr = array("stringkey" => "value");
function cb1($a) {
    return array ($a);
}
function cb2($a, $b) {
    return array ($a, $b);
}
print_r(array_map("cb1", $arr));
print_r(array_map("cb2", $arr, $arr));
print_r(array_map(null,  $arr));
print_r(array_map(null, $arr, $arr));
?>
<?php
echo "<br/><br/>";echo"array_pad";
$input_array= array(1,7,10,6);
$result=array_pad($input_array,5,51);
print_r($result);
?>
<?php
echo "<br/><br/>";echo"array_unshift";
$fruits_list = array('Orange',  'Apple');
array_unshift($fruits_list, 'skm','mks','lks');
print_r($fruits_list);
?>
<?php
echo "<br/><br/>";echo"array_filter";
function my_function($item_values)
{
if ($item_values>100)
{
return true;
}
return false;
}
$item_list=array("Item1" => 100, "Item2" => 200, "Item3" => 125, "Item4" => 100);
print_r(array_filter($item_list,"my_function"));
?>
<?php
echo "<br/><br/>";echo "<br/><br/>";

$x = array('maruti','hyundai','toyota');
$y = array('maruti','bmw','audi','hyundai','mahindra');

$z = array_merge($x,$y);
print_r($z);
$w = array_unique($z);
print_r($w);
?>
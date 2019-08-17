<?php




$str = 407;
$chars = preg_split('//', $str, -1, PREG_SPLIT_NO_EMPTY);
print_r($chars);

echo $skm = 0;
for($i=0;$i<3;$i++){
    
    $skm = $skm+($chars[$i]*$chars[$i]*$chars[$i]);
    
}
echo $skm;

echo "<br/>";

// PHP code to check wether a number is 
// armstrong number or not
 
// function to check whether the number is 
// armstrong number or not
function armstrongCheck($number){
    $sum = 0;  
    $x = $number;  
    while($x != 0)  
    {  
        $rem = $x % 10;   echo"<br/>";
        $sum = $sum + $rem*$rem*$rem;  
        $x = $x / 10;  
    }  
     
    // if true then armstrong number
    if ($number == $sum)
        return 1;
     
    // not an armstrong number    
    return 0;    
}
 
// Driver Code
$number = 407;
$flag = armstrongCheck($number);
if ($flag == 1)
    echo "Yes";
else
    echo "No";
?>
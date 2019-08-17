<?php
class FileOwners
{
 /**
 * @param array $files
 *
 * @return array
  * 
  * ["Input.txt" => "Randy", "Code.py" => "Stan", "Output.txt" => "Randy"]
  * ["Randy" => ["Input.txt", "Output.txt"], "Stan" => ["Code.py"]]
 */
    
 public static function groupByOwners(array $files)
 {
     $tmp = array();
     
     echo"<pre>";
     print_r($files);
     
     ;
     
    $key = array_unique(array_keys(array_flip($files)));
    print_r($val);
    
    foreach($files as $key =>$value)
    {
        if(isset($tmp[$value]))
        {
            array_push($value, $key)
        }
    }
  
    
     
     
     
 }
 
 
}
$files = [
'Input.txt' => 'Randy',
'Code.py' => 'Stan',
'Output.txt' => 'Randy'
];

var_dump(FileOwners::groupByOwners($files));
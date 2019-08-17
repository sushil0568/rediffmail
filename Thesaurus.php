<?php
class FileOwners
{

public static function groupByOwners($files)
{
	foreach($files as $file => $name) {
		
		if (isset($newArray[$name])) {
                    echo "skm"; echo "<br/>";
		}else {
                    
                }
	}

	return $newArray;
}
}
$files = array
(
    "Input.txt" => "Randy",
    "Code.py" => "Stan",
    "Output.txt" => "Randy"
);
var_dump(FileOwners::groupByOwners($files));
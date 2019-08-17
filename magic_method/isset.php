<?php 
echo" __isset method is use to check whether vairable is set or not and it return boolean value ";echo"<br/><br/>";
echo"__isset() is triggered by calling isset() or empty() on inaccessible properties.";echo"<br/><br/>";

Class ABC
{
//    public $var = "Hello";
    
private $array = ['one'=>'value of one','two'=>'value of two'];
    
    public function __isset($name) {
       if(array_key_exists($name, $this->array))
       {
           return $this->array[$name];
       }else{
           echo $name." value not present into the array";
       }
    }
}

$obj = new ABC();
echo isset($obj->three);

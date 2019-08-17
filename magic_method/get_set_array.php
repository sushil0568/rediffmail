2<?php
echo "By using of __get and __set method we can change the private array values also.";echo"<br/><br/>";
class Abc{
    
    private $array = ['one'=>'value of one','two'=>'value of two'];
    
    public function __get($name) 
    {
        if(array_key_exists($name, $this->array))
        {
            return $this->array[$name];
        }else{
            echo"trying to access undefined value in array  =".$name;
        }        
    }
    
    public function __set($name, $value) {
       if(array_key_exists($name, $this->array))
        {
            return $this->array[$name];
//  return $this->array[$name] = $value; //it will change the array value permanetly and o/p will be sushil when we call one
        }else{
            echo"trying to access undefined value in array  =".$name;
        } 
    }
}

$obj = new Abc();

echo $obj->one ="Sushil";
echo "<br/>";
echo $obj->one;

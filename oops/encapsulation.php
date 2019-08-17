<?php
echo "Encapsulation : It is a concept of wrapping up or binding up related data "
. "members and methods in a single module known as encapsulation";    echo"<br/><br/>";

echo"encapsulation is mainly used for protection purpose.";           echo"<br/><br/>";

echo "Private method means it can be accessed within same class. Outside,"
. "Class can't access private method of other class.That's why encapsulation is known as data hiding is the main advantage for encapsulation."; echo"<br/><br/>";

echo "Second advantage of encapsulation is you can make the class read only or write only by providing setter or getter method."; echo"<br/><br/>";

class UserAccount{
    
    public $name;
    private $acoount_number;
    private $balance;
    
    public function __get($balance)
    {
        return $this->balance = 1500;
    }
    
    public function get_bal($balance)
    {
        return $this->balance = $balance;
    }
    
   
}

$obj = new UserAccount();

echo $obj->name ="SUshil";
echo $obj->balance; // by using __get magic method we can access the private property
echo $obj->get_bal(2100); // if we want to access private property we can not access driectly by using object,
                          // we have to access throug public function bcoz private proprty can acess with in the class
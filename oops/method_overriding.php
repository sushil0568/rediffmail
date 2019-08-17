<?php
/*
Method over ridding :- IF we create same name function into the child class which is already present into base class,
is called method over ridding.
Q : why we use ?
A : we we don't want to change the functionality of base class then we use this.

*/
class Book
{
    public $name = "sushil";
    
    public function aurthor()
    {
        return "this is = ".$this->name;
    }
}

class NewBook extends Book{
    
    public function aurthor() {
        echo parent::aurthor().' and     '."this is mishra";
    }
    
}

$obj =  new NewBook();
echo $obj->aurthor();

?>
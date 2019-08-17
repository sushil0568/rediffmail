<?php

class BOOK
{
    public static $name = "SUSHIL"; 
    
    public static function aurthor()
    {
        echo "The Author name is : ".  self::$name; 
    }
    
   
    public static function get_aurthor()
    {
        self::aurthor();
    }
    
}

class NewBook extends BOOK{
    
    public static function aurthor()
    {
        echo "The Aurtor name is Mishra and ".self:: $name;
    }
}

Book::aurthor(); //The Author name is : SUSHIL

echo "<br/>";
NewBook::get_aurthor(); //The Aurtor name is Mishra and SUSHIL but it's print The Author name is : SUSHIL

//  why this is happening bcoz  ge_aurthor is not looking for obj this is looking for statis function that's why it
// alwyas call prent class aurthor function and produse above msg bcoz self always called the function of current class

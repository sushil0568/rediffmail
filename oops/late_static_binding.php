<?php
/*To solve the problem of static early binding
 * As of PHP 5.3.0, PHP implements a feature called late static binding which can be used to reference
 *  the called class in the context of static inheritance.
Late static bindings tries to solve that limitation by introducing a keyword that 
 * references the class that was initially called at runtime
 *  */
class BOOK
{
    public static $name = "SUSHIL"; 
    
    public static function aurthor()
    {
        echo "The Author name is : ".  self::$name; 
    }
    
   
    public static function get_aurthor()
    {
        static::aurthor(); /// Here comes Late Static Bindings
    }
    
}

class NewBook extends BOOK{
    
    public static function aurthor()
    {
        echo "The Aurtor name is Mishra and ".self:: $name;
    }
}


NewBook::get_aurthor();
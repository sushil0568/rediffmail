<?php

class Abc{
    
    private static $instance = null;
    
    private function __construct()
    {
        echo"hello skm";
    }
    
    public static function getInstance()
    {
        if(self :: $instance == null)
        {
            return self::$instance = new Abc();
        }else{
            return "Object is already created";
        }
        
        
    }
}

echo $object1 = Abc::getInstance();
echo $object2 = Abc::getInstance();

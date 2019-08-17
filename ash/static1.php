<?php
class Foo {
    public static $abc = 1;
    const MY_CONST = 12;
    public $myVar = 13;
    public function notStaticMethod(){
        echo self::$abc;
    }
    
    
    public static function aStaticMethod() {
        echo $this->myVar;
        echo self::$abc;
        echo self::MY_CONST;
        // ...
    }
}
//1
Foo::notStaticMethod();
//2
$classname = 'Foo';
$classname::aStaticMethod(); // As of PHP 5.3.0
//3
$myobj = new $classname();
//echo $myobj::notStaticMethod();
?>
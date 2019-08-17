<?php
//The pseudo-variable $this is available when a method is called from within an object context. $this is a reference to the calling object (usually the object to which the method belongs, but possibly another object, if the method is called statically from the context of a secondary object). As of PHP 7.0.0 calling a non-static method statically from an incompatible context results in $this being undefined inside the method. Calling a non-static method statically from an incompatible context has been deprecated as of PHP 5.6.0. As of PHP 7.0.0 calling a non-static method statically has been generally deprecated (even if called from a compatible context). Before PHP 5.6.0 such calls already triggered a strict notice.
class A
{
    function foo()
    {
        echo "test";
        if (isset($this)) {
            echo '$this is defined (';
            echo get_class($this);
            echo ")\n";
        } else {
            echo "\$this is not defined.\n";
        }
    }
}

class B
{
    function bar()
    {
        A::foo();
    }
}

//$a = new A();
//$a->foo();

//A::foo();
$b = new B();
$b->bar();
//
//B::bar();
?>
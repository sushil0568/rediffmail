<?php
echo "static methods and variables can not access by object. it can be access by outsdie the class by :: operation or inside the class by self ::";
echo"<br/><br/>";
class ABC{
    
    public static $cart = 0;

    public static function add_cart($itam)
    {
         self::$cart+=$itam;
    }
    
    public static function del_Cart($itam)
    {
//        self:: $cart-=$itam;
        self:: $cart =  self:: $cart-$itam;
    }
    
    private function get_name($args){
        
        echo"skm";
    }
}
 
echo ABC::$cart; echo"<br/><br/>";
$x = 5;
 ABC::add_cart($x);
echo ABC::$cart; echo"<br/><br/>";

ABC::del_Cart(2);

echo ABC::$cart;

$x = ABC::get_name("mr=");
echo $x;
?>
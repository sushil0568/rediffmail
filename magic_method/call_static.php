<?php
echo"By this __callStatic method we can call static funcions"; echo"<br/><br/>";
class ABC{
    
    public static function __callStatic($name, $arguments) {
        echo "this is function not presnet=".$name   .'with arguments'.implode(' ', $arguments);
    }
}



ABC :: add("susihl","kumar","mishra");


<?php
class Static_con
{
    public $con;
    public static $server = 'localhost';
    public static $username = 'root';
    public static $password = '';
    public static $database = 'lap';
    public static $instance;


    private function __construct() {
        $con = mysql_connect(self::$server,self::$username,self::$password);
        mysql_select_db(self::$database,$con);
    }
    
    public static function instance()
    {
        if(self :: $instance == null)
        {
            self :: $instance = new Static_con();
             echo "connection established";
        }else{
            echo "connection already established";
        }
        return self::$instance;
    }
}

Static_con :: instance();
echo"<br/>";
Static_con :: instance();





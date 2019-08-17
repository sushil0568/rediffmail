<?php
class Logger{
    
    public function log($msg)
    {
        echo "Logging Message: ".$msg;
    }   
}


class userinfo{
   
    private $log1;
    public function __construct($object) {
        $this->log1 =  $object;
    }
    
    public function create_user()
    {

        $this->log1->log("User Created");
        
    }
    public function update_user()
    {

        $this->log1->log("User Updated");
       
    }
    public function delete_user()
    {

       $this->log1->log("User Deleted");
    }
    
  
}
$objecct =  new Logger();
$obj = new userinfo($objecct);

$obj->create_user(); echo"<br/>";

$obj->update_user();echo"<br/>";

$obj->delete_user();

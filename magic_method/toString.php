<?php
echo"The __toString() method is automatically called when an object in PHP5 is converted into a string for the purpose of display or concatenation."; echo"<br/><br/>";

class ABC{
    
    private $firstName, $lastName, $email;

    public function __construct($firstName, $lastName, $email)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
    }
    
    public function __toString() {
        
        return $this->firstName.'-'.$this->lastName.'-'.$this->email;
        
//        return get_class($this); // to get class name
    }
            

}

 echo $obj = new ABC("sushil","kumar","mishra");

//echo $obj = new ABC();
    

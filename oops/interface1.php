<?php
interface car{
public function setmodel($name);
public function getmodel();
}

interface vechile{
    
}

class minicar implements car{
    private $model;
    
    public function setmodel($name){
        
        $this->model = $name;
        
    }
    public function getmodel(){
        return $this->model;
    }
}


$obj = new minicar();
$obj->setmodel('maruti');
echo $obj->getmodel();
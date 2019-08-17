<?php
class demoSleepWakeup {
    public $resourceM;
    public $arrayM;

    public function __construct() {
        //$this->resourceM = fopen("demo.txt", "w");
        $this->arrayM = array(1, 2, 3, 4); // Enter code here
    }

    public function __sleep() {
        return array('arrayM');
    }

    public function __wakeup() {
        $this->resourceM = fopen("demo.txt", "w");
    }
}

$obj = new demoSleepWakeup();
$serializedStr = serialize($obj);
print_r($serializedStr);
//var_dump($serializedStr);
print_r(unserialize($serializedStr));
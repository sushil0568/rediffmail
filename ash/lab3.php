<?php
class test {
    const AVG_AGE = 80;
    //put your code here
    public $var = 'a default value';

    // method declaration
    public function displayVar() {
        echo $this->var;
    }
}

//$instance = new test();

// This can also be done with a variable:
$className = 'test';
$instance = new $className(); // new test()
?>
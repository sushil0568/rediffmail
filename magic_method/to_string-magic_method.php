<?php

class ABC{
    
    public function __toString() {
        return get_class();
    }
}

echo $obj = new ABC();
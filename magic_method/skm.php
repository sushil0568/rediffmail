<?php
  class WebDeveloper {
    public $info = array();
//    public function __get($item)
//    {
//      $this->info[$item] = $value;
//    }
//    
//    public function __set($item, $value) {
//      $this->info[$item] = $value;
//    }
    public function __isset($item) {
      if(isset($this->info[$item]))
      {
          return $this->info[$item]='value set';
      }else{
          echo "not";
          // return $this->info[$item]='value not set';
      }
    }
    public function __unset($item) {
      unset($this->info[$item]);
    }
  }
  
  
  $developer = new WebDeveloper();
//   $developer->two = 'Jordizle';
//  print_r($developer);
  
  
  if(isset($developer->name)){ 
    print_r($developer);
  }
//  unset($developer->name);
//?>
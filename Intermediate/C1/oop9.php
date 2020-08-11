<?php
#constructor and destructor

class MyClass{
  public $val = 0;
   function __construct(){
    echo "This is constructor
    "."<br>";
  }
  public function doIt(){
    for ($i = 0; $i < 1000; $i++) {
       $this->val += $i; 
    }
  }
  function __destruct(){
    echo "<br>"."This is end.".$this->val;
  }
  
}
$obj = new MyClass; 
$obj->doIt();



?>
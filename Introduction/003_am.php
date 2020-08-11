<?php

class AccessModifire{
  public $one = "This is public.";
  private $two = "This is private.";
  protected $three = "Thid is protected.";
  function myFunc(){
    echo $this->two;
    echo $this->three;
  }
}
class AccessTwo extends AccessModifire{
  function myFunc2(){
    echo $this->three;
  }
}

$am = new AccessModifire;
echo $am->one;
echo "<hr>";
$am->myFunc();
$am2 = new AccessTwo;
$am2->myFunc2();
  

?>
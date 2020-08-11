<?php
/*
* abstract class must contain at least one abstract method
* abstract method must be implement by extend class
*/
abstract class Myclass{
  public $name = "Mg Mg";
  const NAME = "Aung Myat Moe";
  abstract function myAbs();
  
  function myFunc(){
    echo "My name is ".$this->name;
  }
  
}
class Son extends Myclass{
  function myAbs(){
    echo "I am ".self::NAME;
  }
}
$obj = new Son;
echo $obj->name;
$obj->myAbs();


?>
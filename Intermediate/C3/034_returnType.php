<?php
#return Type Casting
class Myclass{
  function myFunc(string $num):string
  {
    return $num;
  }
}
$obj = new Myclass;
$b = $obj->myFunc(10);
var_dump($b);
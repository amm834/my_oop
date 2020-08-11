<?php
class Inherit{
  var $name = "Ma Ma";
  function myFunc(){
    echo "Hello oop newbie.";
  }
}
class Son extends Inherit{
  
}
$obj = new Son;
$obj->myFunc();
echo $obj->name;
<?php
#encapsulation and getter
class MyClass{
  private $name = "Ma Ma";
  function getter(){
    return $this->name;
  }
}
$obj = new MyClass;
echo $obj->getter();
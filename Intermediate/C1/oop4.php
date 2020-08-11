<?php
#Method overloading
class MyClass{
  public function name($name = "Mg Mg"){
    echo "My name is ".$name;
  }
}
$obj = new MyClass;
$obj->name("Ma Ma");
<?php
#this keyword
class MyClass{
  public $name = "Mg Mg";
  public function changeName(){
    echo $this->name = "Aung Aung";
  }
}
$obj = new MyClass;
echo $obj->name;
echo '<br>';
$obj->changeName();
$obj2 = new MyClass;
echo '<br>';
echo $obj2->name;
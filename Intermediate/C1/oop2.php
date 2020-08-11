<?php
#accessing to method
#variable passing through
class MyClass{
  var $name = "Mg Mg";
  public function myAge($age){
   return "Hello My Bros' ".$age;
  }
}
$obj = new MyClass;
echo $obj->myAge(30);
echo "<br>";
echo $obj->name;
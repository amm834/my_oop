<?php

include_once 'am.php';




// Procedural
function proce($name,$age){
  echo $name."is".$age." years old.";
}
proce("Ma Ma","18");
proce("Nyi Ma",17);
echo "<hr>";
//OOP
class One{
  var $name;
  var $age;
function myFunc(){
  echo $this->name." is ".$this->age." years old.";
}
}
$obj = new One;
$obj->name="Aung Aung";
$obj->age = 12;
$obj->myFunc();
$obj2 = new One;
$obj2->name="Zar Xar";
$obj2->age=20;
$obj2->myFunc();


?>
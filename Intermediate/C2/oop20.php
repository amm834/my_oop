<?php
#magic toString involk clone
class Myclass{
 var $name = "Ma Ma";
  function __toString(){
    return "You are trying yo get obj to string."."<br>";
  }
  function __invoke(){
    return "This is not method.";
  }
  #when you clone this following funcion wil start
  function __clone(){
    echo "You are Cloning.";
  }
}
$obj = new Myclass;
echo $obj;
echo $obj();
echo "<br>";
#clone to the Myclass
$clo = clone $obj;
echo $clo->name;
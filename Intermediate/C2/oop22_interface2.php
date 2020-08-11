<?php
#access to variable
interface Main{
  function callName($name);
}
class Myclass implements Main{
  private $name;
  function callName($name){
    $this->name = $name;
  }
  function returnName(){
    echo "My name is $this->name";
  }
}
$obj = new Myclass;
$obj->callName("Aung Myat Moe");
$obj->returnName();
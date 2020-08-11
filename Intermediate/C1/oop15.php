<?php
#magic method include_once
#get and set

class MyClass{
  function __get($var){
    echo "You are fking calling non exist {$var} <hr>";
  }
  function __set($prop,$val){
echo "You are fking setting {$prop} and {$val}<hr> ";
  }
}
$obj = new MyClass;
$obj->name;
$obj->mama = "Ma Ma";


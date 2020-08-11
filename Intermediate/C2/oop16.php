<?php
# __isset and __unset
// magic method

class Myclass{
  function __isset($var){
    echo "You are fking isset checking {$var}<hr>";
  }
  function __unset($var){
    echo "You are fking unset checking {$var}<hr>";
  }
}
$obj = new Myclass;
isset($obj->name);
unset($obj->name);
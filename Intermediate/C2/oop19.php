<?php
# sleep and wakeup
class Myclass{
  function __sleep(){
    echo "Ypu are trying to serialize the obj";
    echo "<br>";
    return [];
  }
  function __wakeup(){
    echo "Object Unserialize.";
  }
}
$obj = new Myclass;
$aa = serialize($obj);
 print_r(unserialize($aa));
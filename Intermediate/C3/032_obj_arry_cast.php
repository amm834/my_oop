<?php
class Myclass{
  function myFun(Test $data){
    var_dump($data);
  }
}
class Test{
  
}
$t = new Test;
$obj = new Myclass;
$obj->myFun($t);
<?php
#scalar type cast
/*
int var
float var
string var
bool var
Null cannot be show*
*/
class Myclass{
  function myFun(bool $data){
    var_dump($data);
  }
}
$obj = new Myclass;
$obj->myFun(12.3);
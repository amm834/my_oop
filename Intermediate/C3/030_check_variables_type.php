<?php
/*
is_int();
is_string();
is_float();
is_bool();
is_null();
*/
class Myclass{
  public function checkDataType($data){
    if(is_string($data)){
      echo "Type is right.";
    }else {
      echo "Wrong Variable Type";
    }
  }
}
$obj = new Myclass;
$obj->checkDataType(123);

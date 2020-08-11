<?php
#call and callStatic 
class MyClass{
  public function __call($method,$para){
    echo "You call {$method} is not exist with ";
    echo print_r($para,true);
  }
  public static function __callStatic($metho,$par){
    echo "You call static {$metho} is not exist with ";
    echo print_r($par,true);
  }

}
$obj = new MyClass;
$obj::myStatic("Hello");
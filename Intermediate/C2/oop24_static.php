<?php
#static keyword
class Myclass{
  public static $num = 0;
  function getCount(){
    self::$num++;
    echo self::$num;
  }
}
$obj = new Myclass;
echo $obj->getCount();
echo $obj->getCount();
echo $obj->getCount();

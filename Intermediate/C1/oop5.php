<?php
#access modifier
#public == var
class Myclass{
  public $name = "Ma Ma";
}
$obj  = new Myclass;
echo $obj->name;
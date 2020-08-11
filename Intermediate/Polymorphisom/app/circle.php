<?php
namespace app;
use app\shape\Shape;
class Circle implements Shape{
  public $radius;
  function __construct($radius){
    $this->radius = $radius;
  }
  function getArea(){
    return $this->radius*$this->radius*pi();
  }
}


?>
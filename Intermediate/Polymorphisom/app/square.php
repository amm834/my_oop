<?php
namespace app;
use app\shape\Shape;
class Square implements Shape{
  public $width;
  public $height;
  function __construct($width,$height){
    $this->width = $width;
    $this->height = $height;
  }
  function getArea(){
    return $this->width*$this->height;
  }
}

?>
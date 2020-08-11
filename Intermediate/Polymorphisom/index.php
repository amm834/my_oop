<?php
include_once 'vendor/autoload.php';
use app\Circle;
use app\Square;
use app\shape\Shape;
 class Index{
  function __construct(){
    $circle = new Circle(20);
    $this->getPrice($circle);
    echo "<hr>";
    $square = new Square(20,20);
    $this->getPrice($square);
    
  }  
  function getPrice(Shape $shape){
    $area = $shape->getArea($shape);
      echo "Your price is ".($area*17)." kyats";
    }
 }
 new Index;
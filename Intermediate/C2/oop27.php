<?php
#singleTon Design pattern
class Myclass{
  private static $name;
  private static $instance;
  private  function __construct(){
    self::$name = "Mg Mg";
  }
  static function getInstance(){
    if(self::$instance == null){
       $instance = new Myclass();
    }
    return $instance;
  }
  public function getName(){
    echo self::$name;
  }
}
$obj = Myclass::getInstance();
$obj->getName();

?>
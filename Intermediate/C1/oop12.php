<?php
#parent constructor invoking
class ParentClass{
  public function __construct(){
    echo "This is parent.";
  }
}
  class Son extends ParentClass{
    public function __construct(){
      // To call parent constructor method
      parent::__construct();
      echo "<br>"."This is son.";
    }
  }
$obj = new Son;
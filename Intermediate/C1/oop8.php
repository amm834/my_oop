<?php
#getter and setter
class MyClass{
  private $name = "Ma Ma";
  public function setter($name){
    $this->name = $name;
  }
  public function getter(){
    return $this->name;
  }
}
$obj = new MyClass;
$obj->setter("Mg Mg");
echo $obj->getter();

?>
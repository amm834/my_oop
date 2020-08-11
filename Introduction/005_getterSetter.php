<?php
include_once '005_superc.php';
class Getter_setter extends Super{
  private $name = "Ma Ma";
  function getter(){
    echo $this->name;
  }
  function setter($var){
    return $this->name = $var;
  }
}
$obj = new Getter_setter;
$obj->getter();
echo "<hr>";
echo $obj->setter("Mg Mg");
echo $obj->rtClass();

?>
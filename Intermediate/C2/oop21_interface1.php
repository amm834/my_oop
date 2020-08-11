<?php
#interface

interface main
{
  public function ruleOne();
  public function ruleTwo();
}
class Myclass implements main{
  function ruleOne(){
    echo "Heloo Rule 1.<br>";
  }
function ruleTwo(){
  echo "This is Rule  2
  ";
}
}
$obj = new Myclass;
echo $obj->ruleOne();
echo $obj->ruleTwo();
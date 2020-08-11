<?php
#Interface
interface Rules
{
  public function ruleOne();
}
interface GRules
{
  public function ruleTwo();
}
class Myclass implements Rules,GRules{
  function ruleOne(){
    echo "I am Rule 1.";
  }
function ruleTwo(){
    echo "I am Rule 2.";
  }
  
}
class Son extends Myclass{
  
}
$obj = new Son;
$obj->ruleOne();
$obj->ruleTwo();
echo "<hr>";
#Super Class
abstract class Mama{
  abstract function Mama1();
}
abstract class Papa extends Mama{
  abstract function Myabs();
  
}
class Index extends Papa{
function Myabs(){
  echo "I am superclass";  
}
function Mama1(){
    echo "I am Mama";
  }
}
$obj2 = new Index;
$obj2->Myabs();
$obj2->Mama1();
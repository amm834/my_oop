<?php
#call back
class Myclass{
  function doIt($funName){
    $i = 0;
    $sum = 0;
    while($i < 10000){
      $sum += $i;
      $i++;
    }
  $this->$funName($sum);
  }
  function sumIt($total){
    echo "Sum is $total";
  }
  function testIt(){
    echo 'I am tset It.';
  }
}
$obj = new Myclass;
$obj->doIt("testIt");
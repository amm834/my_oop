<?php
$ary = ["One"=>1,"Two"=>2,"Three"=>3];
$num = 10;

array_walk($ary,function ($key,$value) use(&$num){
  $num = ++$num;
  echo "This is $key and value is $value.$num<br>";
});
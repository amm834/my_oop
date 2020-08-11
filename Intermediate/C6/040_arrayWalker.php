<?php

$ary =  ["One"=>1,"Two"=>2,"Three"=>3];
function arySplit($value,$key){
  echo "This is $key and $value"."<br>";
}
array_walk($ary,"arySplit");
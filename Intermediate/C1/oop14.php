<?php
#array to Object
$ary = [
  "One"=>1,
  "Two"=>2,
  "Three"=>3,
  "Four"=>4,
  "Five"=>"String"
  ];
var_dump($ary);
echo "<br>";
echo $ary["One"];
echo "<hr>";
foreach ($ary as $key=>$val){
  echo $key." ==> ".$val."<br>";
}
echo "<hr>";
$ary = (object) $ary;
var_dump($ary);
echo "<br>";
echo $ary->One;
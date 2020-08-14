<?php
require_once "member.php";
$obj = new App\Member();
$rc = new ReflectionClass("App\Member");
echo $rc->getShortName()."<br>";
/* 
Reflection Class
*/
echo $rc->getName();
showData(get_class_methods($rc));
function showData($ary){
  echo "<pre>".print_r($ary,true)."</pre>";
}



?>
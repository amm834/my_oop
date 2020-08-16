<?php
require_once "member.php";

$rm = new ReflectionMethod("App\Member","getDetail");
showData(get_class_methods($rm));
echo("<hr>");
echo $rm->isPublic()?"True":"False<br>";
$mem = new App\Member();
$rm->invoke($mem,[123,456]);
function showData($ary){
  echo "<pre>".print_r($ary,true)."</pre>";
}



?>
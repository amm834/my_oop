<?php
require_once "member.php";
$mem = new App\Member();
$rp = new ReflectionProperty("App\Member","detailInfo");
showData(get_class_methods($rp));
$rp->setAccessible(true);
echo $rp->getValue($mem);
echo $rp->isPublic();
function showData($ary){
  echo "<pre>".print_r($ary,true)."</pre>";
}



?>
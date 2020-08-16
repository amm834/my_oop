<?php
require_once "member.php";
$mem = new App\Member();
$rp = new ReflectionParameter(["App\Member","setAuth"],0);
echo $rp->getType();
echo $rp->isDefaultValueAvailable();
showData(get_class_methods($rp));



function showData($ary){
  echo "<pre>".print_r($ary,true)."</pre>";
}



?>
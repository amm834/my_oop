<?php
$num = 10;
$anos = function (&$num){
  $num = 60;
  echo "This is ".$num;
};
echo $num;
$anos($num);
echo $num;
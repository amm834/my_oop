<?php
#Clouser
$num  = 30;
$var = function () use($num){
  echo $num;
};
$var();
echo "<hr>";
#example 2
function doIt($var){
  $var();
}
doIt(function () use ($num) {
  echo $num;
});
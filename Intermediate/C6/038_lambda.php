<?php
function doIt($var){
  $total = 12+13;
  $var($total);
}

doIt(function ($var){
  echo "Hello World {$var}";
});
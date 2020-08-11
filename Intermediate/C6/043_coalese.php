<?php
function doIt(...$var){
  
echo $var[3] ?? "Null";

}
doIt(12,13);
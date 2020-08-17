<?php

try{
function readFileName($fileName){
  if(file_exists($fileName)){
  $handler = fopen($fileName,'r');
  $fsize = filesize($fileName);
  $rf = fread($fileName,$fsize);
  echo $rf;
}else {
  throw new Exception("Fie Not Found!");
}
}
}catch(Exception $e){
  echo $e->getMessage();
}
readFileName("amm.txt");

?>
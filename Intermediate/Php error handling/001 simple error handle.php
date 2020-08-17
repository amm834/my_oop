<?php


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
try{
  readFileName("amm.txt");
}catch(Exception $e){
  echo $e->getMessage();
}


?>
<?php

class MyErrHandler extends Exception{
  public function __construct($message,$code){
    parent::__construct($message,$code);
    echo "Up"."<br>";
  }
}

function rFname($fileName){
  if(!file_exists($fileName))
  throw new MyErrHandler("File Not Found",1001);
}
try{
  rFname("amm.txt");
}catch(Exception $e){
  echo $e->getMessage();
}


?>
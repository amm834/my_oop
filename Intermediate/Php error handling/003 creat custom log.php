<?php

class MyErrHandler extends Exception{
  public function __construct($message,$code){
    parent::__construct($message,$code);
    $handler = fopen("err.log","a");
    $data = "\n Err is :: ".$message."\n Code is ::: ".$code."\n at => ".date("Y-m-d H:i:s",time());
    fwrite($handler,$data);
    fclose($handler);
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
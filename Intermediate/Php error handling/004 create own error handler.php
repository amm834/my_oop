<?php
class MyErrHdler extends Exception{
  
}
function myErrHdler($errCode,$errMsg,$filePath,$lineNo){
  throw new myErrHdler("Error Code is ".$errCode."<br>".$errMsg);
}
set_error_handler('myErrHdler');
try{
  include("amm.php");

}catch(Exception $e){
  echo $e->getMessage();
}
?>
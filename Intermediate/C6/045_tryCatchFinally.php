<?php
#Try Catch Finally
function myErrHandler(){
  throw new Exception("File Not Found.");
}
set_error_handler("myErrHandler");
try{
  if(fopen('introduction/001_oop.php','r')){
    echo 'You opened.';
  }
}catch(Exception $e){
  echo $e->getMessage();
}finally{
  echo 'I am fucking working.';  
}
<?php
require_once "dal.php";

class Index extends Dal{
  function __construct($id){
    parent::__construct($id);
  }
  function getData(){
   echo $this->id;
  }
}
$obj = new Index(1);
echo "<br>";
$obj->getData();

?>
<?php
require_once 'database/DAL.php';
class Index{
  function __construct(){
    $dal = new DAL();
    $dal->insertSingleData("Coolpad","123.1.0.","Coolpad","123","1");
  }
}
new Index;  
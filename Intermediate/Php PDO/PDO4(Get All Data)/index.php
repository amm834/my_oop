<?php
require_once 'database/DAL.php';
class Index{
  function __construct(){
    $dal = new DAL();
    $dal->getAllShop(1);
  }
}
new Index;
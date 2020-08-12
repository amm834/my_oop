<?php
require_once 'database/DAL.php';
class Index{
  function __construct(){
    $dal = new DAL();
    $dal->getSingleShop(1);
  }
}
new Index;
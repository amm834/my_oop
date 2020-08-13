<?php
require_once 'database/DAL.php';
class Index{
  function __construct(){
    $dal = new DAL();
    $shops = [
      ["Oppo","123.0.0.1","oppo","123",1],
      ["Vivo","123.0.0.1","vivo","123",1]
      ];
    $dal->insertMultipleData($shops);
    
    }
}
new Index;  
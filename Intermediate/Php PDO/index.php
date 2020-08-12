<?php
require_once 'database/db.php';
class Index{
  function __construct(){
    $db = new Database();
  }
}
new Index;
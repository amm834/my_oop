<?php
require_once 'database/db.php';
class Index{
  function __construct(){
    $db = Database::getInstance()->getter();
    echo "<hr>";
    var_dump($db);
  }
}
new Index;
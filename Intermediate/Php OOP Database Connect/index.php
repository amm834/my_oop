<?php
require_once "vendor/autoload.php";
use app\database\DBGen;

class Index {
  private $db;
  function __construct() {
    $this->db = new DBGen();
    $shops = [
      ["Xiaomi",
        "192.1.0.3",
        "Xiaomi",
        "123",
        0],
      ["Hawai",
        "192.1.1.3",
        "Hawai",
        "123",
        1],
      ["Zeon","192.1.0.3","Zeon","123",0]
    ];
    
  $this->db->getAllData(1);
  }
}
new Index;

?>
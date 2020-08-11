<?php
require_once "vendor/autoload.php";
use app\databse\DBGen;
use app\databse\Database;
class Index{
  private $db;
  public function __construct(){
    $this->db = new DBGen();
  }
}
new Index;


?>
<?php
namespace app\database;
class DBGen{
  private $conn;
  const DB_HOST = "localhost:3306";
  const DB_USER = "root";
  const DB_PASS = "p@ssw9rd";
  const DB_NAME = "code2db";
  public function __construct(){
    $this->conn = new \mysqli(self::DB_HOST,self::DB_USER,self::DB_PASS,self::DB_NAME);
  }
}

?>
<?php
require_once 'db.php';
class DAL{
  private $db;
  function __construct(){
    $this->db = Database::getInstance()->getter();
  }
  function getSingleShop($id){
    $stmt = $this->db->prepare("SELECT * FROM shops WHERE id=:id");
    $stmt->bindParam(":id",$id);
    $stmt->execute();
    $stmt->bindColumn("name",$name);
    $stmt->bindColumn("ipadd",$ipadd);
    $result = $stmt->fetchObject();
    echo $result->name;
    echo $result->ipadd;
  }
}
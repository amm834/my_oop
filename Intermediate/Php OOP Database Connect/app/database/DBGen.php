<?php
namespace app\database;

class DBGen {
  private $conn;
  const DB_HOST = "127.0.0.1:3306";
  const DB_USER = "root";
  const DB_PASS = "p@ssw9rd";
  const DB_NAME = "restaurant";
  function __construct() {
    $this->conn = new \mysqli(self::DB_HOST, self::DB_USER, self::DB_PASS, self::DB_NAME);
  }
  public function getSingleShop($id) {
    $stmt = $this->conn->prepare("SELECT * FROM shops WHERE id=?");
    $stmt->bind_param('i', $id);
    $result = $stmt->execute();
    $stmt->bind_result($id, $name, $ipadd, $username, $password, $state, $created_at);
    while ($stmt->fetch()) {
      echo $id."".$name."".$ipadd."".$username."".$password."".$state."".$created_at;
    }
  }
  public function getMultipleShop($state) {
    $stmt = $this->conn->prepare("SELECT * FROM shops WHERE state=?");
    $stmt->bind_param('i', $state);
    $result = $stmt->execute();
    $stmt->bind_result($id, $name, $ipadd, $username, $password, $state, $created_at);
    while ($stmt->fetch()) {
      echo $id."".$name."".$ipadd."".$username."".$password."".$state."".$created_at;
      echo "<hr>";

    }

  }

  function getAllShop() {
    $result = $this->conn->query("SELECT * FROM shops");
    while ($row = $result->fetch_object()) {
      echo $row->name;
    }
  }

  function insertSingleData($name, $ipadd, $username, $password, $state) {
    $datty = date("Y-m-d H:m:s");
    $stmt = $this->conn->prepare("INSERT INTO shops (name,ipadd,username,password,state,created_at) VALUES (?,?,?,?,?,?)");
    $stmt->bind_param("ssssis", $name, $ipadd, $username, $password, $state, $datty);
    $result = $stmt->execute();
    echo $result ? "Insert Success" : "Fail";
  }

  function insertMultipleShop($shops) {
    $datty = date("Y-m-d H:m:s");
    $stmt = $this->conn->prepare("INSERT INTO shops (name,ipadd,username,password,state,created_at) VALUES (?,?,?,?,?,?)");
    foreach ($shops as $shop) {
      $stmt->bind_param("ssssis", $shop[0], $shop[1], $shop[2], $shop[3], $shop[4], $datty);
      $stmt->execute();
      $insertId = $stmt->insert_id;
      echo $insertId." is insert into ".$shop[0]."<hr>";
    }
  }
function updateShop($name,$shopid){
  $stmt = $this->conn->prepare("UPDATE shops SET name=? WHERE id=?");
  $stmt->bind_param("si",$name,$shopid);
  $result = $stmt->execute();
}

function deleteShop($id){
  $stmt = $this->conn->prepare("DELETE FROM shops WHERE id=?");
  $stmt->bind_param("i",$id);
  $result = $stmt->execute();
  echo $result;
}
function getAllData($state){
  $stmt = $this->conn->prepare("SELECT * FROM shops where state=?");
  $stmt->bind_param("i",$state);
  $stmt->execute();
  $result = $stmt->get_result();
  $data = $result->fetch_all();
  echo "<pre>".print_r($data,true)."</pre>";
  foreach ($data as $item){
    echo $item[1]."<br>";
  }
}
}
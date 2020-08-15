<?php
require_once "db.php";

abstract class Dal{
  protected $db;
  protected $id;
  function __construct($id){
$this->id = $id;

$this->db = Dbconnect::getAccess()->getter();
}
protected abstract function getData();
}

?>

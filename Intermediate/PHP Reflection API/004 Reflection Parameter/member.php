<?php
namespace App;
class Member{
  private $isAuth = false;
  private $detailInfo = [
    "name"=>"Aung Aung",
    "age"=>17,
    "isMarried"=>false
    ];
    function setAuth(string $bol="10"){
      $this->isAuth = $bol;
    }
    function getAuth(){
      return $this->isAuth;
    }
    function getDetail(){
      $this->detailInfo;
    }
}

?>
<?php
#late statuc  binding
class One{
   function  className(){
    return __CLASS__;
  }
  static function getClassName(){
    echo static::className();
  }
}
class Two extends One{
   function className(){
    return __CLASS__;
  }
}
$one = new One;
$one->getClassName();
echo "<hr>";
$two = new Two;
$two->getClassName();

?>
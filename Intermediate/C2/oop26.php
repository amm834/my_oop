<?php
#late static binding 2
class One {
  public static $name = "Mg Mg";
  static function getAuthor() {
    echo "His name is ".static::$name;
  }
}
class Two extends One {
  public static function getAuthor(){
    echo "His name is ".static::$name." and live in Letpadan.";
  }
}
One::getAuthor();
echo "<hr>";
Two::getAuthor();
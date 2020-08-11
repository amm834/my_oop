<?php
class MyStatic{
  public $name = 'Ma Ma';
  public static $age = 30;
  static function staFunc(){
    echo self::$age;
  }
}
$static =  new MyStatic;
echo $static->name;
echo "<hr>";
echo MyStatic::$age;
echo MyStatic::staFunc();
echo $static::$age;
echo $static::staFunc();

?>
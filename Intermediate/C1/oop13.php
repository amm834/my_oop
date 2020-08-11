<?php
#trait
trait Doit{
  public function doIt(){
      echo 'This is doit.';

  }
}
trait Hackit{
  public function hackIt(){
      echo 'This is hackit.';

  }
}
trait CallThem{
  use Doit,Hackit;
}
class CallTrait{
  use CallThem;
}
$obj = new CallTrait;
$obj->hackIt();
echo '<br>';
$obj->doIt();
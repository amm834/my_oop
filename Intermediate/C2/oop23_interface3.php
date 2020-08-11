<?php
#multiple interfaces 
interface herInter{
  function herData($data);
}
interface hisInter{
  function hisData($data);
}
//
class Myclass implements hisInter,herInter{
  private $data;
  function hisData($data){
    $this->data = $data;
  }
    function herData($data){
    $this->data = $data;
  }

  function outputn(){
    echo "This is "."<pre>".print_r($this->data,true)."</pre>";
  }
}
$hisAry = ['Mg Mg',"Interested in programming","Live in Letpadan"];

$hAry = ["Ma Ma","Intereste in cosmetive","Live in Yangon"];
// Output of noy
$hobj = new Myclass;
$hobj->hisData($hisAry);
echo $hobj->outputn();
//Output of Girl
$sobj = new Myclass;
$sobj->herData($hAry);
$sobj->outputn();
<?php
#serialize and unserialize
$ary = [
  ["Ma Ma","Ng Mg","Myo Myo"],
  ["Ma Ma","Ng Mg","Myo Myo"],
  ["Ma Ma","Ng Mg","Myo Myo"],
  ["Ma Ma","Ng Mg","Myo Myo"],
  ["Ma Ma","Ng Mg","Myo Myo"],
  ["Ma Ma","Ng Mg","Myo Myo"],
  ["Ma Ma","Ng Mg","Myo Myo"],
  ["Ma Ma","Ng Mg","Myo Myo"],
  ["Ma Ma","Ng Mg","Myo Myo"],
  ["Ma Ma","Ng Mg","Myo Myo"],
  ["Ma Ma","Ng Mg","Myo Myo"]
  ];
  echo "<hr>";
  $serializeAry = serialize($ary);
  echo $serializeAry."<hr>";
  $unserializeAry = unserialize($serializeAry);
    echo "<pre>".print_r($unserializeAry,true)."</pre>";


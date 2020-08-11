<?php
#Complex Type Casting
class Car{
  public $brand,$modal,$warrenty;
  function setBrand(string $brand){
    $this->brand = $brand;
  }
  function getBrand():string
  {
    return $this->brand;
  }
  function setModal(int $modal){
    $this->modal = $modal;
  }
  function getModal():int
  {
    return $this->modal;
  }
  function setWarrenty(bool $warrenty){
    $this->warrenry = $warrenty;
  }
  function getWarrenty():bool
  {
    return $this->warrenry;
  }
}
class Driver{
  public $name,$age,$salary;
  function __construct(string $name,int $age,float $salary){
    $this->name = $name;
    $this->age = $age;
    $this->salary = $salary;
  }
  function getDeiverName():string
  {
    return $this->name;
  }
function getAge():int{
    return $this->age;
  }
  function getSalary():float
  {
    return $this->salary;
  }
}
class Rent{
  public $driver,$car;
  function __construct(Car $car,Driver $driver){
    $this->driver = $driver;
    $this->car = $car;
  }
  function getCar():Car{
    return $this->car;
  }
  function getDriver():Driver{
    return $this->driver;
  }
}
$toyota = new Car;
$toyota->setBrand("Toyota");
$toyota->setModal(2019);
$toyota->setWarrenty(TRUE);

$marcedi = new Car;
$marcedi->setBrand("Marcedi");
$marcedi->setModal(2000);
$marcedi->setWarrenty(FALSE);

$dMgMg = new Driver("Mg Mg",19,26.7);
$dAungAung = new Driver("Aung Aung",23,30);
$rent1 = new Rent($toyota,$dMgMg);
$rent2 = new Rent($marcedi,$dAungAung);
$list = [$rent1,$rent2];
$a = serialize($list);
$b = unserialize($a);
echo "<pre>".print_r($b,true)."</pre>";
echo $list[1]->getDriver()->getDeiverName();
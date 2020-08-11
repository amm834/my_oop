<?php
    #method overloading
    #inheritant
    class Myclass{
        public $name = "Mg Mg";
        public function doIt(){
            echo "This is doit method."."<br>";
        }
        public function myMethod(){
            echo "This is parent method.";
        }
    }
    class SecondClass extends Myclass {
        function myMethod (){
            echo "This is overloading to parent method.";
        }
    }
    $parent = new Myclass ;
    $parent->myMethod ();
    echo "<br>";
    $obj = new SecondClass ;
    $obj->doIt();
    $obj->myMethod();
?>
<?php
class Cars{

   var $door_count = 4;
   var  $wheel_count = 6;
    function greeting(){
        return "This car has ".$this->door_count." wheels";
 
    }

}

$cars = new Cars();
$mercedies = new Cars();
echo $cars->wheel_count = 12;

echo "<br>";

echo $mercedies->door_count."<br>";

echo "<br>";

echo $cars->greeting();



?>
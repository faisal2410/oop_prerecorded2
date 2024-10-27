<?php
include "Car.php";

class Garage
{
    public function parkCar(Car $car):void
    {
        echo "Parking car: ".$car->getModel()."\n";
    }
}


$myCar=new Car("Tesla Model 5");
$garage=new Garage();

$garage->parkCar($myCar);


<?php
include "Motorcycle.php";
include "Product.php";
class Driver
{
    public function startVehicle(Drivable $vechile):void
    {
        $vechile->drive();
    }
}

$pd=new Product("test");
// $bike =new Motorcycle();
$driver=new Driver();

$driver->startVehicle($pd);

// $driver->startVehicle($bike);


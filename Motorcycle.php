<?php
include "Drivable.php";
class Motorcycle implements Drivable
{
    public function drive(): void
    {
        echo "Motorcycle is driving \n";
    }
}
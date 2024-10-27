<?php

class Calculator
{
    public function add(int $a, int $b):int
    {
        return $a+$b;
    }
}

$calculator =new Calculator();

echo $calculator->add(5.2,10);

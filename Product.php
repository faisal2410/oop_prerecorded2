<?php
class Product implements Drivable 
{
    private string $name;
    public function __construct(string $name)
    
    {
        $this->name=$name;
    }

    public function getName():string
    {
        return $this->name;
    }

    public function drive(): void
    {
        echo "test";
    }
}
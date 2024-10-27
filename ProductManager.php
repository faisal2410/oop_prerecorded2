<?php
include "Product.php";

class ProductManager
{
    public function addProducts(array $products):void
    {
        foreach($products as $product){
            if(!$product instanceof Product){
                throw new InvalidArgumentException("All items must be type product");

            }

            echo "Adding product: ".$product->getName()."\n";
        }
    }
}

$product1=new Product("Laptop");
$product2=new Product("SmartPhone");



$manager=new ProductManager();
$manager->addProducts([$product1, $product2,"test"]);


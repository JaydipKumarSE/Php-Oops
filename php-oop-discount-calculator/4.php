<!-- Question 4 — Object Interaction

Create a class Product.

Requirements

Properties: name, price

Method:

getDiscountedPrice($percent)

Task

Create an object.

Calculate discounted price using method.

Print result.

Goal

Passing arguments to methods

Logic inside class -->



<?php

class Product
{
    public $name;
    public $price;

    public function setnameprice($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function setDiscountedPrice($discount)
    {
        $this->price = $this->price - $discount;
    }

    public function getnameprice()
    {
        return $this->name . "_" .
            $this->price;
    }

    public function getDiscountedPrice()
    {
        return $this->price;
    }
}

$show = new Product();
$show->setnameprice("Car", 300000);
echo $show->getnameprice();
$show->setDiscountedPrice(200000);
echo $show->getDiscountedPrice();

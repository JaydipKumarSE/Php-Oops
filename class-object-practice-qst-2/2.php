<!-- Question 2 — Multiple Objects

Create a class Laptop.

Requirements

Properties: brand, price

Methods:

setData($brand, $price)

getData()

Task

Create two laptop objects.

Assign different values.

Print details of both.

Goal

Understanding separate memory for objects -->

<?php

class Laptop
{
    public $brand;
    public $price;

    public function setbrand($brand)
    {
        $this->brand = $brand;
    }

    public function setprice($price)
    {
        $this->price = $price;
    }

    public function getbrand()
    {
        return $this->brand;
    }

    public function getprice()
    {
        return $this->price;
    }
}

$display = new Laptop();
$display->setbrand("HP");
echo  "The brand name is : " . $display->getbrand() . "<br>";
$display->setprice(45000);
echo "The total Price is :" . $display->getprice() . "<br>";

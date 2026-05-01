<!-- Question 1 — Basic Constructor

Create a class Car.

Requirements

Properties: brand, model

Constructor initializes both.

Methods:

getDetails()

Task

Create object using constructor.

Print details.

Goal

Automatic initialization -->


<?php

class Car
{
    public $brand;
    public $model;

    public function __construct($brand, $model)
    {
        $this->brand = $brand;
        $this->model = $model;
    }
}

$show = new Car("Suzuki", 2025);
echo "The car brand name is :- " . $show->brand . "<br>";
echo "The car model is :- " . $show->model . "<br>";

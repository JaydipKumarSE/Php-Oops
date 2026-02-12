<!-- Using destructor with  objects  -->

<?php

class Laptop
{


    public function __construct(public $name, public $model, public $brand, public $generation)

    // ! you can write public inside the method properties no issue will working ;


    {
        $this->name = $name;
        $this->model = $model;
        $this->brand = $brand;
        $this->generation = $generation;
    }

    public function getdetails()
    {
        return $this->name . "_" . $this->model . "_" . $this->brand . "_" . $this->generation;
    }

    // ! The getdetails function  is optional you can write or not but still working ;


    public function __destruct()
    {
        echo "The all objects unseted";
    }
}

$show = new Laptop("jaydip_Kumar", "5700utf", "HP", "12th_Generation");
echo "User Names :-" . $show->name . "<br>";
echo "Laptop Model :-" . $show->model . "<br>";
echo "Laptop Brands :- " . $show->brand . "<br>";
echo "Laptop Generation :-" . $show->generation . "<br>";

unset($show);

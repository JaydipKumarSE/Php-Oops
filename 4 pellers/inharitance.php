<?php

class Animal
{
    public $type = "Animal";

    public function eat()
    {
        echo "Eating...";
    }
}


class Dog extends Animal
{
    public function bark()
    {
        echo "Barking...";
    }
}

$dog = new Dog();
echo $dog->type;
$dog->eat();
$dog->bark();

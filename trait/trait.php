<?php

trait speed
{
    public function speeds()
    {
        echo "100km/h" . "<br>";
    }
}

class Bike
{
    use speed;
}

class Car
{
    use speed;
}

class Train
{
    use speed;
}

$bike = new Bike();
$car = new Car();
$train = new Train();

$bike->speeds();
$car->speeds();
$train->speeds();

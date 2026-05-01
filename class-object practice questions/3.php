<!-- Question 3 — Method Logic

Create a class Rectangle.

Requirements

Properties: length, width

Methods:

setDimensions($l, $w)

area()

perimeter()

Task

Create object.

Set dimensions.

Print area and perimeter.

Goal

Object performing computation -->

<?php

class Rectangle
{
    public $length;
    public $width;

    public function setarea($length, $width)
    {
        $this->length = $length;
        $this->width = $width;
    }

    public function getarea()
    {
        return $this->length * $this->width;
    }

    public function perimeter()
    {
        return 2 * ($this->length + $this->width);
    }
}

$result = new Rectangle();
$result->setarea(200, 200);
echo $result->getarea() . "<br>";

echo $result->perimeter() . "<br>";

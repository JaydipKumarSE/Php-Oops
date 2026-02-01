<?php

class A
{
    private $x = 10;
    public function getX()
    {
        return $this->x;
    }
}


abstract class V
{
    abstract function run();
}
class Car extends V
{
    function run()
    {
        echo "Car runs<br>";
    }
}


class P
{
    function show()
    {
        echo "Parent<br>";
    }
}
class C extends P
{
    function show()
    {
        echo "Child<br>";
    }
}

interface I
{
    function doIt();
}
class X implements I
{
    function doIt()
    {
        echo "Done<br>";
    }
}



echo "Encapsulation: " . (new A)->getX() . "<br>";
(new Car)->run();
(new C)->show();
(new X)->doIt();

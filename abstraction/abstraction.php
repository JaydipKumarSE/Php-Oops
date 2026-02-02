<?php
abstract class Bank
{
    abstract public function getRate();
}

class SBI extends Bank
{
    public function getRate()
    {
        return "5%";
    }
}
    
$b = new SBI();
echo "Abstraction: " . $b->getRate();



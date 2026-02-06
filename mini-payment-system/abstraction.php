<?php

// ! Payments Systems mini projects .

abstract class payments
{

    abstract public function pay();
}


class UPI extends payments
{


    public function pay()
    {
        return "Payment via UPI using";
    }
}

class Netbanking extends payments
{

    public function pay()
    {
        return "Payments via Net Banking";
    }
}

$upi = new UPI();
$net = new Netbanking();


echo $upi->pay();
echo $net->pay();

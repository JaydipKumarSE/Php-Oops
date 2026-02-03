<?php

interface Payment
{
    public function pay();
}

class UPI implements Payment
{

    public function pay()
    {
        return "Paid via UPI";
    }
}

$output = new UPI();
echo $output->pay();

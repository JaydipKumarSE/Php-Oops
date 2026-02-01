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

$p = new UPI();
echo "Interface: " . $p->pay();

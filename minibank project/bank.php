<?php

class BankAccount
{
    private $balance = 0;

    public function deposit($amount)
    {
        if ($amount > 0) {
            $this->balance += $amount;
        }
    }


    public function withdraw($amount)
    {
        if ($amount > 0 && $amount <= $this->balance) {
            $this->balance -= $amount;
        } else {
            echo "Insufficient Balance<br>";
        }
    }
    public function getBalance()
    {
        return $this->balance;
    }
}


$acc = new BankAccount();

$acc->deposit(5000);
$acc->withdraw(2000);

echo "Your Balance is: " . $acc->getBalance();

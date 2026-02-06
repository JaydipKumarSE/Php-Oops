<?php

//  !Ek BankAccount class banao jisme balance private ho, deposit() paisa add kare, withdraw()
// ! sirf tab paisa nikale jab balance enough ho, aur getBalance() sirf balance dikhaye.


class Bankaccount
{

    public $holder;
    private $balance;


    public function setname($name)
    {

        $this->holder = $name;
    }

    public function setbalance($balance)
    {
        $this->balance = $balance;
    }

    public function deposite($deposite)
    {
        $this->balance = $this->balance + $deposite;
    }

    public function withdrawal($deposite)
    {
        if ($deposite <= $this->balance) {
            $this->balance = $this->balance - $deposite;
            echo "withdrawal successfully" . "<br>";
        } else {
            echo "Sufficient balance" . "<br>";
        }
    }

    public function getname()
    {
        return $this->holder;
    }

    public function getbalance()
    {
        return $this->balance;
    }
}

$check = new Bankaccount();
$check->setname("Jaydip Kumar");
echo $check->getname() . "<br>";
$check->setbalance(2000);
echo $check->getbalance() . "<br>";
$check->deposite(2000);
echo $check->getbalance() . "<br>";
$check->withdrawal(1000);
echo $check->getbalance() . "<br>";

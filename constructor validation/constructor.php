<!-- Question 2 — Constructor Validation
Create a class Account.
Requirements
Private property: balance
Constructor accepts balance.
Balance cannot be negative.
Task
Create object with valid and invalid values.
Print balance.
Goal
Constructor logic
Data protection early -->


<?php

class Account
{
    private $balance;

    public function __construct($balance)
    {


        if ($balance < 0) {
            $this->balance = 0;
            echo "Can not be negative balance";
        } else {
            $this->balance = $balance;
            echo "The Balance Deposite";
        }
    }

    public function getbalance()
    {
        return $this->balance;
    }
}

$show = new Account(12000);
echo $show->getbalance();

$result = new Account(0);
echo $result->getbalance();





class FileHandler
{
    public function __construct()
    {
        echo "File opened<br>";
    }

    public function __destruct()
    {
        echo "File closed<br>";
    }
}

$file = new FileHandler();

unset($file);

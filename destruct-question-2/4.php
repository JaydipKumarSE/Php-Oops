<!-- Create a class DatabaseConnection.

Requirements

Constructor prints "Connected"

Destructor prints "Disconnected"

Method query() prints "Running query"

Task

Create object.

Call method.

Destroy object using unset().

Goal

Real-world destructor usage -->


<?php
class DatabaseConnection
{

    public function __construct()
    {
        echo "Data base connected <br>";
    }

    public function query()
    {
        return "Running <br>";
    }

    public function  __destruct()
    {
        echo "Data base Disconnected <br>";
    }
}

$result = new DatabaseConnection();
echo $result->query();
unset($result);

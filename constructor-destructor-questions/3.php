<!-- Create a class FileHandler.
Requirements
Constructor prints "File opened"
Destructor prints "File closed"
Task
Create object.
Unset object manually.
Observe destructor execution.
Goal
Object lifecycle understanding -->

<?php


class FileHandler
{

    public function __construct()
    {
        echo "File Opened <br>";
    }

    public function __destruct()
    {
        echo "File Closed <br>";
    }
}


$seen = new FileHandler();
unset($seen);


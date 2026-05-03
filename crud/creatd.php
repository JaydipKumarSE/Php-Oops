<?php

$ser = "localhost";
$user = "root";
$pass = "";

$dbconnect = mysqli_connect($ser, $user, $pass);

if (!$dbconnect) {
    die("Connection Failed" . mysqli_connect_error());
}

$dbcreate = "CREATE DATABASE crud1";

if (mysqli_query($dbconnect, $dbcreate)) {
    echo "done" . "<br>";
} else {
    echo "Connection error" . mysqli_connect_error();
}

mysqli_select_db($dbconnect, "crud1");


$nt = "CREATE TABLE customers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fullname VARCHAR(100),
    mail VARCHAR(150)
    -- subject VARCHAR(100),
    -- created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);";


if (mysqli_query($dbconnect, $nt)) {
    echo "table";
} else {
    echo "Connection error" . mysqli_connect_error();
}

mysqli_close($dbconnect);

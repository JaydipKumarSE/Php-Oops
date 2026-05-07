<?php

$ser_name = "localhost";
$user_name = "root";
$pass_name = "";
$db_name = "crud";


$dbconnect = mysqli_connect($ser_name, $user_name, $pass_name, $db_name);

if (!$dbconnect) {
    die("not connected dbs" . mysqli_connect_error());
}

// echo " The connected dbs ";

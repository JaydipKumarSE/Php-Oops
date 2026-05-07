<?php
include 'dbs.php';

// STEP 1: URL se id lo
$id = $_GET['id'];

// STEP 2: Delete query
$datadelet = "DELETE FROM customers WHERE id = $id";

if (mysqli_query($dbconnect, $datadelet)) {
    echo "Your data has been deleted";
} else {
    echo "Your data not deleted";
}

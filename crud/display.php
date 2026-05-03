<?php
include 'dbs.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "SELECT * FROM customers WHERE id='$id'";
    $result = mysqli_query($dbconnect, $query);

    if ($result->num_rows == 1) {
        $row = mysqli_fetch_assoc($result);
        echo "<h2>Customer Details</h2>";
        echo "ID: " . $row['id'] . "<br>";
        echo "Name: " . $row['fullname'] . "<br>";
        echo "Email: " . $row['mail'] . "<br>";
    } else {
        echo "Record not found!";
    }
} else {
    echo "ID not provided!";
}

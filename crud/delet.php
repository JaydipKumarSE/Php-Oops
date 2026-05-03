<?php
include 'dbs.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // SQL to delete the record
    $deleteQuery = "DELETE FROM customers WHERE id='$id'";
    if (mysqli_query($dbconnect, $deleteQuery)) {
        // Redirect back to main table page after deletion
        header("Location: view.php"); // Replace index.php with your main table page
        exit;
    } else {
        echo "Error deleting record: " . mysqli_error($dbconnect);
    }
} else {
    echo "ID not provided!";
}

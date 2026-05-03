<?php
include 'dbs.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];


    $query = "SELECT * FROM customers WHERE id='$id'";
    $result = mysqli_query($dbconnect, $query);
    if ($result->num_rows == 1) {
        $row = mysqli_fetch_assoc($result);
    } else {
        echo "Record not found!";
        exit;
    }
} else {
    echo "ID not provided!";
    exit;
}




if (isset($_POST['update'])) {
    $fullname = $_POST['fullname'];
    $mail = $_POST['mail'];

    $updateQuery = "UPDATE customers SET fullname='$fullname', mail='$mail' WHERE id='$id'";
    if (mysqli_query($dbconnect, $updateQuery)) {
        header("Location: view.php");
        exit;
    } else {
        echo "Error updating record: " . mysqli_error($dbconnect);
    }
}
?>

<form method="POST">
    <label>Name:</label>
    <input type="text" name="fullname" value="<?php echo $row['fullname']; ?>" required><br><br>

    <label>Email:</label>
    <input type="email" name="mail" value="<?php echo $row['mail']; ?>" required><br><br>

    <input type="submit" name="update" value="Update">
</form>
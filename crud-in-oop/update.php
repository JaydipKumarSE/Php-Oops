<?php
include 'dbs.php';

if (isset($_POST['submit'])) {

    $id = $_POST['id'];
    $uname = $_POST['uname'];
    $umail = $_POST['uemail'];

    $dataupdate = "UPDATE customers SET fullname='$uname', mail='$umail' WHERE id='$id'";

    if (mysqli_query($dbconnect, $dataupdate)) {
        echo "Data updated successfully";
    } else {
        echo "Data not updated";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Update Form</title>
</head>

<body>

    <form method="POST">
        <input type="hidden" name="id" value="1">

        <input type="text" name="uname" placeholder="Enter name" required><br><br>
        <input type="email" name="uemail" placeholder="Enter email" required><br><br>

        <button type="submit" name="submit">Submit</button>
    </form>

</body>

</html>
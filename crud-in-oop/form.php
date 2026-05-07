<?php


include 'dbs.php';


if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];


    $datain = "INSERT INTO customers (fullname , mail) VALUES ('$name', '$email')";

    if ($dbconnect->query($datain) === True) {
        echo "The data successfully entered";
    } else {
        echo " The data not entered";
    }
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>form </title>
</head>

<body>

    <form action="" method="POST">
        <input type="text" id="name" name="name" placeholder="entered the name" required><br><br>
        <input type="text" id="email" name="email" placeholder="entered the email" required><br><br>
        <button type="submit" name="submit"> Submit </button>
    </form>
</body>
<html>
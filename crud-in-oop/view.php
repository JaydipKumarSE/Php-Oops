<?php

include 'dbs.php';

$readdata = "SELECT * FROM customers ";

$check = mysqli_query($dbconnect, $readdata);

?>
<table border="1" cellpadding="10" cellspacing="0" ;>
    <tr>
        <th>ID </th>
        <th>Name</th>
        <th>Email</th>
        <th>delete</th>
        <th>Update</th>
        <th>Views</th>


    </tr>



    <?php

    if ($check->num_rows > 0) {
        while ($rows = $check->fetch_assoc()) {
    ?>
            <tr>

                <td><?php echo $rows['id'] ?><br></td>
                <td><?php echo $rows['fullname'] ?><br></td>
                <td><?php echo $rows['mail'] ?><br></td>
                <td> <a href="delet.php"> <img style="height:28px;width:28px;text-align:center;" src="img/delete.png"></a></td>
                <td> <a href="update.php"> <img style="height:28px;width:28px;text-align:center;" src="img/edit-icon.png"></a></td>
                <td> <a href="display.php"> <img style="height:28px;width:28px;text-align:center;" src="img/view.png"></a></td>

            </tr>

    <?php
        }
    } else {
        // echo "<tr><td colspan='4'>No data found</td></tr>";
    }

    ?>
</table>
<!DOCTYPE html>
<html>

<head>
    <title>delete form </title>
</head>

<body>
    <!-- <a href="delet.php" style="background-color:orange;text-decoration:none;padding:10px;font-size:14px;">delete </a> -->
</body>

</html>
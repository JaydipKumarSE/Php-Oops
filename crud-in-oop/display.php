<?php

include 'dbs.php';

$readdata = "SELECT * FROM customers ";



$check = mysqli_query($dbconnect, $readdata);


?>

<table border="1" cellpadding="10" cellspacing="0" ;>

    <th>ID</th>
    <th>Name </th>
    <th>Email</th>

    <?php
    if ($check->num_rows > 0) {
        while ($rows = $check->fetch_assoc()) {
    ?>

            <tr>
                <td><?php echo $rows['id'] ?> <br></td>
                <td><?php echo $rows['fullname'] ?> <br></td>
                <td><?php echo $rows['mail'] ?> <br></td>

            </tr>


    <?php
        }
    } else {
        // echo "<tr><td colspan='4'>No data found</td></tr>";
    }

    ?>

</table>
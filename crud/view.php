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
        <!-- <th> Add </th> -->


    </tr>



    <?php

    if ($check->num_rows > 0) {
        while ($rows = $check->fetch_assoc()) {
    ?>
            <tr>

                <td><?php echo $rows['id'] ?><br></td>
                <td><?php echo $rows['fullname'] ?><br></td>
                <td><?php echo $rows['mail'] ?><br></td>

                <td>
                    <a href="delet.php?id=<?php echo $rows['id']; ?>">
                        <img style="height:28px;width:28px;" src="img/delete.png">
                    </a>
                </td>

                <td>
                    <a href="update.php?id=<?php echo $rows['id']; ?>">
                        <img style="height:28px;width:28px;" src="img/edit-icon.png">
                    </a>
                </td>

                <td>
                    <a href="display.php?id=<?php echo $rows['id']; ?>">
                        <img style="height:28px;width:28px;" src="img/view.png">
                    </a>
                </td>



            </tr>

    <?php
        }
    } else {
    }

    ?>
</table>
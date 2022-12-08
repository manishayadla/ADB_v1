<?php 

include "config.php";

$sql = "SELECT * FROM bill";

$result = $conn->query($sql);

?>

<!DOCTYPE html>

<html>

<head>

    <title>View Bill</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>

<body>

    <div class="container">

        <h2>View Bill</h2>

<table class="table">

    <thead>
        <tr>

        <th>Bill ID</th>

        <th>Doc Charges</th>

        <th>Room Charges</th>

        <th>Medical Charges</th>
        <th>Action</th>
    </tr>

    </thead>

    <tbody> 

        <?php

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {

        ?>

                    <tr>

                    <td><?php echo $row['Bill_Id']; ?></td>

                    <td><?php echo $row['Doc_Charges']; ?></td>

                    <td><?php echo $row['Room_Charges']; ?></td>

                    <td><?php echo $row['Medical_Charges']; ?></td>

                    <td><a class="btn btn-info" href="updateBill.php?Bill_Id=<?php echo $row['Bill_Id']; ?>">Edit</a>&nbsp;<a class="btn btn-danger" href="deleteBill.php?Bill_Id=<?php echo $row['Bill_Id']; ?>">Delete</a></td>

                    </tr>                       

        <?php       }

            }

        ?>                

    </tbody>

</table>

    </div> 

</body>

</html>
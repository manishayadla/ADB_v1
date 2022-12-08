<?php 

include "config.php";

$sql = "SELECT * FROM diagnosis";

$result = $conn->query($sql);

?>

<!DOCTYPE html>

<html>

<head>

    <title>View Diagnosis</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>

<body>

    <div class="container">

        <h2>View Diagnosis</h2>

<table class="table">

    <thead>
        <tr>

        <th>Diagnosis Id</th>

        <th>Results</th>
        <th>Action</th>
    </tr>

    </thead>

    <tbody> 

        <?php

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {

        ?>

                    <tr>

                    <td><?php echo $row['Diagnosis_Id']; ?></td>

                    <td><?php echo $row['Results']; ?></td>
                    <td><a class="btn btn-info" href="updateDiagnosis.php?Diagnosis_Id=<?php echo $row['Diagnosis_Id']; ?>">Edit</a>&nbsp;<a class="btn btn-danger" href="deleteDiagnosis.php?Diagnosis_Id=<?php echo $row['Diagnosis_Id']; ?>">Delete</a></td>

                    </tr>                       

        <?php       }

            }

        ?>                

    </tbody>

</table>

    </div> 

</body>

</html>
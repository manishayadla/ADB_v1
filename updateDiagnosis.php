<?php 

include "config.php";

    if (isset($_POST['update'])) {

        $Diagnosis_Id = $_POST['Diagnosis_Id'];
        $Results = $_POST['Results'];

        $sql = "UPDATE `diagnosis` SET `Diagnosis_Id`='$Diagnosis_Id',`Results`='$Results' WHERE `Diagnosis_Id`='$Diagnosis_Id'"; 

        $result = $conn->query($sql); 

        if ($result == TRUE) {

            echo "Record updated successfully.";
            header('Location: viewDiagnosis.php');

        }else{

            echo "Error:" . $sql . "<br>" . $conn->error;

        }

    } 

if (isset($_GET['Diagnosis_Id'])) {

    $Diagnosis_Id = $_GET['Diagnosis_Id']; 

    $sql = "SELECT * FROM `diagnosis` WHERE `Diagnosis_Id`='$Diagnosis_Id'";

    $result = $conn->query($sql); 



    if ($result->num_rows > 0) {        

        while ($row = $result->fetch_assoc()) {

            $Diagnosis_Id = $row['Diagnosis_Id'];
            $Results = $row['Results'];

        } 

    ?>

        <h2>Diagnosis Update Form</h2>

<form action="" method="POST">

  <fieldset>

    <legend>Enter Diagnosis Information:</legend>

    Diagnosis ID:<br>

    <input type="number" name="Diagnosis_Id" value="<?php echo $Diagnosis_Id; ?>">

    <br>

    Results:<br>

    <input type="text" name="Results" value="<?php echo $Results; ?>">

    <br>

    <br><br>

    <input type="submit" name="update" value="Update">

    <br><br>
    <a href="index.php">Return to Home</a>

  </fieldset>

</form>

        </body>

        </html> 

    <?php

    } else{ 

        header('Location: viewDiagnosis.php');

    } 

}

?> 
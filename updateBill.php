<?php 

include "config.php";

    if (isset($_POST['update'])) {

        $Bill_Id = $_POST['Bill_Id'];
        $Doc_Charges = $_POST['Doc_Charges'];
        $Room_Charges = $_POST['Room_Charges'];
        $Medical_Charges = $_POST['Medical_Charges'];

        $sql = "UPDATE `bill` SET `Bill_Id`='$Bill_Id',`Doc_Charges`='$Doc_Charges',`Room_Charges`='$Room_Charges',`Medical_Charges`='$Medical_Charges' WHERE `Bill_Id`='$Bill_Id'"; 

        $result = $conn->query($sql); 

        if ($result == TRUE) {

            echo "Record updated successfully.";
            header('Location: viewBill.php');

        }else{

            echo "Error:" . $sql . "<br>" . $conn->error;

        }

    } 

if (isset($_GET['Bill_Id'])) {

    $Bill_Id = $_GET['Bill_Id']; 

    $sql = "SELECT * FROM `bill` WHERE `Bill_Id`='$Bill_Id'";

    $result = $conn->query($sql); 



    if ($result->num_rows > 0) {        

        while ($row = $result->fetch_assoc()) {

            $Bill_Id = $row['Bill_Id'];
            $Doc_Charges = $row['Doc_Charges'];
            $Room_Charges = $row['Room_Charges'];
            $Medical_Charges = $row['Medical_Charges'];


        } 

    ?>

        <h2>Bill Update Form</h2>

<form action="" method="POST">

  <fieldset>

    <legend>Enter Bill Information:</legend>

    Bill ID:<br>

    <input type="number" name="Bill_Id" value="<?php echo $Bill_Id; ?>">

    <br>

    Doc Charges:<br>

    <input type="number" name="Doc_Charges" value="<?php echo $Doc_Charges; ?>">

    <br>

    Room Charges:<br>

    <input type="number" name="Room_Charges" value="<?php echo $Room_Charges; ?>">

    <br>

    Medical Charges:<br>

    <input type="number" name="Medical_Charges" value="<?php echo $Medical_Charges; ?>">

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

        header('Location: viewABill.php');

    } 

}

?> 
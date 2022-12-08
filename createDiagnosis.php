<?php 

include "config.php";

  if (isset($_POST['submit'])) {

    $Diagnosis_Id = $_POST['Diagnosis_Id'];
    $Results = $_POST['Results'];

     $sql = "INSERT INTO `auction`(`Diagnosis_Id`, `Results`) VALUES ($Diagnosis_Id, $Results)";

    $result = $conn->query($sql);

    if ($result == TRUE) {

      echo "New record created successfully.";

    }else{

      echo "Error:". $sql . "<br>". $conn->error;

    } 

    $conn->close(); 

  }

?>

<!DOCTYPE html>

<html>
<body>

<h2>Create Auction</h2>

<form action="" method="POST">

  <fieldset>

    <legend>Enter Auction Information:</legend>

    Diagnosis ID:<br>

    <input type="number" name="Diagnosis_Id">

    <br>

    Results:<br>

    <input type="text" name="Results">

    <br>

    <br><br>

    <input type="submit" name="submit" value="submit">

    <br><br>
    <a href="index.php">Return to Home</a>

  </fieldset>

</form>

</body>

</html>
<?php 

include "config.php";

  if (isset($_POST['submit'])) {

    $Bill_Id = $_POST['Bill_Id'];
    $Doc_Charges = $_POST['Doc_Charges'];
    $Room_Charges = $_POST['Room_Charges'];
    $Medical_Charges = $_POST['Medical_Charges'];
    
     $sql = "INSERT INTO `bill`(`Bill_Id`, `Doc_Charges`, `Room_Charges`, `Medical_Charges`) VALUES ('$Bill_Id', '$Doc_Charges', '$Room_Charges', '$Medical_Charges')";


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

<h2>Create Bill</h2>

<form action="" method="POST">

  <fieldset>

    <legend>Enter Bill Information:</legend>

    Bill ID:<br>

    <input type="number" name="Bill_Id">

    <br>

    Doc Charges:<br>

    <input type="number" name="Doc_Charges">

    <br>

    Room Charges:<br>

    <input type="number" name="Room_Charges">

    <br>

    Medical Charges:<br>

    <input type="number" name="Medical_Charges">

    <br>

    <br><br>

    <input type="submit" name="submit" value="submit">

    <br><br>
    <a href="index.php">Return to Home</a>

  </fieldset>

</form>

</body>

</html>
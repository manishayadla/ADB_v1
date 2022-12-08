<?php 

include "config.php"; 

if (isset($_GET['Diagnosis_Id'])) {

    $auction_id = $_GET['Diagnosis_Id'];

    $sql = "DELETE FROM `diagnosis` WHERE `Diagnosis_Id`='$auction_id'";

     $result = $conn->query($sql);

     if ($result == TRUE) {

        echo "Record deleted successfully.";
        header('Location: viewDiagnosis.php');

    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 

?>
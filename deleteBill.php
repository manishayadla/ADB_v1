<?php 

include "config.php"; 

if (isset($_GET['Bill_Id'])) {

    $user_id = $_GET['Bill_Id'];

    $sql = "DELETE FROM `bill` WHERE `Bill_Id`='$user_id'";

     $result = $conn->query($sql);

     if ($result == TRUE) {

        echo "Record deleted successfully.";
        header('Location: viewBill.php');

    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 

?>


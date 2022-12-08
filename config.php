<?php

$host = "adb-yadlamanisha:us-central1:manishayadla";

$username = "root"; 

$password = "123"; 

$dbname = "hospitalmanagement"; 



$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);

}

?> 

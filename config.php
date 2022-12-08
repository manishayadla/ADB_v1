<?php

$host;

$username = "root"; 

$password = ""; 

$dbname = "hospitalmanagement"; 

public function __construct() 
{
    $this->host = getenv(varname:'MYSQL_HOST');
}

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);

}

?> 

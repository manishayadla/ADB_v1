<?php
$username = "manisha"; // e.g. 'your_db_user'
           $password = "123"; // e.g. 'your_db_password'
            $dbName = "hospitalmanagement"; // e.g. 'your_db_name'
            $instanceUnixSocket = "/cloudsql/adb-yadlamanisha:us-central1:manishayadla"; // e.g. '/cloudsql/project:region:instance'


try {
 $dsn = sprintf(
                'mysql:dbname=%s;unix_socket=%s',
                $dbName,
                $instanceUnixSocket
            );

            // Connect to the database.
            $conn = new PDO($dsn,$username,$password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>
            
 

<?php
$id = $_GET['id'];
try {
    $conn = new PDO("mysql:host=localhost;dbname=school", "root", "");
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "DELETE FROM users WHERE ID = $id";
    $conn->exec($sql);

   // echo "Successfully Deleted to the Database";

   header("Location: users.php");
   exit(0);
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}
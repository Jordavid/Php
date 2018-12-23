<?php

$email = $_POST['email'];
//echo $email;

try {
    $conn = new PDO("mysql:host=localhost;dbname=school", "root", "");
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("Select * from user WHERE email = ?");
    $stmt->execute([$email]);

    if( $stmt->rowCount() > 0 ){
      echo "Email already taken";
    } else {
        echo "Valid";
    }
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}

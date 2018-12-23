<?php
$name = $_POST['name'];
$email = $_POST['email'];
$password = md5($_POST['password']);

if($name == "" || $email == "" || $password == ""){
    echo "Check your inputs!";
} else {
    try {

        $conn = new PDO("mysql:host=localhost;dbname=school", "root", "");
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $check = $conn->query("Select * from user WHERE email = '$email'");
        if($check->rowCount() >0 ){
            echo "Email already taken";
        } else {
            $sql = $conn->query("INSERT INTO user (name, email, password) VALUES ('$name', '$email', '$password')");

            if($sql->rowCount() > 0){
                echo "You have successfully been registered!";
            } else {
                echo "Oops, we could'nt process your request!";
            }
        }
    }
    catch(PDOException $e)
    {
        echo "Connection failed: " . $e->getMessage();
    }
}
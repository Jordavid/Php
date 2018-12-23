<?php
$name = $_POST['name'];
$email = $_POST['email'];
$password = md5($_POST['password']);

if($name == "" || $email == "" || $password == ""){
    header("Location: n_register.php");
} else {
    try {
        $conn = new PDO("mysql:host=localhost;dbname=school", "root", "");
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = $conn->prepare("INSERT INTO user (name, email, password) VALUES (?, ?, ?)");
        $sql->execute([$name, $email, $password]);

        // echo "Successfully Added to the Database";

        header("Location: n_login.php");
        exit(0);
    }
    catch(PDOException $e)
    {
        echo "Connection failed: " . $e->getMessage();
    }
}

/*echo '<div class="alert alert-info">';
echo '<span class="glyphicon glyphicon-user text-center"></span> Your Information are: <br>';
echo '<ul>';
foreach ($reg_data as $dat => $regData ){
    echo '<li>Your <b>' . $dat . '</b> is <b> '. $regData . '</b></li>';
}
echo '</ul>';
echo '</div>';*/


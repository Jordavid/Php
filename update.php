<?php
$id = $_POST['id'];
$name = $_POST['name'];
$age = $_POST['age'];
$address = $_POST['address'];
$password = md5($_POST['password']);

echo $id;

    try {
        $conn = new PDO("mysql:host=localhost;dbname=school", "root", "");
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "UPDATE users SET Name = '$name', Age = $age, Address = '$address', Password = '$password' WHERE ID = $id";
        $conn->exec($sql);

        // echo "Successfully Added to the Database";

        header("Location: profile.php?id=$id");
        exit(0);
    }
    catch(PDOException $e)
    {
        echo "Connection failed: " . $e->getMessage();
    }

/*echo '<div class="alert alert-info">';
echo '<span class="glyphicon glyphicon-user text-center"></span> Your Information are: <br>';
echo '<ul>';
foreach ($reg_data as $dat => $regData ){
    echo '<li>Your <b>' . $dat . '</b> is <b> '. $regData . '</b></li>';
}
echo '</ul>';
echo '</div>';*/


<?php
$pname = $_POST['pname'];
$price= $_POST['price'];

$image_name = $_FILES['image']['name'];
$image_temp = $_FILES['image']['tmp_name'];

$dat = date("d-M-Y-H-i-s");
$dest = "uploads/images/$dat"."_"."$image_name";
move_uploaded_file($image_temp, $dest);
$image = $dest;

//die($image);

$description= $_POST['description'];

if($pname == "" || $price == "" || $image == "" || $description == ""){
    header("Location: fileupload.php");
} else {
    try {
        $conn = new PDO("mysql:host=localhost;dbname=school", "root", "");
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = $conn->prepare("INSERT INTO products (pname, price, image, description) VALUES ( ?, ?, ?, ?)");
        $sql->execute([$pname, $price, $image, $description]);


        // echo "Successfully Added to the Database";

        header("Location: products.php");
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


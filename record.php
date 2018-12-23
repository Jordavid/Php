
<?php
include 'libs/helper.php';

$data = $_POST;

$name = $data['name'];
$age = $data['age'];
$address = $data['address'];
$country = $data['country'];

$myFile = fopen('data/users.txt', 'a+');
fwrite($myFile, "Name: $name, Age: $age, Address: $address, Country: $country.* \n");
fclose($myFile);

$file = 'data/users.txt';
$thisFile = fopen($file, 'a+');
$result = fread($thisFile, filesize($file));
$result = str_replace("*", "<br>", $result);
fclose($thisFile);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Record | PHP Training</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-xs-offset-3">
                <h1 class="text-primary">Your information have been recorded to our file system successfully!</h1>
                <h2>Your info: </h2>
                <div class="alert alert-info">
                    <span class="glyphicon glyphicon-user text-center"></span> Your Information are: <br>
                    <ul>
                        <?php foreach ($data as $d => $dat):?>
                            <li>Your <b><?= $d;?></b> is <b><?= $dat;?></b></li>
                        <?php endforeach;?>
                    </ul>
                    <hr class="dl-horizontal">

                    <a href="index.php"><button type="button" class="btn btn-primary">Back</button></a>
                </div>

                <div class="alert alert-success">
                    <h1 class="text-primary">File content</h1>
                    <?= $result; ?>
                </div>
            </div>
        </div>
    </div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>




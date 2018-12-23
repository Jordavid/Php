<?php
/*$reg_data = $_POST;

$name = $_POST['name'];
$age = $_POST['age'];
$address = $_POST['address'];
$password = $_POST['password'];

$password = md5($password);*/
/*session_start();
if(!isset($_SESSION['userInfo'])){
    header("Location: login.php");
    exit(0);
}*/
try {
    $conn = new PDO("mysql:host=localhost;dbname=school", "root", "");
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $products = $conn->query("Select * from products");
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Users</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        body{
            background: black;
        }

        label, thead, th, tbody, td{
            color: white;
        }

        tr:nth-child(even) {
            background: cadetblue;
            color: palegoldenrod;
        }

        thead th{
            text-align: center;
        }

        .row table tr td{
            line-height: 120px;
            padding-left: 5px;
            margin: 0;
        }

    </style>
</head>
<body>
<div class="container">
    <header>
        <div class="row">
            <div class="col-lg-offset-1">
                <a href="#"><img src="img/logo.png" width="150" alt=""></a>
            </div>
        </div>

    </header>
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-home"></span></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Services <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Hosting</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Networking</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Web Design</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Web Development</a></li>
                        </ul>
                    </li>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="register.php">Register</a></li>
                    <li><a href="n_register.php">SRegister</a></li>
                    <li><a href="fileupload.php">F_Register</a></li>
                    <li><a href="n_login.php">SLogin</a></li>
                    <li><a href="profile.php">Profile</a></li>
                    <li><a href="users.php">Users</a></li>
                    <li><a href="user.php">User_A</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <form class="navbar-form navbar-left" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
                    </form>
                </ul>

            </div><!-- /.navbar-collapse -->

        </div><!-- /.container-fluid -->
    </nav>
    <div class="row">
        <div class="col-xs-10 col-xs-offset-1" style="border: 1px dashed white; margin-top: 8px; background: #122b40; border-radius: 10px;">
            <h2 class="text-center" style="color: white; font-weight: 800">Products <span class="glyphicon glyphicon-hand-down"></span> </h2>
            <hr class="dl-horizontal">

            <table class="table table-bordered" style="text-align: center;">
                <thead>
                <th></th>
                <th>ID</th>
                <th>Product name</th>
                <th>Price</th>
                <th>Image</th>
                <th>Description</th>
                <th>Actions</th>
                </thead>
                <tbody>
                <?php foreach ($products as $product) :?>
                    <tr>
                        <td><span class="glyphicon glyphicon-user"></span></td>
                        <td> <?= $product['id']; ?></td>
                        <td> <?= $product['pname']; ?></td>
                        <td> <?= $product['price']; ?></td>
                        <td><a href="#"><img src="<?= $product['image']; ?>" alt="" width="200px" height="120px"></a></td>
                        <td> <?= $product['description']; ?></td>
                        <td style="text-align: center;"><a href="edit.php?id=<?= $user['ID'];?>" class="btn btn-info glyphicon glyphicon-eye-open"></a>
                            <a href="delete.php?id=<?= $user['ID'];?>" class="btn btn-danger glyphicon glyphicon-trash"></a>
                        </td>
                    </tr>
                <?php endforeach;?>
                </tbody>
            </table>
            <!-- <a href="register.php"><button type="button" class="btn btn-primary btn-block">Back to registration page</button></a>
             <a href="index.php"><button type="button" class="btn btn-primary btn-block">Back to Homepage</button></a>-->
        </div>
        <footer>
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 col-lg-offset-0 col-md-offset-0 col-sm-offset-0 col-xs-offset-0" style="background: gainsboro; text-align: center; margin-top: 10px; padding: 20px;"><p>Copyright Reserved 2019</p></div>
            </div>

        </footer>
    </div>

</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>
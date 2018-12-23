<?php
session_start();
if(!isset($_SESSION['userInfo'])){
    header("Location: login.php");
    exit(0);
}
$id = $_SESSION['userInfo']['ID'];

try {
    $conn = new PDO("mysql:host=localhost;dbname=school", "root", "");
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "Select * from users WHERE ID = $id";
    $user = $conn->query($sql);

}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body{
            background: black;
        }

        label{
            color: cadetblue;
        }

        h2{
            color: cadetblue;
            font-weight: 700;
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
                    <li><a href="users.php">Users</a></li>
                    <li><a href="n_register.php">SRegister</a></li>
                    <li><a href="n_login.php">SLogin</a></li>
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
        <div class="col-sm-6 col-sm-offset-3">
            <?php foreach($user as $us):?>
            <form action="rec.php" method="POST">
                <h2>Welcome,  <?= $us['Name'];?></h2>
                <div class="form-group">

                        <label for="name">Name</label>
                        <input type="text" id="name" v-model="name" class="form-control" placeholder="Name" name="name" value="<?=$us['Name'];?>" disabled>

                        <label for="age">Age</label>
                        <input type="number" id="age" v-model="age" class="form-control" placeholder="Age" name="age" value="<?= $us['Age'];?>" disabled>

                        <label for="address">Address</label>
                        <textarea name="address" id="address" cols="15" rows="5" class="form-control" placeholder="Address" v-model="address" disabled><?= $us['Address'];?></textarea>
                        <br>

                    <a href="edit.php?id=<?= $us['ID'];?>" class="btn btn-primary btn-block glyphicon glyphicon-edit">Edit</a>
                </div>
            </form>
            <?php endforeach;?>
            <a href="logout.php" class="btn btn-primary btn-block">Log out</a>
        </div>
        <footer>
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 col-lg-offset-0 col-md-offset-0 col-sm-offset-0 col-xs-offset-0" style="background: gainsboro; text-align: center; margin-top: 10px; padding: 20px;"><p>Copyright Reserved 2019</p></div>
            </div>

        </footer>
    </div>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>

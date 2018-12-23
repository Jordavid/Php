<?php
$id = $_GET['id'];

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
    <title>Edit user</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body{
            background: black;
        }

        label{
            color: white;
        }

        h3, p {
            color: #1b6d85;
            font-weight: bold;
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
                    <li><a href="login.php">Log in</a></li>
                    <li><a href="users.php">Users</a></li>
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
            <form action="update.php" method="POST">
                <h3>Edit</h3>
                <p>Edit your info and click Save to Save your Info</p>
                <div class="form-group">
                    <?php foreach($user as $us):?>

                    <label for="id">ID</label>
                    <input type="number" id="id" name="id" value="<?= $us['ID'];?>" class="form-control" readonly>
                    <label for="name">Name</label>
                    <input type="text" id="name" v-model="name" class="form-control" placeholder="Name" name="name" value="<?=$us['Name'];?>" >

                    <label for="age">Age</label>
                    <input type="number" id="age" v-model="age" class="form-control" placeholder="Age" name="age" value="<?= $us['Age'];?>">

                    <label for="address">Address</label>
                    <textarea name="address" id="address" cols="15" rows="5" class="form-control" placeholder="Address" v-model="address"><?= $us['Address'];?></textarea>

                    <label for="password">Password</label>
                    <input type="text" name="password" id="password" placeholder="Password" class="form-control" value="<?= $us['Password'];?>">
                    <br>

                    <button type="submit" class="btn btn-primary btn-block">Update</button>
                </div>
            </form>
            <a href="profile.php?id=<?= $us['ID'];?>"><button type="button" class="btn btn-primary btn-block">Cancel</button></a>
            <?php endforeach;?>
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

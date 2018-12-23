<?php
   // if(isset($_POST['b_reg'])){

        /*$reg_data = $_POST;

        $name = $_POST['name'];
        $age = $_POST['age'];
        $address = $_POST['address'];
        $password = $_POST['password'];*/

        /*echo '<div class="alert alert-info">';
        echo '<span class="glyphicon glyphicon-user text-center"></span> Your Information are: <br>';
        echo '<ul>';
        foreach ($reg_data as $dat => $regData ){
            echo '<li>Your <b>' . $dat . '</b> is <b> '. $regData . '</b></li>';
        }
        echo '</ul>';
        echo '</div>';*/

        /*try {
            $conn = new PDO("mysql:host=localhost;dbname=school", "root", "");
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "INSERT INTO users (Name, Age, Address, Password) VALUES ('$name', $age, '$address', '$password')";
            $conn->exec($sql);

            echo "Successfully Added to the Database";
        }
        catch(PDOException $e)
        {
            echo "Connection failed: " . $e->getMessage();
        }*/


  //  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration</title>

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

        label{
            color: white;
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
                    <li><a href="login.php">Log in</a></li>
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
    <div class="col-xs-6 col-xs-offset-3" style="border: 1px dashed white; margin-top: 8px; background: #122b40; border-radius: 10px;">
        <h2 class="text-center" style="color: white; font-weight: 800">Register <span class="glyphicon glyphicon-hand-down"></span> </h2>
        <p style="color: white; font-weight: bold;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At commodi cupiditate dolorum est explicabo ipsam maiores molestiae mollitia recusandae temporibus. Amet aperiam eos labore maxime neque nostrum placeat temporibus vitae?</p>
        <hr class="dl-horizontal">
        <form action="rec.php" method="POST">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" v-model="name" class="form-control" placeholder="Name" name="name" value="<?= (isset($_POST['name']))? $_POST['name'] : '';?>">

                <label for="age">Age</label>
                <input type="number" id="age" v-model="age" class="form-control" placeholder="Age" name="age" value="<?= (isset($_POST['age']))? $_POST['age'] : '';?>">

                <label for="address">Address</label>
                <textarea name="address" id="address" cols="15" rows="5" class="form-control" placeholder="Address" v-model="address"><?= (isset($_POST['address']))? $_POST['address'] : '';?></textarea>

                <label for="country">Password</label>
                <input type="password" name="password" id="password" placeholder="Password" class="form-control">
                <br>

                <button type="submit" class="btn btn-primary btn-block" name="b_reg">Register</button>
            </div>
        </form>
        <!--<a href="index.php"><button type="button" class="btn btn-primary btn-block">Home</button></a>-->
        </div>
    </div>
    <footer>
        <div class="row">
            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 col-lg-offset-0 col-md-offset-0 col-sm-offset-0 col-xs-offset-0" style="background: gainsboro; text-align: center; margin-top: 10px; padding: 20px;"><p>Copyright Reserved 2019</p></div>
        </div>

    </footer>
    </div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.js"></script>
<script>
    new Vue({
        el: '#App',
        data: {
            name: '',
            age: '',
            address: '',
            country: '',
            reviewHide: false,
            errMsg: 'Please fill all the inputs above!',
            errHide: false
        },
        methods: {
            showReview: function () {
                if(this.name != '' && this.age != '' && this.address != '' && this.country != ''){
                    this.errHide = false;
                    this.reviewHide == false ? this.reviewHide = true : this.reviewHide = false;
                } else {
                    this.errHide = true;
                }
            },

            validate: function () {
                if(this.name == '' && this.age == '' && this.address == '' && this.country == ''){
                    this.errHide = true;
                    return false;
                } else {
                    this.errHide = false;
                }
            }
        }
    });
</script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>

</body>
</html>
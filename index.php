<?php

    require 'Classes/Student.php';
    require 'Classes/Employee.php';
    require 'Classes/Teacher.php';

    function debug($obj){
        echo '<pre>';
        var_dump($obj);
        echo '</pre>';
    }

//    $std1 = new Student();

   /* $emp1 = new Employee();

    $emp1->setName('Tes');
    $emp1->setAge(5);
    $emp1->setAddress('my Address');
    $emp1->setSalary(8000);*/

   /* echo '<div class="alert alert-info">';
    echo '<h1 class="text-primary">Object created Successfully!</h1>';
    echo '<h2>Class: Student</h2>';
    echo '<ul>';*/
    /*echo 'Name: ' . ' ' . $emp1->getName() . '<br>';
    echo 'Age: ' . ' ' . $emp1->getAge() . '<br>';
    echo 'Address: ' . ' ' . $emp1->getAddress() . '<br>';*/
    /*$emp1->getEmpInfo();
    echo '</ul>';
    echo '</div>';*/

    /*echo 'Student name: ' . ' ' . $std1->getName() . '<br>';
    echo 'Student age: ' . ' ' . $std1->getAge() . '<br>';
    echo 'Student address: ' . ' ' . $std1->getAddress() . '<br>';*/

    //debug($theName);

    $countries = [
        'Egypt' => 'Egypt',
        'United States' => 'United States',
        'United Kingdom' => 'United Kingdom',
        'Mali' => 'Mali',
        'Senegal' => 'Senegal',
        'Ivory Coast' => 'Ivory Cost',
        'France' => 'France',
        'Italy' => 'Italy'
    ];

    $errors = [];



    if(isset($_POST['btn_send'])){
        $data = $_POST;
        $_POST['btn_send'] = 'Clicked';

   /* function countStr($str){
        $arr = str_split($str);
        return count($arr);
    }*/

        $name = $data['name'];
        $age = $data['age'];
        $address = $data['address'];
        $country = $data['country'];

        if($name == ''){
            $errors[] = 'Name required';
        } else if (strlen($name) <= 3){
            $errors[] = 'Name should be more than 3 Chars';
        } else if($age == ''){
            $errors[] = 'Age required';
        }else if ($address == ''){
            $errors[] = 'Address required';
        } else if($country == ''){
            $errors = 'Country required';
        }

        /*$myFile = fopen('data/users.txt', 'a+');
        fwrite($myFile, "Name: $name, Age: $age, Address: $address, Country: $country \n");
        fclose($myFile);*/

    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to the Home page</title>

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
        <div id="App">
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
                            <li><a href="#">Home</a></li>
                            <li><a href="register.php">Register</a></li>
                            <li><a href="n_register.php">SRegister</a></li>
                            <li><a href="login.php">Log in</a></li>
                            <li><a href="n_login.php">SLogin</a></li>
                            <li><a href="user.php">User_A</a></li>
                            <li><a href="products.php">Products</a></li>

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
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="5"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="img/slide1.jpg" alt="...">
                        <div class="carousel-caption">
                            <h2>Slider 1</h2>
                        </div>
                    </div>
                    <div class="item">
                        <img src="img/slide2.jpg" alt="...">
                        <div class="carousel-caption">
                            <h2>Slider 2</h2>
                        </div>
                    </div>
                    <div class="item">
                        <img src="img/slide3.jpg" alt="...">
                        <div class="carousel-caption">
                            <h2>Slider 3</h2>
                        </div>
                    </div>
                    <div class="item">
                        <img src="img/slide4.jpg" alt="...">
                        <div class="carousel-caption">
                            <h2>Slider 4</h2>
                        </div>
                    </div>
                    <div class="item">
                        <img src="img/slide5.jpg" alt="...">
                        <div class="carousel-caption">
                            <h2>Slider 5</h2>
                        </div>
                    </div>
                    <div class="item">
                        <img src="img/slide6.png" alt="...">
                        <div class="carousel-caption">
                            <h2>Slider 6</h2>
                        </div>
                    </div>

                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>


            </div>
            <br>
            <div class="container">

                <div class="row">

                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                        <div class="thumbnail">
                            <img src="img/slide1.jpg" alt="...">
                            <div class="caption">
                                <h3>Check this out</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti ea esse facilis impedit magnam modi. A atque debitis, delectus deserunt eaque excepturi iure labore molestias, numquam possimus quas quod recusandae.</p>
                                <p><a href="#" class="btn btn-primary btn-block" role="button">Add to Cart</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3" >
                        <div class="thumbnail">
                            <img src="img/slide2.jpg" alt="...">
                            <div class="caption">
                                <h3>New Arrivals label</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti ea esse facilis impedit magnam modi. A atque debitis, delectus deserunt eaque excepturi iure labore molestias, numquam possimus quas quod recusandae.</p>
                                <p><a href="#" class="btn btn-primary btn-block" role="button">Add to Cart</a>
                            </div>
                        </div>
                    </div>


                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 ">
                        <div class="thumbnail">
                            <img src="img/slide3.jpg" alt="...">
                            <div class="caption">
                                <h3>We make it Good!</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti ea esse facilis impedit magnam modi. A atque debitis, delectus deserunt eaque excepturi iure labore molestias, numquam possimus quas quod recusandae.</p>
                                <p><a href="#" class="btn btn-primary btn-block" role="button">Add to Cart</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 ">
                        <div class="thumbnail">
                            <img src="img/slide4.jpg" alt="...">
                            <div class="caption">
                                <h3>We create Genius </h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti ea esse facilis impedit magnam modi. A atque debitis, delectus deserunt eaque excepturi iure labore molestias, numquam possimus quas quod recusandae.</p>
                                <p><a href="#" class="btn btn-primary btn-block" role="button">Add to Cart</a>
                            </div>
                        </div>
                    </div>

                </div>
                <!--<div class="input-group">

                    <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                    <input type="text" class="form-control" placeholder="Email" id="email"></label>

                </div>-->

            </div>
           <!-- <div class="row">
                <div class="col-xs-6 col-xs-offset-3" style="border: 1px dashed white; margin-top: 8px; background: #122b40; border-radius: 10px;">
                    <h2 class="text-center" style="color: white; font-weight: 800">Registration form <span class="glyphicon glyphicon-hand-down"></span> </h2>
                    <p style="color: white; font-weight: bold;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At commodi cupiditate dolorum est explicabo ipsam maiores molestiae mollitia recusandae temporibus. Amet aperiam eos labore maxime neque nostrum placeat temporibus vitae?</p>
                    <hr class="dl-horizontal">
                    <form action="record.php" method="POST">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" v-model="name" class="form-control" placeholder="Name" name="name" value="<?/*= (isset($_POST['name']))? $_POST['name'] : '';*/?>">

                            <label for="age">Age</label>
                            <input type="number" id="age" v-model="age" class="form-control" placeholder="Age" name="age" value="">

                            <label for="address">Address</label>
                            <textarea name="address" id="address" cols="15" rows="5" class="form-control" placeholder="Address" v-model="address"></textarea>

                            <label for="country">Country</label>
                            <select name="country" id="country" v-model="country" class="form-control">
                                <option value="">Select your country</option>
                                <?php /*foreach ($countries as $ctrCode => $count): */?>
                                    <option value="<?/*= $ctrCode; */?>"><?/*= $count;*/?></option>
                                <?php /*endforeach;*/?>
                            </select>
                            <br>
                            <button type="button" class="btn btn-info btn-block" @click=showReview>Review</button>

                            <button type="submit" class="btn btn-primary btn-block" name="btn_send">Send</button>
                        </div>
                    </form>
                    <a href="register.php"><button type="button" class="btn btn-primary btn-block">Register</button></a>
                    <a href="users.php"><button type="button" class="btn btn-primary btn-block">All Users</button></a>
                    <?php /*if(count($errors)> 0) :*/?>
                    <div class="alert alert-danger">
                        <ul class="list-group">
                            <?php /*foreach ($errors as $error): */?>
                                <li class="list-group-item-danger"><?/*= $error; */?></li>
                            <?php /*endforeach;*/?>
                        </ul>
                    </div>
                    <?php /*endif;*/?>

                    <div class="alert alert-danger" v-if="errHide">
                        {{errMsg}}
                    </div>
                    <div class="alert alert-info" v-if="reviewHide">
                        <b>Name: </b>{{name}} <br>
                        <b>Age: </b>{{age}} <br>
                        <b>Country: </b>{{country}} <br>
                        <b>Address: </b> {{address}}.
                    </div>
                </div>
            </div>-->
            <footer>
                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 col-lg-offset-0 col-md-offset-0 col-sm-offset-0 col-xs-offset-0" style="background: gainsboro; text-align: center; margin-top: 10px; padding: 20px;"><p>Copyright Reserved 2019</p></div>
                </div>

            </footer>
        </div>
    </div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.js"></script>
<script src="js/vue.min.js"></script>
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
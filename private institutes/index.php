<?php
$mydata = "private istitutes";
$localhost = "localhost";
$user_name = "root";
$password = "";
// conect with database
$Mysql = mysqli_connect($localhost, $user_name, $password, $mydata);
// if($Mysql)
// {
//     echo "the connect is true";
// }
// 
// $_SelectCairo = " SELECT * FROM `the institutes` WHERE `governorate`= 'القاهره' ";
// $the_select=mysqli_query($Mysql,$_SelectCairo);
// if($the_select){
//     echo "select cairo true";
// }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./The css Bootstrab/bootstrap.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>The private institutes</title>
</head>

<body>
    <h1 class="text-info text-center">private institutes Project</h1>
    <div class="container col-6 my-5">
        <form method="POST">
            <div class="form-group">
                <label for="Your Name">Put Your Name</label>
                <input type="text" class="form-control" name="name">
            </div>
            <button type="submit" class="btn btn-primary btn-block" name="btn">Okay this my name </button>
        </form>
    </div>
    <div> <?php
            if (isset($_POST['btn'])) {
                echo '<h1 class="text-info text-center">' . "Hello " . $_POST['name'];
                '</h1>';
                echo '<div class="alert alert-dark" role="alert">
                <a href="#" class="alert-link">Youssef </a> choose your city
              </div>';
            }
            ?>
    </div>
    <div class="grid-list2">
        <div class="c1">
            <div class="card" style="width: 18rem;">
                <img src="./img/cairo.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Cairo city</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a class="btn btn-primary" name="cairo" href="./cairo.php"> القاهره </a>
                </div>
            </div>
        </div>
        <div class="c2">
            <div class="card" style="width: 18rem;">
                <img src="./img/alex.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Alexendreia City</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a class="btn btn-primary" name="cairo" href="./Alexendreia.php"> الاسكندريه </a>
                </div>
            </div>
        </div>
        <div class="c3">
            <div class="card" style="width: 18rem;">
                <img src="./img/cina.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Cina City</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a class="btn btn-primary" name="cairo" href="./cena.php"> سينا </a>
                </div>
            </div>
        </div>
    </div>
    <div class="grid-list2">
        <div class="c4">
            <div class="card c3" style="width: 18rem;">
                <img src="./img/domyat.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Domyat City</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a class="btn btn-primary" name="cairo" href="./Domyat.php"> دمياط </a>
                </div>
            </div>
        </div>
        <div class="c5">
            <div class="card" style="width: 18rem;">
                <img src="./img/giza.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Elgiza City</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a class="btn btn-primary" name="cairo" href="./Giza.php"> الجيزه </a>
                </div>
            </div>
        </div>
        <div class="c6">
            <div class="card" style="width: 18rem;">
                <img src="./img/el mansora.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">ElMansora City</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a class="btn btn-primary" name="cairo" href="./elmansora.php"> المنصوره</a>
                </div>
            </div>
        </div>
    </div>
    <div class="see-all">
        <a class="btn btn-danger center" name="cairo" href="./all.php"> SEE ALL </a>
    </div>
    <script src="./The Js Bootstrab/popper.min.js"></script>
    <script src="./The Js Bootstrab/jquery-3.6.1.min.js"></script>
    <script src="./The Js Bootstrab/bootstrap.js"></script>
    <script src="./Javascript/main.js"></script>
</body>

</html>
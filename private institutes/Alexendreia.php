<?php
$mydata="private istitutes";
$localhost="localhost";
$user_name="root";
$password="";
$Mysql=mysqli_connect ( $localhost , $user_name , $password , $mydata);
$_SelectAlex = " SELECT * FROM `the institutes` WHERE `governorate`= 'الاسكندريه' ";
$the_select_Alex=mysqli_query($Mysql,$_SelectAlex);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alexendreia</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./The css Bootstrab/bootstrap.css">
</head>

<body>
<h1 class="text-info text-center"> Alex private institutes</h1>
    <div class="container col-12 my-5">
        <div class="card">
            <div class="card-body">
                <table class="table table-dark">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Expenses</th>
                        <th>The Possibility of installment</th>
                        <th>City</th>
                        <th>Governorate</th>
                        <th>About</th>
                    </tr>
                </thead>
                    <tbody>
                    <?php foreach ( $the_select_Alex as $data){ ?>
                    <tr>
                          <th><?php echo $data['id'] ?></th>
                          <th><?php echo $data['name'] ?></th>
                          <th><?php echo $data['expenses'] ?></th>
                          <th><?php echo $data['the possibility of installment'] ?></th>
                          <th><?php echo $data['city'] ?></th>
                          <th><?php echo $data['governorate'] ?></th>
                          <th><?php echo $data['about'] ?></th>
                        </tr>
                    <?php } ?>
                </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="./The Js Bootstrab/popper.min.js"></script>
    <script src="./The Js Bootstrab/jquery-3.6.1.min.js"></script>
    <script src="./The Js Bootstrab/bootstrap.js"></script>
    <script src="./Javascript/main.js"></script>
</body>
</html>
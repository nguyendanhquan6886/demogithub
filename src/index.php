<?php
session_start();
include './app/model/connectdb.php';
include './app/model/product.php';
include './app/model/cate.php';
include './app/model/khachhang.php';


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce Shop</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="./resources/css/global.css">
</head>

<body>
    <div class="app">
        <?php include('./resources/view/Header.php') ?>
        <div class="content">
            <div class="container">
                <?php
                if (isset($_GET['act'])) {
                    $pageLayout = $_GET['act'];
                    switch ($pageLayout) {
                        case 'home':
                            include('./resources/view/Home.php');
                            break;
                        case 'productinformation';
                            include './resources/view/products/ProductInformation.php';
                            break;
                        case 'login';
                            include './resources/view/account/login.php';
                            break;
                        case 'register';
                            include './resources/view/account/register.php';
                            break;

                        case 'login';
                            include './resources/view/account/login.php';
                            break;

                     
                        case 'logout';
                            include './resources/view/account/logout.php';
                            header("Location:index.php");
                            break;
                    }
                } else {
                    include('./resources/view/Home.php');
                }
                ?>
            </div>
        </div>
        <?php include('./resources/view/Footer.php') ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
</body>

</html>
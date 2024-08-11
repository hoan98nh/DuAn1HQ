<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="./theme/furni-1.0.0/favicon.png">

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap4" />

    <!-- Bootstrap CSS -->
    <link href="./view/asset/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="./view/asset/css/tiny-slider.css" rel="stylesheet">
    <link href="./view/asset/css/style.css" rel="stylesheet">
    <link href="./view/asset/css/custom.css" rel="stylesheet">
    <link rel="stylesheet" href="./view/css/custom.css">
    <script src="https://kit.fontawesome.com/844002cd01.js" crossorigin="anonymous"></script>
    <title>Trang sức HQ</title>
</head>

<body>

    <!-- Start Header/Navigation -->
    <nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

        <div class="container">
            <a class="navbar-brand" href="./"><img src="./theme/logohqhome.PNG"></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsFurni">
                <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link" href="./">Trang chủ</a>
                    </li>
                    <li><a class="nav-link" href="index.php?act=shop">Cửa Hàng</a></li>
                    <!-- <li><a class="nav-link" href="#">Về chúng tôi</a></li>
                    <li><a class="nav-link" href="services.html">Services</a></li>
                    <li><a class="nav-link" href="#">Blog</a></li> -->
                    <li><a class="nav-link" href="index.php?act=contact">Liên Hệ</a></li>
                    <?php
                    if (isset($_SESSION["username"]) && ($_SESSION["username"] != "")) {
                        if ((isset($_SESSION["role"])) && ($_SESSION["role"] == 1)) {
                    ?>
                            <li><a class="nav-link" href="./admin">Quản trị</a></li>
                    <?php
                        }
                    }
                    ?>
                </ul>

                <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5 align-items-center">
                    <?php
                    if (isset($_SESSION["username"]) && ($_SESSION["username"] != "")) {
                    ?>
                        <li>
                            <img src="./view/asset/images/user.svg">
                        </li>
                        <li class="">
                            <span class="text-white fs-6">
                                <?= $_SESSION["username"] ?>
                            </span>
                        </li>
                        <li class="px-2">
                            <span class="ps-1">
                                <a href="index.php?act=logout" class="text-warning">Đăng xuất</a>
                            </span>
                        </li>
                    <?php
                    } else {
                    ?>
                        <li><a class="nav-link" href="index.php?act=loginpage"><img src="./view/asset/images/user.svg"></a></li>
                    <?php
                    }
                    ?>
                    <li><a class="nav-link" href="index.php?act=cart"><img src="./view/asset/images/cart.svg"></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Header/Navigation -->
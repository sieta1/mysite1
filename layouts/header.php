<?php
ob_start();
session_start();
?>
<?php
require_once 'connect/connect.php';

if (isset($_GET['logout'])) {
    unset($_SESSION['name']);
    unset($_SESSION['mail']);
    unset($_SESSION['id']);
    unset($_SESSION['admin']);
    echo 'Çıkış yapıldı';
    #$_GET['status'] = 0;
}


$sql = $db->prepare("SELECT * FROM infos WHERE id='1'");
$sonuc = $sql->execute();
$cek = $sql->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE HTML>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $cek['title']; ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/odometer.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>
<body>

    <!-- preloader -->
    <div id="preloader">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="object" id="object_one"></div>
                <div class="object" id="object_two"></div>
                <div class="object" id="object_three"></div>
            </div>
        </div>
    </div>
    <!-- preloader-end -->

    <!-- Scroll-top -->
    <button class="scroll-top scroll-to-target" data-target="html">
        <i class="fas fa-angle-up"></i>
    </button>
    <!-- Scroll-top-end-->

    <!-- header-area -->
    <header>
        <div id="sticky-header" class="main-header menu-area transparent-header">
            <div class="container-fluid container-full">
                <div class="row">
                    <div class="col-12">
                        <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                        <div class="menu-wrap">
                            <div class="header-bg" data-background="img/bg/header_bg.jpg"></div>
                            <nav class="menu-nav show">
                                <div class="logo">
                                    <a href="index.php">
                                        <img src="img/logo/logo.png" alt="Logo">
                                    </a>
                                </div>
                                <div class="navbar-wrap main-menu d-none d-lg-flex">
                                    <ul class="navigation">
                                        <?php
                                        $menus = $db->prepare("SELECT * FROM menus");
                                        $menus->execute();
                                        while ( $cekM = $menus->fetch(PDO::FETCH_ASSOC)) {
                                            $check = '/phpsitesi/'.$cekM['link'];
                                            $url = $_SERVER['REQUEST_URI'];
                                            ?>
                                            <li class="<?php echo $url === $check ? 'active' : '';  ?>"><a href="<?php echo $cekM['link']; ?>"><?php echo $cekM['name']; ?></a>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                                <div class="header-action d-none d-md-block">
                                    <ul>
                                        <?php
                                        if (isset($_SESSION['mail'])) { 
                                            ?>
                                            <li class="header-btn">
                                                <a href="index.php?logout=1" class="btn gradient-btn">Çıkış Yap</a>
                                            </li>
                                            <?php
                                        }else{ 
                                            ?>
                                            <li class="header-btn">
                                                <a href="login.php" class="btn gradient-btn">Giriş</a>
                                            </li>
                                            <?php
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div class="header-bottom-wrap d-none d-lg-flex">
                            <div class="header-tag-list">
                                <ul>
                                    <li><a href="#">hydroponic</a></li>
                                    <li><a href="#">agriculture</a></li>
                                    <li><a href="#">food</a></li>
                                    <li><a href="#">nutrition</a></li>
                                    <li><a href="#">ACCESSORIES</a></li>
                                </ul>
                            </div>
                            <div class="header-bottom-search">
                                <form action="#">
                                    <input type="text">
                                    <button><i class="fas fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <!-- Mobile Menu  -->
                        <div class="mobile-menu">
                            <div class="menu-backdrop"></div>
                            <div class="close-btn"><i class="fas fa-times"></i></div>

                            <nav class="menu-box">
                                <div class="nav-logo"><a href="index.php"><img src="img/logo/w_logo.png" alt="" title=""></a>
                                </div>
                                <div class="menu-outer">
                                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                                </div>
                                <div class="social-links">
                                    <ul class="clearfix">
                                        <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                        <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                                        <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                        <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                        <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <!-- End Mobile Menu -->
                    </div>
                </div>
            </div>
        </div>
    </header>
        <!-- header-area-end -->
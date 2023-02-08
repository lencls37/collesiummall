<!DOCTYPE html>
<html lang="tr">
    <head>
        <meta charset="utf-8">
        <title>Collesium Mall - Merter / Istanbul / Turkey</title>
        <link rel="icon" href="images/icon.png" type="image/gif" sizes="16x16">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">

        <!-- CSS Files
        ================================================== -->
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" id="bootstrap">
        <link rel="stylesheet" href="css/plugins.css" type="text/css">
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <link rel="stylesheet" href="css/color.css" type="text/css">

        <!-- color scheme -->
        <link rel="stylesheet" href="css/colors/brown.css" type="text/css" id="colors">
    </head>

    <body class="has-menu-bar">

    <?php
    session_start();
    if(!isset($_SESSION['dil'])){
        Global $dil;
        $dil = "tr";
        include "header.php";
    }elseif($_SESSION['dil'] == "tr"){
        Global $dil;
        $dil = "tr";
        include "header.php";
    }elseif ($_SESSION['dil'] == "en"){
        Global $dil;
        $dil = "en";
        include "header_en.php";
    }?>

        <div id="background" data-bgimage="url(resim/slider/collesium-slide-magazalar.jpg) fixed"></div>
        <div class='slider-overlay' style="position: fixed !important;top: 0; left: 0;"></div>
        <div id="content-absolute">

            <!-- subheader -->
            <section id="subheader" class="no-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h4>Collesium</h4>
                            <h1>Mağazalar</h1>
                        </div>
                    </div>
                </div>
            </section>

            <section id="section-main" class="no-bg no-top" aria-label="section-menu">
                <div class="container">
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <div class="de-room">
                                <div class="d-image">
                                    <a href="kat0.php">
                                        <img src="resim/magazalar/kat0.jpg" class="img-fluid" alt="">
                                        <img src="resim/magazalar/2.webp" class="d-img-hover img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="d-text">
                                    <h3>Kat 0 (Zemin)</h3>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="de-room">
                                <div class="d-image">
                                    <a href="kat3.php">
                                        <img src="resim/magazalar/kat3.jpg" class="img-fluid" alt="">
                                        <img src="resim/magazalar/2.webp" class="d-img-hover img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="d-text">
                                    <h3>Kat 3</h3>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="de-room">
                                <div class="d-image">
                                    <a href="kat2.php">
                                        <img src="resim/magazalar/kat2.jpg" class="img-fluid" alt="">
                                        <img src="resim/magazalar/2.webp" class="d-img-hover img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="d-text">
                                    <h3>Kat 2</h3>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="de-room">
                                <div class="d-image">
                                    <a href="kat1.php">
                                        <img src="resim/magazalar/kat1.jpg" class="img-fluid" alt="">
                                        <img src="resim/magazalar/2.webp" class="d-img-hover img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="d-text">
                                    <h3>Kat 1</h3>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="de-room">
                                <div class="d-image">
                                    <a href="kat-1.php">
                                        <img src="resim/magazalar/kat-1.jpg" class="img-fluid" alt="">
                                        <img src="resim/magazalar/2.webp" class="d-img-hover img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="d-text">
                                    <h3>Kat -1</h3>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="de-room">
                                <div class="d-image">
                                    <a href="kat-2.php">
                                        <img src="resim/magazalar/kat-2.jpg" class="img-fluid" alt="">
                                        <img src="resim/magazalar/2.webp" class="d-img-hover img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="d-text">
                                    <h3>Kat -2</h3>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="de-room">
                                <div class="d-image">
                                    <a href="kat-3.php">
                                        <img src="resim/magazalar/kat-3.jpg" class="img-fluid" alt="">
                                        <img src="resim/magazalar/2.webp" class="d-img-hover img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="d-text">
                                    <h3>Kat -3</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- subheader close -->
            <!-- footer begin -->
            <footer class="no-top pl20 pr20">
                <div class="subfooter">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">&copy; Copyright 2022 - Seaside Hotel by <span class="id-color">Designesia</span></div>
                            <div class="col-md-6 text-right">
                                <div class="social-icons">
                                    <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                    <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                                    <a href="#"><i class="fa fa-rss fa-lg"></i></a>
                                    <a href="#"><i class="fa fa-google-plus fa-lg"></i></a>
                                    <a href="#"><i class="fa fa-skype fa-lg"></i></a>
                                    <a href="#"><i class="fa fa-dribbble fa-lg"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="#" id="back-to-top"></a>
            </footer>
            <!-- footer close -->
        </div>

        <!-- Javascript Files
    ================================================== -->
        <script src="js/plugins.js"></script>
        <script src="js/designesia.js"></script>
    </body>
</html>

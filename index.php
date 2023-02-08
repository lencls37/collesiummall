<?php
if (isset($_GET['dil'])) {
    if ($_GET['dil'] === "tr") {
        session_start();
        $_SESSION['dil'] = "tr";
    } elseif ($_GET['dil'] === "en") {
        session_start();
        $_SESSION['dil'] = "en";
    } else {
        session_start();
        $_SESSION['dil'] = "tr";
    }
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <title>Collesium Mall - Merter / Istanbul / Turkey</title>
    <link rel="icon" href="images/logo.ico" type="image/png" sizes="32x32">
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

    <!-- supersized -->
    <link rel='stylesheet' href='js/supersized/css/supersized.css' type='text/css'>
    <link rel='stylesheet' href='js/supersized/theme/supersized.shutter.css' type='text/css'>

    <!-- color scheme -->
    <link rel="stylesheet" href="css/colors/brown.css" type="text/css" id="colors">
</head>

<body class="has-menu-bar">


<?php
session_start();
if (!isset($_SESSION['dil'])) {
    global $dil;
    $dil = "tr";
    include "header.php";
} elseif ($_SESSION['dil'] == "tr") {
    global $dil;
    $dil = "tr";
    include "header.php";
} elseif ($_SESSION['dil'] == "en") {
    global $dil;
    $dil = "en";
    include "header_en.php";
} ?>

<div class='slider-overlay'></div>

<div id="slidecaption"></div>

<div class="container">
    <div id="prevthumb"></div>
    <div id="nextthumb"></div>

    <!--Arrow Navigation-->
    <a id="prevslide" class="load-item"></a>
    <a id="nextslide" class="load-item"></a>

    <!--Time Bar-->
    <div id="progress-back" class="load-item">
        <div id="progress-bar"></div>
    </div>
    <!--Control Bar-->
    <div id="controls-wrapper" class="load-item">
        <div id="controls">

            <a id="play-button"><span id="pauseplay" class="play"></span></a>

            <!--Slide counter-->
            <div id="slidecounter">
                <span class="slidenumber"></span> / <span class="totalslides"></span>
            </div>

            <!--Navigation-->
            <ul id="slide-list"></ul>

        </div>
    </div>
</div>


</div>

<!-- Javascript Files
================================================== -->
<script src="js/plugins.js"></script>
<script src="js/designesia.js"></script>

<!-- Supersized -->
<script src='js/supersized/js/supersized.3.2.7.js'></script>
<script src='js/supersized/theme/supersized.shutter.min.js'></script>

<script>
    jQuery(function ($) {

        var slides = [];
        slides.push({
            image: 'resim/slider/collesium-slide-magazalar.jpg',
            title: "<div class='slider-text'><h3 class='bg wow fadeInUp' data-wow-delay='.5s'><?php
                if ($_SESSION['dil'] == "tr") {
                    echo "Mağazalar";
                } elseif ($_SESSION['dil'] == "en") {
                    echo "Stores";
                }
                ?></h3><h4 class='bg wow fadeInUp' data-wow-delay='.8s'><?php
                if ($_SESSION['dil'] == "tr") {
                    echo "Mağazalarımızı inceleyin ve detaylı bilgi alın.";
                } elseif ($_SESSION['dil'] == "en") {
                    echo "Check out our stores and get detailed information.";
                }
                ?></h4><a class='btn-line wow fadeInUp' data-wow-delay='1s' href='magazalar.php'><span><?php
                if ($_SESSION['dil'] == "tr") {
                    echo "Mağazalar";
                } elseif ($_SESSION['dil'] == "en") {
                    echo "Stores";
                }
                ?></span></a></div>",
            thumb: '',
            url: ''
        });


        slides.push({
            image: 'resim/slider/collesium-slide-sosyalmedya.jpg',
            title: "<div class='slider-text'><h3 class='bg wow fadeInUp' data-wow-delay='.5s'><?php
                if ($_SESSION['dil'] == "tr") {
                    echo "Sosyal Medyada bizi takip edin";
                } elseif ($_SESSION['dil'] == "en") {
                    echo "Follow Us on social media";
                }?></h3><h4 class='bg wow fadeInUp' data-wow-delay='.8s'><?php
                if ($_SESSION['dil'] == "tr") {
                    echo "En güncel bilgilere erken erişmek için bizi sosyal medyada takip edin";
                } elseif ($_SESSION['dil'] == "en") {
                    echo "Follow us on social media for newest news.";
                }?></h4><a href='https://www.facebook.com/collesiummallmerter/' style='margin: 20px;'><i class='fa fa-facebook fa-lg'></i></a><a href='https://twitter.com/collesium_mall/' style='margin: 20px;'><i class='fa fa-twitter fa-lg'></i></a><a href='https://www.instagram.com/collesiummallmerter/' style='margin: 20px;'><i class='fa fa-instagram fa-lg'></i></a></div>",
            thumb: '',
            url: ''
        });

        slides.push({
            image: 'resim/slider/collesium-slide-hakkimizda.jpg',
            title: "<div class='slider-text'><h3 class='bg wow fadeInUp' data-wow-delay='.5s'><?php
                if($_SESSION['dil'] == "tr"){
                    echo "Hakkımızda";
                }elseif($_SESSION['dil']){
                    echo "About Us";
                }
                ?></h3><h4 class='bg wow fadeInUp' data-wow-delay='.8s'><?php
                if($_SESSION['dil'] == "tr"){
                    echo "Hakkımızda detaylı bilgi için sayfayı ziyaret edin.";
                }elseif($_SESSION['dil']){
                    echo "For more information take a look about us page.";
                }
                ?></h4><a class='btn-line wow fadeInUp' data-wow-delay='1s' href='hakkimizda.php'><span><?php
                if($_SESSION['dil'] == "tr"){
                    echo "Hakkımızda";
                }elseif($_SESSION['dil']){
                    echo "About us";
                }
                ?></span></a></div>",
            thumb: '',
            url: ''
        });


        $.supersized({
            // Functionality
            slide_interval: 5000, // Length between transitions

            transition: 1, // 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
            transition_speed: 500, // Speed of transition
            slide_links: 'blank',    // Individual links for each slide (Options: false, 'num', 'name', 'blank')
            slides: slides,
            autoplay: 1,
            fit_always: 0,
            performance: 0,
            image_protect: 1        // Disables image dragging and right click with Javascript
        });

        jQuery("#pauseplay").toggle(
            function () {
                jQuery(this).addClass("pause");
            },
            function () {
                jQuery(this).removeClass("pause").addClass("play");
            });

        jQuery("#pauseplay").stop().fadeTo(150, .5);
        jQuery("#pauseplay").hover(
            function () {
                jQuery(this).stop().fadeTo(150, 1);
            },
            function () {
                jQuery(this).stop().fadeTo(150, .5);
            });

    });
</script>

</body>
</html>

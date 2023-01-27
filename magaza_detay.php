<?php
if (empty($_GET['id'])) {
    header("Location: index.php");
    exit();
} else {
    $host = 'localhost';
    $dbname = 'collesiummall';
    $username = 'root';
    $password = '';

    try {
        global $conn;
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Veritabanı Bağlantı hatası: " . $e->getMessage();
    }


    $stmt = $conn->prepare("SELECT * FROM magaza WHERE id='" . $_GET['id'] . "';");
    $stmt->execute();

// set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $magazalar = $stmt->fetchAll();

//print_r( $magazalar);

    $magaza_adi = $magazalar[0]['magaza_adi'];
    $magaza_aciklama_metin = $magazalar[0]['magaza_aciklama'];
    $magaza_aciklama_baslik = $magazalar[0]['magaza_aciklama_baslik'];
    $magaza_arkaplan_resim = $magazalar[0]['magaza_arkaplan_resim'];
    $magaza_detay_slider1 = $magazalar[0]['magaza_detay_slider1'];
    $magaza_detay_slider2 = $magazalar[0]['magaza_detay_slider2'];
    $magaza_detay_slider3 = $magazalar[0]['magaza_detay_slider3'];
    $magaza_detay_slider4 = $magazalar[0]['magaza_detay_slider4'];
    $magaza_detay_slider5 = $magazalar[0]['magaza_detay_slider5'];
    $magaza_detay_slider6 = $magazalar[0]['magaza_detay_slider6'];
    $magaza_detay_slider7 = $magazalar[0]['magaza_detay_slider7'];
    $magaza_detay_slider8 = $magazalar[0]['magaza_detay_slider8'];
    $magaza_detay_slider9 = $magazalar[0]['magaza_detay_slider9'];
    $magaza_detay_slider10 = $magazalar[0]['magaza_detay_slider10'];


    $magaza_detay_slider1_aciklama = $magazalar[0]['magaza_detay_slider1_aciklama'];
    $magaza_detay_slider2_aciklama = $magazalar[0]['magaza_detay_slider2_aciklama'];
    $magaza_detay_slider3_aciklama = $magazalar[0]['magaza_detay_slider3_aciklama'];
    $magaza_detay_slider4_aciklama = $magazalar[0]['magaza_detay_slider4_aciklama'];
    $magaza_detay_slider5_aciklama = $magazalar[0]['magaza_detay_slider5_aciklama'];
    $magaza_detay_slider6_aciklama = $magazalar[0]['magaza_detay_slider6_aciklama'];
    $magaza_detay_slider7_aciklama = $magazalar[0]['magaza_detay_slider7_aciklama'];
    $magaza_detay_slider8_aciklama = $magazalar[0]['magaza_detay_slider8_aciklama'];
    $magaza_detay_slider9_aciklama = $magazalar[0]['magaza_detay_slider9_aciklama'];
    $magaza_detay_slider10_aciklama = $magazalar[0]['magaza_detay_slider10_aciklama'];

}


function resim_ekle($resimurl, $aciklama)
{
    echo '<div class="item">
            <div class="picframe">
                <a class="image-popup-gallery" href="' . $resimurl . '">
                    <span class="overlay">
                         <span class="pf_title">
                             <i class="icon_search"></i>
                         </span>
                         <span class="pf_caption">
                            ' . $aciklama . '
                         </span>
                    </span>
                </a>
                <img src="' . $resimurl . '" alt="">
            </div>
          </div>
    ';
}

?>


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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <!-- color scheme -->
    <link rel="stylesheet" href="css/colors/brown.css" type="text/css" id="colors">
</head>

<body class="has-menu-bar">

<?php include "header.php"; ?>

<div id="background" data-bgimage=<?php echo "url(" . $magaza_arkaplan_resim . ") fixed" ?>></div>
<div id="content-absolute">

    <!-- subheader -->
    <section id="subheader" class="no-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h4>Collesium</h4>
                    <h1><?php echo $magaza_adi; ?></h1>
                </div>
            </div>
        </div>
    </section>

    <section id="section-main" class="no-bg no-top" aria-label="section-menu">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="de-content-overlay">
                        <div class="d-carousel wow fadeInRight" data-wow-delay="2s">
                            <div id="carousel-rooms" class="owl-carousel owl-theme">

                                <?php
                                for ($i = 1; $i <= 10; $i++) {
                                    if (!is_null(${'magaza_detay_slider' . $i}) and !is_null(${'magaza_detay_slider' . $i . '_aciklama'})) {
                                        resim_ekle(${'magaza_detay_slider' . $i}, ${'magaza_detay_slider' . $i . '_aciklama'});
                                    }
                                }
                                ?>


                                <!--                                    <div class="item">-->
                                <!--                                        <div class="picframe">-->
                                <!--                                            <a class="image-popup-gallery" href="images/room-single/pf%20(7).jpg">-->
                                <!--                                                <span class="overlay">-->
                                <!--                                                    <span class="pf_title">-->
                                <!--                                                        <i class="icon_search"></i>    -->
                                <!--                                                    </span>-->
                                <!--                                                    <span class="pf_caption">-->
                                <!--                                                        Extra bed-->
                                <!--                                                    </span>  -->
                                <!--                                                </span>-->
                                <!--                                            </a>-->
                                <!---->
                                <!--                                            <img src="images/room-single/pf%20(7).jpg" alt="">-->
                                <!--                                        </div>-->
                                <!--                                    </div>-->

                            </div>

                            <div class="d-arrow-left mod-a"><i class="fa fa-angle-left"></i></div>
                            <div class="d-arrow-right mod-a"><i class="fa fa-angle-right"></i></div>

                        </div>
                        <div class="row" style="padding-top: 30px;">
                            <div class="col-md-12">
                                <div class="d-room-details de-flex">
                                    <div class="de-flex-col">
                                        <i class="bi bi-instagram" style="margin-right: 20px;font-size: 32px;"></i>
                                        <a href="#" class="link-light">INSTAGRAM</a>
                                    </div>
                                    <div class="de-flex-col">
                                        <i class="bi bi-whatsapp" style="margin-right: 20px;font-size: 32px;"></i>+90
                                        555 555 55 55
                                    </div>
                                    <div class="de-flex-col">
                                        <i class="bi bi-telephone" style="margin-right: 20px;font-size: 32px;"></i>+90
                                        555 555 55 55
                                    </div>
                                    <div class="de-flex-col">
                                        <a href="#" class="btn-main"><span>KAT 3 NO 17</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h3><?php echo $magaza_aciklama_baslik ?></h3>
                                <p><?php echo $magaza_aciklama_metin ?></p>
                            </div>
                            <div class="col-md-4">
                                <h3>Mağaza Bilgileri</h3>
                                <ul class="ul-style-2">
                                    <!--                                <ul style="list-style: none">-->
                                    <li>TEST 1</li>
                                    <li>TEST 1</li>
                                    <li>TEST 1</li>
                                    <li>TEST 1</li>
                                    <li>TEST 1</li>
                                    <li>TEST 1</li>

                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- subheader close -->
    <?php include "footer.php"; ?>
</div>

<!-- Javascript Files
================================================== -->
<script src="js/plugins.js"></script>
<script src="js/designesia.js"></script>
</body>
</html>

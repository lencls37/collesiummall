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


<div id="background" data-bgimage="url(resim/slider/collesium-slide-hakkimizda.jpg) fixed"></div>
<div class='slider-overlay' style="position: fixed !important;top: 0; left: 0;"></div>
<div id="content-absolute">

    <!-- subheader -->
    <section id="subheader" class="no-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h4>Collessium</h4>
                    <h1>Mall</h1>
                </div>
            </div>
        </div>
    </section>

    <section id="section-main" class="no-bg no-top" aria-label="section-menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-6">
                    <div class="spacer-double sm-hide"></div>
                    <img src="resim/hakkimizda/collesiummall-hakkimizda1.jpg" alt="" class="img-responsive wow fadeInUp" data-wow-duration="1s">
                </div>

                <div class="col-lg-3 col-6">
                    <img src="resim/hakkimizda/collesiummall-hakkimizda2.jpg" alt="" class="img-responsive wow fadeInUp" data-wow-duration="1.5s">
                </div>

                <div class="col-lg-6 wow fadeIn">
                    <div class="padding20">
                        <h2 class="title mb10"><?php
                            if($_SESSION['dil'] == "tr"){
                                echo "Hakk??m??zda";
                            }elseif($_SESSION['dil'] = "en"){
                                echo "About Us";
                            }
                            ?>
                            <span class="small-border"></span>
                        </h2>

                        <?php if($_SESSION['dil'] == "tr"){
                            echo "<p>Collesium Mall , T??rkiye??? de tekstil sekt??r??n??n kalbi nitelendirilen ??stanbul Merter de
                            modern hayat??n t??m tekstil ihtiya??lar??n?? bulabilece??iniz rahat bir ortam sunan al????veri??
                            merkezidir.

                            Collesium Mall Y??netimi, senelerdir ayn?? lokasyonda ve sekt??r??n i??inde olmalar??ndan kaynakl??
                            deneyimlerini in??aat a??amas??ndan yerle??im plan??na kadar her seviyede yans??tmaktad??r. Modern
                            mimarisi, sosyal tesis alanlar??, al????veri??e gelen ziyaret??ilerin t??m ihtiya??lar??n?? bir
                            noktadan kar????layabilmeleri i??in ??zenle dizayn edilmi??tir. Star Group i??tiraki olan
                            Collesium Mall Sadece T??rkiye nin de??il Avrupa'n??n en b??y??k ve ??nde gelen toptan al????veri??
                            merkezlerinden biri olarak 01.08.2018 tarihinde ziyaret??ilerini kabul etmeye ba??lam????t??r.
                            B??y??k a????l??????n?? ise 30.04.2019 tarihinde i?? d??nyas??n??n se??kin isimleri, ??nl??ler, ve resmi
                            protokol e??li??inde muhte??em etkinlikler ile ger??ekle??tirmi??tir. 2 Ayr?? giri??i, 7 kat ma??aza
                            alan??, 2 kat depo alan?? ile 13.500 m2 kullan??labilir alana sahip olan ve 150 den fazla
                            ma??azas?? bulunan Collesium Mall, D??nya Mutfa???? Lezzetleri, T??rk Mutfa???? Lezzetleri ve 1
                            d??viz b??rosunu da b??nyesinde bar??nd??rarak ziyaret??ilerinin t??m ihtiya??lar??n?? tek ??at??
                            alt??nda giderebilmesini sa??lamaktad??r. Metro ve metrob??se 1 kilometre, Atat??rk Havaliman??na
                            5 kilometre ula????m mesafesinde bulunan Collesium Mall hemen yak??n??nda bulunan 1300 ara??l??k
                            a????k/kapal?? otopark ile t??m ziyaret??ileri i??in kolay ula????labilir ve g??venli bir konumdad??r.
                        </p>";
                        }elseif($_SESSION['dil'] == "en"){
                            echo "<p>Collesium Mall is located in Istanbul Merter, which is considered the heart of the textile industry in Turkey.
                             shopping that offers a comfortable environment where you can find all the textile needs of modern life.
                             is the center.

                             Collesium Mall Management, due to being in the same location and sector for years.
                             reflects its experience at all levels, from the construction phase to the layout. Modern
                             architecture, social facility areas, all the needs of the visitors coming to shopping.
                             It has been carefully designed so that they can meet from any point. Star Group subsidiary
                             Collesium Mall is the largest and leading wholesale shopping mall not only in Turkey but also in Europe.
                             As one of the centers, it started to accept its visitors on 01.08.2018.
                             Its grand opening was held on 30.04.2019 by distinguished names of the business world, celebrities, and official
                             carried out with magnificent events accompanied by the protocol. 2 separate entrances, 7 floors of stores
                             area, 2 floors of warehouse space and 13.500 m2 usable area and more than 150
                             Collesium Mall with its store, World Cuisine Tastes, Turkish Cuisine Tastes and 1
                             including the foreign exchange office, to meet all the needs of its visitors under one roof.
                             provides under. 1 kilometer to metro and metrobus, to Atat??rk Airport
                             Located in the immediate vicinity of the Collesium Mall, which is 5 kilometers away, it has a capacity of 1300 vehicles.
                             It is in an easily accessible and safe location for all its visitors with its indoor/outdoor parking lot.</p>";
                        } ?>


<!--                        <a href="02-room-2-cols.html" class="btn-line"><span>Choose Room</span>s</a>-->

                    </div>
                </div>

                <div class="clearfix"></div>
            </div>


            <div class="spacer-double"></div>

<!--            <div class="row gx-4">-->
<!--                <div class="col-lg-12 text-center">-->
<!--                    <h2 class="title center">Hotel Facilities-->
<!--                        <span class="small-border"></span>-->
<!--                    </h2>-->
<!--                </div>-->
<!--            </div>-->

<!--            <div class="row">-->

<!--                <div class="col-md-4">-->
<!--                    <div class="box-icon">-->
<!--                        <span class="icon bg-color"><img src="images/svg/restaurant-svgrepo-com.svg" alt=""></span>-->
<!--                        <div class="text">-->
<!--                            <h3 class="style-1">Restaurant</h3>-->
<!--                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque-->
<!--                                laudantium, totam rem aperiam, eaque ipsa.</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->

<!--                <div class="col-md-4">-->
<!--                    <div class="box-icon">-->
<!--                        <span class="icon bg-color"><img src="images/svg/swimming-pool-svgrepo-com.svg" alt=""></span>-->
<!--                        <div class="text">-->
<!--                            <h3 class="style-1">Swimming Pool</h3>-->
<!--                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque-->
<!--                                laudantium, totam rem aperiam, eaque ipsa.</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->

<!--                <div class="col-md-4">-->
<!--                    <div class="box-icon">-->
<!--                        <span class="icon bg-color"><img src="images/svg/fitness-gym-svgrepo-com.svg" alt=""></span>-->
<!--                        <div class="text">-->
<!--                            <h3 class="style-1">Fitness Area</h3>-->
<!--                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque-->
<!--                                laudantium, totam rem aperiam, eaque ipsa.</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->

<!--                <div class="col-md-4">-->
<!--                    <div class="box-icon">-->
<!--                        <span class="icon bg-color"><img src="images/svg/coffee-table-svgrepo-com.svg" alt=""></span>-->
<!--                        <div class="text">-->
<!--                            <h3 class="style-1">Mini Bar</h3>-->
<!--                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque-->
<!--                                laudantium, totam rem aperiam, eaque ipsa.</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->

<!--                <div class="col-md-4">-->
<!--                    <div class="box-icon">-->
<!--                        <span class="icon bg-color"><img src="images/svg/meeting-explain-svgrepo-com.svg" alt=""></span>-->
<!--                        <div class="text">-->
<!--                            <h3 class="style-1">Meeting Room</h3>-->
<!--                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque-->
<!--                                laudantium, totam rem aperiam, eaque ipsa.</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->

<!--                <div class="col-md-4">-->
<!--                    <div class="box-icon">-->
<!--                        <span class="icon bg-color"><img src="images/svg/laundry-machine-svgrepo-com.svg" alt=""></span>-->
<!--                        <div class="text">-->
<!--                            <h3 class="style-1">Laundry Service</h3>-->
<!--                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque-->
<!--                                laudantium, totam rem aperiam, eaque ipsa.</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->

<!--                <div class="col-md-4">-->
<!--                    <div class="box-icon">-->
<!--                        <span class="icon bg-color"><img src="images/svg/screen-tv-svgrepo-com.svg" alt=""></span>-->
<!--                        <div class="text">-->
<!--                            <h3 class="style-1">Satelite TV</h3>-->
<!--                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque-->
<!--                                laudantium, totam rem aperiam, eaque ipsa.</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->

<!--                <div class="col-md-4">-->
<!--                    <div class="box-icon">-->
<!--                        <span class="icon bg-color"><img src="images/svg/safebox-svgrepo-com.svg" alt=""></span>-->
<!--                        <div class="text">-->
<!--                            <h3 class="style-1">Safe Box</h3>-->
<!--                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque-->
<!--                                laudantium, totam rem aperiam, eaque ipsa.</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->

<!--                <div class="col-md-4">-->
<!--                    <div class="box-icon">-->
<!--                        <span class="icon bg-color"><img src="images/svg/car-parking-svgrepo-com.svg" alt=""></span>-->
<!--                        <div class="text">-->
<!--                            <h3 class="style-1">Parking Area</h3>-->
<!--                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque-->
<!--                                laudantium, totam rem aperiam, eaque ipsa.</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->

<!--            </div>-->

        </div>
    </section>

    <!-- subheader close -->
<?php include "footer.php"?>
</div>

<!-- Javascript Files
================================================== -->
<script src="js/plugins.js"></script>
<script src="js/designesia.js"></script>
<script src="form.js"></script>
</body>
</html>

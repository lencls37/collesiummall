<?php


try {
    $conn = new PDO("mysql:host=localhost;dbname=collesiummall_db", "collesiummall_admin", "*904f_Sj!8AqSxBP");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->query("SET CHARACTER SET utf8");
    $stmt = $conn->prepare("SELECT * FROM `blog` WHERE 1 ORDER BY `blog`.`tarih` ASC");
    $stmt->execute();

    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetchAll();
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
//?>


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
    <!-- supersized -->
    <link rel='stylesheet' href='js/supersized/css/supersized.css' type='text/css'>
    <link rel='stylesheet' href='js/supersized/theme/supersized.shutter.css' type='text/css'>
    <!-- color scheme -->
    <link rel="stylesheet" href="css/colors/brown.css" type="text/css" id="colors">
</head>

<body class="has-menu-bar">

<?php include "header.php" ?>

<div id="background" data-bgimage="url(resim/blog/collesiummall-blog.jpg) fixed"></div>
<div class='slider-overlay' style="position: fixed !important;top: 0; left: 0;"></div>
<div id="content-absolute">

    <!-- subheader -->
    <section id="subheader" class="no-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h4>Collesium</h4>
                    <h1>Blog</h1>
                </div>
            </div>
        </div>
    </section>

    <section id="section-main" class="no-bg no-top" aria-label="section-menu">
        <div class="container">
            <div class="row g-4">

                <?php

                foreach ($result as $item) {
                    echo '<div class="col-lg-4 col-md-6">
                    <div class="d-items">
                        <div class="card-image-1 mod-b">
                            <a href="blog-yazi.php?id='. $item['id'] .'" class="d-text">
                                <div class="d-inner">
                                    <span class="atr-date">'.$item['tarih'].'</span>
                                    <h3>'.$item['baslik'].'</h3>
                                    <p>'.substr(strip_tags($item['html_yazi']),0,60).'...</p>
                                    <h5 class="d-tag">BLOG</h5>
                                </div>
                            </a>
                            <img src="https://www.collesiummall.com/images/about/i06.jpg" class="img-fluid" alt="" style="width: 390px;height: 390px;object-fit: cover;">
                        </div>
                    </div>
                </div>';
                }

                ?>

                <div class="col-lg-4 col-md-6">
                    <div class="d-items">
                        <div class="card-image-1 mod-b">
                            <a href="buyuk-iftar.php" class="d-text">
                                <div class="d-inner">
                                    <span class="atr-date">23.05.2019</span>
                                    <h3>BÜYÜK İFTAR DAVETİ</h3>
                                    <p>Star Group ortaklarının Perşembe Günü Gülsever sokakta gerçekleştirdiği iftara
                                        katılımda bulunan herkese bizi onurlandırdığı için teşekkür ederiz.</p>
                                    <h5 class="d-tag">BLOG</h5>
                                </div>
                            </a>
                            <img src="https://www.collesiummall.com/images/about/i06.jpg" class="img-fluid" alt="" style="width: 390px;height: 390px;object-fit: cover;">
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="d-items">
                        <div class="card-image-1 mod-b">
                            <a href="collesium-mall-acilis-galasi.php" class="d-text">
                                <div class="d-inner">
                                    <span class="atr-date">30.04.2019</span>
                                    <h3>COLLESIUM MALL - AÇILIŞ GALASI</h3>
                                    <p></p>
                                    <h5 class="d-tag">BLOG</h5>
                                </div>
                            </a>
                            <img src="https://www.collesiummall.com/images/about/a01.jpg" class="img-fluid" alt="" style="width: 390px;height: 390px;object-fit: cover;">
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6">
                    <div class="d-items">
                        <div class="card-image-1 mod-b">
                            <a href="buyuk-acilis-defilesi.php" class="d-text">
                                <div class="d-inner">
                                    <span class="atr-date">01.08.2018</span>
                                    <h3>BÜYÜK AÇILIŞ DEFİLESİ - CASTING</h3>
                                    <p>Büyük açılış defilesi için casting çalışmalarının, Yönetim Kurulu üyelerimizden
                                        Hüseyin Kazıkkaya ve Halil Kasap birlikte bizzat gerçekleştirdi.
                                    </p>
                                    <h5 class="d-tag">BLOG</h5>
                                </div>
                            </a>
                            <img src="https://www.collesiummall.com/images/about/d08.jpg" class="img-fluid" alt="" style="width: 390px;height: 390px;object-fit: cover;">
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>

<!--                <nav aria-label="Page navigation example">-->
<!--                    <ul class="pagination justify-content-center">-->
<!---->
<!--                        <li class="page-item active"><a class="page-link" href="#">1</a></li>-->
<!--                        <li class="page-item"><a class="page-link" href="#">2</a></li>-->
<!--                        <li class="page-item"><a class="page-link" href="#">3</a></li>-->
<!---->
<!--                    </ul>-->
<!--                </nav>-->

            </div>

        </div>
    </section>
    <!-- subheader close -->
    <?php include "footer.php" ?>
</div>

<!-- Javascript Files
================================================== -->
<script src="js/plugins.js"></script>
<script src="js/designesia.js"></script>

</body>
</html>

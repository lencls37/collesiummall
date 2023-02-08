<?php


try {
    $conn = new PDO("mysql:host=localhost;dbname=collesiummall_db", "collesiummall_admin", "*904f_Sj!8AqSxBP");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->query("SET CHARACTER SET utf8");
    $stmt = $conn->prepare("SELECT * FROM `magaza` WHERE `kat`='00' ORDER BY `magaza`.`no` ASC");
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

<div id="background" data-bgimage="url(resim/kat/collesiummall-Kat0.jpg) fixed"></div>
<div class='slider-overlay' style="position: fixed !important;top: 0; left: 0;"></div>
<div id="content-absolute">

    <!-- subheader -->
    <section id="subheader" class="no-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h4>Collesium</h4>
                    <?php
                    if($_SESSION['dil'] == "tr"){
                        echo " <h1>Kat 0</h1>";
                    }elseif($_SESSION['dil'] == "en"){
                        echo " <h1>Floor 0</h1>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>

    <section id="section-main" class="no-bg no-top" aria-label="section-menu">
        <div class="container">
            <div class="row g-4">
                <?php
                foreach ($result as $item){
                    echo '<div class="col-lg-4 text-center">
                    <div class="de-room">
                        <div class="d-image" style="max-width: 390px !important; max-height: 390px !important;margin-left: auto;margin-right: auto;">
                            <a href="magaza_detay.php?id='.$item['id'].'">
                                <img src="'.$item['logo'].'" class="img-fluid" alt="Vitrin Görsel" style="width: 390px;height: 390px;object-fit: cover;">
                                <img src="resim/magazalar/2.webp" class="d-img-hover img-fluid" alt="Collesium Mall" style="width: 390px;height: 390px;object-fit: cover;">
                            </a>
                        </div>

                        <div class="d-text" style="max-width: 390px;margin-left: auto;margin-right: auto;">
                            <h3>'.$item['magaza_adi'].'</h3>
                        </div>
                    </div>
                </div>';
                }
                ?>
            </div>
        </div>
    </section>
    <!-- subheader close -->
    <?php include "footer.php"?>
</div>

<!-- Javascript Files
================================================== -->
<script src="js/plugins.js"></script>
<script src="js/designesia.js"></script>
</body>
</html>

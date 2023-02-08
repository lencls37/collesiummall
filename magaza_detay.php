<?php
if (empty($_GET['id'])) {
    header("Location: index.php");
    exit();
} else {
    $host = 'localhost';
    $dbname = 'collesiummall_db';
    $username = 'collesiummall_admin';
    $password = '*904f_Sj!8AqSxBP';

    try {
        global $conn;
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->query("SET CHARACTER SET utf8");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Veritabanı Bağlantı hatası: " . $e->getMessage();
    }


    $stmt = $conn->prepare("SELECT * FROM magaza WHERE id='" . $_GET['id'] . "';");
    $stmt->execute();

// set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $magazalar = $stmt->fetchAll();


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

    $facebook_url = $magazalar[0]['facebook_url'];
    $facebook_kullanici_adi = $magazalar[0]['facebook_kullanici_adi'];
    $kat_ve_no = "Kat ".$magazalar[0]['kat'] . " No: ".$magazalar[0]['no'];
    $kat_ve_no_en = "Floor ".$magazalar[0]['kat'] . " No: ".$magazalar[0]['no'];
    $logo = $magazalar[0]['logo'];
    $telefon = $magazalar[0]['telefon'];
    $whatsapp_numara = $magazalar[0]['whatsapp_numara'];
    $whatsapp_url = $magazalar[0]['whatsapp_url'];
    $telegram_kullanici_adi = $magazalar[0]['telegram_kullanci_adi'];
    $telegram_url = $magazalar[0]['telegram_url'];
    $tiktok_url = $magazalar[0]['tiktok_url'];
    $tiktok_kullanici_adi = $magazalar[0]['tiktok_kullanici_adi'];
    $website = $magazalar[0]['website'];
    $mail = $magazalar[0]['mail'];
    $youtube_kullanici_adi = $magazalar[0]['youtube_kullanici_adi'];
    $youtube_url = $magazalar[0]['youtube_url'];
    $konsept = $magazalar[0]['konsept_yazi'];
    $konsept_en = $magazalar[0]['konsept_yazi_en'];
    $instagram_kullanici_adi = $magazalar[0]['instagram_kullanici_adi'];
    $instagram_url = $magazalar[0]['instagram_url'];

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
                <img src="' . $resimurl . '" alt="" style="max-width: 400px;">
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

<?php
Global $dil;
session_start();
if(!isset($_SESSION['dil'])){
    $dil = "tr";
    include "header.php";
}elseif($_SESSION['dil'] == "tr"){
    $dil = "tr";
    include "header.php";
}elseif ($_SESSION['dil'] == "en"){
    $dil = "en";
    include "header_en.php";
}
?>

<div id="background" data-bgimage='url("images/fotolar/c-01.jpeg") fixed'></div>
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
                                resim_ekle($logo,$magaza_adi);
                                for ($i = 1; $i <= 10; $i++) {
                                    if (!is_null(${'magaza_detay_slider' . $i}) and !is_null(${'magaza_detay_slider' . $i . '_aciklama'})) {
                                        resim_ekle(${'magaza_detay_slider' . $i}, ${'magaza_detay_slider' . $i . '_aciklama'});
                                    }
                                }
                                ?>

                            </div>

                            <div class="d-arrow-left mod-a"><i class="fa fa-angle-left"></i></div>
                            <div class="d-arrow-right mod-a"><i class="fa fa-angle-right"></i></div>

                        </div>
                        <div class="row" style="padding-top: 30px;">
                            <div class="col-md-12">
                                <div class="d-room-details de-flex">
                                    <div class="de-flex-col">
                                        <i class="bi bi-instagram" style="margin-right: 20px;font-size: 32px;"></i>
                                        <a href="<?php echo $instagram_url;?>" class="link-light" target="_blank"><?php echo $instagram_kullanici_adi;?></a>
                                    </div>
                                    <div class="de-flex-col">
                                        <i class="bi bi-whatsapp" style="margin-right: 20px;font-size: 32px;"></i>
                                        <a href="<?php echo $whatsapp_url;?>" class="link-light" target="_blank"><?php echo $whatsapp_numara;?></a>
                                    </div>
                                    <div class="de-flex-col">
                                        <i class="bi bi-telephone" style="margin-right: 20px;font-size: 32px;"></i>+
                                        <a href="tel:<?php echo $telefon?>" class="link-light"><?php echo $telefon;?></a>
                                    </div>
                                    <div class="de-flex-col">
                                        <a href="#" class="btn-main"><span><?php
                                                if($dil == "tr"){
                                                    echo $kat_ve_no;
                                                }elseif ($dil == "en"){
                                                    echo $kat_ve_no_en;
                                                }
                                                ?></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h3><?php
                                    if($dil == "tr"){
                                        echo "Konsept";
                                    }elseif($dil == "en"){
                                        echo "Concept";
                                    }else{
                                        echo "Konsept";
                                    }?></h3>
                                <p><?php if($dil == "tr"){
                                        echo $konsept;
                                    }elseif($dil == "en"){
                                        echo $konsept_en;
                                    }
                                    ?></p>
                            </div>
                            <div class="col-md-4">
                                <h3><?php if($dil == "tr"){
                                        echo "Bağlantılar";
                                    }elseif($dil == "en"){
                                        echo "Links";
                                    }?></h3>
                                <ul style="list-style: none;padding-left: 0 !important;" class="ul-style-2">
                                    <?php
                                    if(!empty($facebook_url) and  !empty($facebook_kullanici_adi)){
                                        echo '<li><i class="bi bi-facebook"></i><a target="_blank" href="'.$facebook_url.'" class="link-light"> '.$facebook_kullanici_adi.'</a></li>';
                                    }
                                    if(!empty($telegram_url) and  !empty($telegram_kullanici_adi)){
                                        echo '<li><i class="bi bi-telegram"></i><a target="_blank" href="'.$telegram_url.'" class="link-light"> '.$telegram_kullanici_adi.'</a></li>';
                                    }
                                    if(!empty($tiktok_url) and  !empty($tiktok_kullanici_adi)){
                                        echo '<li><i class="bi bi-tiktok"></i><a target="_blank" href="'.$tiktok_url.'" class="link-light"> '.$tiktok_kullanici_adi.'</a></li>';
                                    }
                                    if(!empty($youtube_url) and  !empty($youtube_kullanici_adi)){
                                        echo '<li><i class="bi bi-youtube"></i><a target="_blank" href="http://'.$youtube_url.'" class="link-light"> '.$youtube_kullanici_adi.'</a></li>';
                                    }
                                    if(!empty($website)){
                                        echo '<li><i class="bi bi-globe"></i><a target="_blank" href="http://'.$website.'" class="link-light">Web Sitesi</a></li>';
                                    }
                                    if(!empty($mail)){
                                        echo '<li><i class="bi bi-envelope-at-fill"></i><a target="_blank" href="mailto:'.$mail.'" class="link-light"> '.$mail.'</a></li>';
                                    }
                                    ?>
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

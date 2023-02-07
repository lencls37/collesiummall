<?php
if(!isset($_GET['id'])){
    exit();
}else{
    try {
        $conn = new PDO("mysql:host=localhost;dbname=collesiummall_db", "collesiummall_admin", "*904f_Sj!8AqSxBP");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->query("SET CHARACTER SET utf8");
        $stmt = $conn->prepare("SELECT * FROM `blog` WHERE `id`='".$_GET['id']."';");
        $stmt->execute();

        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $result = $stmt->fetchAll()[0];
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
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

<?php include "header.php" ?>

<div id="background" data-bgimage="url(resim/blog/collesiummall-blog.jpg) fixed"></div>
<div class='slider-overlay' style="position: fixed !important;top: 0; left: 0;"></div>
<div id="content-absolute">


    <!-- subheader -->
    <section id="subheader" class="no-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1 mt-4 text-center">
                    <h1><?php echo $result['baslik']; ?></h1>
                </div>
            </div>
        </div>
    </section>

    <section id="section-main" class="no-top no-bg" aria-label="section-menu">
        <div class="container" style="background: 0% 0% / cover #000000a1">
            <div class="row g-5">
                <div class="col-md-10 offset-md-1">
                    <div class="de-post-read">
                        <div class="post-content">

                            <div class="post-text">
                                <?php echo $result['html_yazi']; ?>
                            </div>
                        </div>

                        <div class="post-meta"><span><i class="fa fa-user id-color"></i>By: <a
                                        href="#">Collesium Mall</a></span> <span><i class="fa fa-tag id-color"></i><?php echo $result['etiket'];?></span> <span><i

                        <div class="spacer-single"></div>
                    </div>
                </div>
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

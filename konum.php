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

<div id="background" data-bgimage="url(images/background/bg4.jpg) fixed"></div>
<div class='slider-overlay' style="position: fixed !important;top: 0; left: 0;"></div>
<div id="content-absolute">


    <!-- subheader -->
    <section id="subheader" class="no-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h4>Collesium</h4>
                    <h1>Konum</h1>
                </div>
            </div>
        </div>
    </section>

    <section id="section-main" class="no-bg no-top" aria-label="section-menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="de-content-overlay">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <h3>Collesium Mall</h3>
                                        <address>
                                            <span><strong>Address:</strong>Mehmet Nesih Özmen, Mahallesi, Gülsever Sokağı No :17, 34173 Güngören/İstanbul</span>
                                            <span><strong>Phone:</strong>+90 212 803 15 60</span>
                                            <span><strong>Email:</strong><a href="mailto:info@collesiummall.com">info@collesiummall.com</a></span>
                                        </address>
                                    </div>

                                    <!--                                            <div class="col-lg-6">-->
                                    <!--                                                <h3>Seaside Maldives</h3>-->
                                    <!--                                                <address>-->
                                    <!--                                                    <span><strong>Address:</strong>100 S Main St, Los Angeles, CA</span>-->
                                    <!--                                                    <span><strong>Phone:</strong>(208) 333 9296</span>-->
                                    <!--                                                    <span><strong>Fax:</strong>(208) 333 9298</span>-->
                                    <!--                                                    <span><strong>Email:</strong><a href="mailto:contact@example.com">contact@example.com</a></span>-->
                                    <!--                                                </address>-->
                                    <!--                                            </div>-->
                                </div>

                                <div class="spacer-single"></div>

                                <form name="contactForm" id='contact_form' method="post">
                                    <div class="row">
                                        <div class="col-md-12 mb10">
                                            <h3>Bize Mesaj Bırak</h3>
                                        </div>
                                        <div class="col-md-6">
                                            <div id='name_error' class='error'>Lütfen isminizi giriniz.</div>
                                            <div>
                                                <input type='text' name='Name' id='name' class="form-control"
                                                       placeholder="Adınız" required>
                                            </div>

                                            <div id='email_error' class='error'>Lütfen doğru bir mail adresi giriniz.
                                            </div>
                                            <div>
                                                <input type='email' name='Email' id='email' class="form-control"
                                                       placeholder="Mail adresiniz" required>
                                            </div>

                                            <div id='phone_error' class='error'>Lütfen numaranızı giriniz.</div>
                                            <div>
                                                <input type='text' name='phone' id='phone' class="form-control"
                                                       placeholder="Telefonunuz" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div id='message_error' class='error'>Lütfen mesaj giriniz.</div>
                                            <div>
                                                <textarea name='message' id='message' class="form-control"
                                                          placeholder="Mesajınız" required></textarea>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="g-recaptcha" data-sitekey="copy-your-site-key-here"></div>
                                            <p id='submit' class="mt20">
                                                <input type='submit' id='send_message' value='Mesajı Gönder'
                                                       class="btn btn-line">
                                            </p>
                                            <div id='mail_success' class='success'>Mesaj başarıyla gönderildi.</div>
                                            <div id='mail_fail' class='error'>Mesajınız gönderilemedi. Lütfen sonra
                                                tekrar deneyin.
                                            </div>

                                        </div>
                                    </div>
                                </form>

                                <div id="success_message" class='success'>
                                    Mesajınız başarıyla gönderildi. Daha fazla mesaj göndermek için sayfayı yenileyin.
                                </div>
                                <div id="error_message" class='error'>
                                    Mesajınız gönderilirken bir hata oluştu! Lütfen sonra tekrar deneyin.
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="map-container map-fullwidth">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3010.6378849782723!2d28.88527821525152!3d41.01129837930045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cabb2b8248e88b%3A0x4c1a38a834c242aa!2sCOLLES%C4%B0UM%20MALL%20MERTER!5e0!3m2!1str!2str!4v1673885053881!5m2!1str!2str"
                                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>
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
<script src='https://www.google.com/recaptcha/api.js' async defer></script>
<script src="form.js"></script>

</body>
</html>
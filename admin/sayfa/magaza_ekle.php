<div class="container" style="padding-top: 50px;">
    <div class="row">
        <div class="col-12 col-sm-12 col-lg-12 col-md-12 col-xl-12">
            <form id="magaza_ekle_form" enctype="multipart/form-data" method="post" action="/admin/api/magaza_ekle.php">
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="store-name">Mağaza Adı</label>
                                <input type="text" class="form-control" id="magaza_adi" name="magaza_adi" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="store-name">Logo</label>
                                <input type="file" class="form-control-file" id="logo" name="logo">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="store-address">INSTAGRAM URL</label>
                                <input type="text" class="form-control" id="instagram_url" name="instagram_url" placeholder="https://www.instagram.com/silviomassimonline/">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="store-address">INSTAGRAM KULLANICI ADI</label>
                                <input type="text" class="form-control" id="instagram_kullanici_adi" name="instagram_kullanici_adi" placeholder="silviomassimonline">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="store-address">WHATSAPP URL</label>
                                <input type="text" class="form-control" id="whatsapp_url" name="whatsapp_url" placeholder="wa.me/90555555555">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="store-address">WHATSAPP NUMARA</label>
                                <input type="text" class="form-control" id="whatsapp_numara" name="whatsapp_numara" placeholder="90 555 555 5555">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="store-address">TELEFON NUMARASI</label>
                                <input type="text" class="form-control" id="telefon" name="telefon" placeholder="+90 555 555 5555">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="store-address">KAT VE NUMARA</label>
                                <input type="text" class="form-control" id="kat_ve_numara" name="kat_ve_numara" required placeholder="Kat 3 No 129">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="store-address">FACEBOOK URL</label>
                                <input type="text" class="form-control" id="facebook_url" name="facebook_url" placeholder="https://www.facebook.com/turkiye/">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="store-address">FACEBOOK KULLANICI ADI</label>
                                <input type="text" class="form-control" id="facebook_kullanici_adi" name="facebook_kullanici_adi" placeholder="turkiye">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="store-address">TELEGRAM URL</label>
                                <input type="text" class="form-control" id="telegram_url" name="telegram_url" placeholder="https://t.me/IP_TV9">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="store-address">TELEGRAM KULLANICI ADI</label>
                                <input type="text" class="form-control" id="telegram_kullanici_adi" name="telegram_kullanici_adi" placeholder="silvio_massimo">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="store-address">TİKTOK URL</label>
                                <input type="text" class="form-control" id="tiktok_url" name="tiktok_url">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="store-address">TİKTOK KULLANICI ADI</label>
                                <input type="text" class="form-control" id="tiktok_kullanici_adi" name="tiktok_kullanici_adi">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="store-address">YOUTUBE URL</label>
                                <input type="text" class="form-control" id="youtube_url" name="youtube_url" placeholder="https://www.youtube.com/GewerOfficial">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="store-address">YOUTUBE KULLANICI ADI</label>
                                <input type="text" class="form-control" id="youtube_kullanici_adi" name="youtube_kullanici_adi">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="store-address">İLETİŞİM MAİLİ</label>
                                <input type="text" class="form-control" id="mail" name="mail" placeholder="info@collesiummall.com">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="store-address">WEBSİTE URL</label>
                                <input type="text" class="form-control" id="website" name="website" placeholder="www.collesiummall.com">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="slider-img-1">Slider Resimleri (Maksimum 12)</label>
                                <input type="file" class="form-control-file" id="slider_img_1" name="slider_img_1[]" multiple>
                                <input type="text" class="form-control" id="slider_text_1" name="slider_text_1" placeholder="Açıklama" style="margin-top: 20px;">
                            </div>
                        </div>
<!--                        <div class="col-3">-->
<!--                            <div class="form-group">-->
<!--                                <label for="slider-img-2">Slider Resim 2</label>-->
<!--                                <input type="file" class="form-control-file" id="slider-img-2">-->
<!--                                <input type="text" class="form-control" id="slider-text-2" placeholder="Açıklama" style="margin-top: 20px;">-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="col-3">-->
<!--                            <div class="form-group">-->
<!--                                <label for="slider-img-1">Slider Resim 3</label>-->
<!--                                <input type="file" class="form-control-file" id="slider-img-3">-->
<!--                                <input type="text" class="form-control" id="slider-text-3" placeholder="Açıklama" style="margin-top: 20px;">-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="col-3">-->
<!--                            <div class="form-group">-->
<!--                                <label for="slider-img-4">Slider Resim 4</label>-->
<!--                                <input type="file" class="form-control-file" id="slider-img-4">-->
<!--                                <input type="text" class="form-control" id="slider-text-4" placeholder="Açıklama" style="margin-top: 20px;">-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="col-3">-->
<!--                            <div class="form-group">-->
<!--                                <label for="slider-img-4">Slider Resim 5</label>-->
<!--                                <input type="file" class="form-control-file" id="slider-img-5">-->
<!--                                <input type="text" class="form-control" id="slider-text-5" placeholder="Açıklama" style="margin-top: 20px;">-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="col-3">-->
<!--                            <div class="form-group">-->
<!--                                <label for="slider-img-4">Slider Resim 6</label>-->
<!--                                <input type="file" class="form-control-file" id="slider-img-6">-->
<!--                                <input type="text" class="form-control" id="slider-text-6" placeholder="Açıklama" style="margin-top: 20px;">-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="col-3">-->
<!--                            <div class="form-group">-->
<!--                                <label for="slider-img-4">Slider Resim 7</label>-->
<!--                                <input type="file" class="form-control-file" id="slider-img-7">-->
<!--                                <input type="text" class="form-control" id="slider-text-7" placeholder="Açıklama" style="margin-top: 20px;">-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="col-3">-->
<!--                            <div class="form-group">-->
<!--                                <label for="slider-img-4">Slider Resim 8</label>-->
<!--                                <input type="file" class="form-control-file" id="slider-img-8">-->
<!--                                <input type="text" class="form-control" id="slider-text-8" placeholder="Açıklama" style="margin-top: 20px;">-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="col-3">-->
<!--                            <div class="form-group">-->
<!--                                <label for="slider-img-4">Slider Resim 9</label>-->
<!--                                <input type="file" class="form-control-file" id="slider-img-9">-->
<!--                                <input type="text" class="form-control" id="slider-text-9" placeholder="Açıklama" style="margin-top: 20px;">-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="col-3">-->
<!--                            <div class="form-group">-->
<!--                                <label for="slider-img-4">Slider Resim 10</label>-->
<!--                                <input type="file" class="form-control-file" id="slider-img-10">-->
<!--                                <input type="text" class="form-control" id="slider-text-10" placeholder="Açıklama" style="margin-top: 20px;">-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="col-3">-->
<!--                            <div class="form-group">-->
<!--                                <label for="slider-img-4">Slider Resim 11</label>-->
<!--                                <input type="file" class="form-control-file" id="slider-img-11">-->
<!--                                <input type="text" class="form-control" id="slider-text-11" placeholder="Açıklama" style="margin-top: 20px;">-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="col-3">-->
<!--                            <div class="form-group">-->
<!--                                <label for="slider-img-4">Slider Resim 12</label>-->
<!--                                <input type="file" class="form-control-file" id="slider-img-12">-->
<!--                                <input type="text" class="form-control" id="slider-text-12" placeholder="Açıklama" style="margin-top: 20px;">-->
<!--                            </div>-->
<!--                        </div>-->
                        <div class="col-12">
                            <div class="form-group">
                                <label for="store-address">KONSEPT YAZISI</label>
                                <textarea class="form-control" id="konsept_yazisi" name="konsept_yazisi" rows="6"></textarea>
                            </div>
                        </div>
                        <div class="col-12" style="margin-bottom: 50px;">
                            <button type="submit" class="btn btn-dark btn-lg">Mağaza Ekle</button>

                            <!-- Success/Error Messages -->
                            <div id="form-messages" class="alert" style="display:none;margin-top: 30px;"></div>
                        </div>
                    </div>
                </div>



            </form>
            <!-- Store Add Form -->

        </div>
    </div>

</div>

<!--<script>-->
<!--    // Submit Form-->
<!--    $('#magaza_ekle_form').submit(function(event) {-->
<!--        event.preventDefault();-->
<!--        console.log("Submit Girdi");-->
<!--        // AJAX Request-->
<!--        $.ajax({-->
<!--            type: "POST",-->
<!--            url: "api/magaza_ekle.php",-->
<!--            data: $('#magaza_ekle_form').serialize(),-->
<!--            dataType: "json",-->
<!--            success: function(response) {-->
<!--                if (response.status == "success") {-->
<!--                    $("#form-messages").removeClass("alert-danger").addClass("alert-success").text(response.message);-->
<!--                } else {-->
<!--                    $("#form-messages").removeClass("alert-success").addClass("alert-danger").text(response.message);-->
<!--                    console.log(response.message);-->
<!--                }-->
<!--                $("#form-messages").show();-->
<!--            }-->
<!--        }).done(function( msg ) {-->
<!--            console.log("Veri başarıyla gönderildi: " + msg);-->
<!--        }).fail(function( xhr, status, errorThrown ) {-->
<!--            console.log("Hata oluştu: " + errorThrown);-->
<!--            console.log("Status: " + status);-->
<!--            console.dir( xhr );-->
<!--        });;-->
<!--    });-->
<!--</script>-->
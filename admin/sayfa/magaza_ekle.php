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
                                <p id="output"></p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="store-address">INSTAGRAM KULLANICI ADI</label>
                                <input type="text" class="form-control" id="instagram_kullanici_adi"
                                       name="instagram_kullanici_adi" placeholder="silviomassimonline">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="store-address">WHATSAPP NUMARA</label>
                                <input type="tel" class="form-control" id="whatsapp_numara" name="whatsapp_numara"
                                       placeholder="90 555 555 5555">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="store-address">TELEFON NUMARASI</label>
                                <input type="text" class="form-control" id="telefon" name="telefon"
                                       placeholder="+90 555 555 5555">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label for="kat">KAT</label>
                                <br>
                                <select id="kat" name="kat" class="custom-select">
                                    <option value="3">Kat 3</option>
                                    <option value="2">Kat 2</option>
                                    <option value="1">Kat 1</option>
                                    <option value="0">Zemin</option>
                                    <option value="-1">Eksi 1</option>
                                    <option value="-2">Eksi 2</option>
                                    <option value="-3">Eksi 3</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label for="store-address">DÜKKAN NO</label>
                                <input type="text" class="form-control" id="no" name="no" required placeholder="120">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="store-address">FACEBOOK KULLANICI ADI</label>
                                <input type="text" class="form-control" id="facebook_kullanici_adi"
                                       name="facebook_kullanici_adi" placeholder="turkiye">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="store-address">TELEGRAM KULLANICI ADI</label>
                                <input type="text" class="form-control" id="telegram_kullanici_adi"
                                       name="telegram_kullanici_adi" placeholder="silvio_massimo">
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
                                <label for="store-address">YOUTUBE URL</label>
                                <input type="text" class="form-control" id="youtube_url" name="youtube_url"
                                       placeholder="https://www.youtube.com/GewerOfficial">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="store-address">YOUTUBE KULLANICI ADI</label>
                                <input type="text" class="form-control" id="youtube_kullanici_adi"
                                       name="youtube_kullanici_adi">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="store-address">İLETİŞİM MAİLİ</label>
                                <input type="text" class="form-control" id="mail" name="mail"
                                       placeholder="info@collesiummall.com">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="store-address">WEBSİTE URL</label>
                                <input type="text" class="form-control" id="website" name="website"
                                       placeholder="www.collesiummall.com">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="slider-img-1">Slider Resimleri (Maksimum 12)</label>
                                <input type="file" class="form-control-file" id="slider_img_1" name="slider_img_1[]"
                                       multiple>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="store-address">KONSEPT YAZISI</label>
                                <textarea class="form-control" id="konsept_yazisi" name="konsept_yazisi"
                                          rows="6"></textarea>
                            </div>
                        </div>
                        <div class="col-12" style="margin-bottom: 50px;">
                            <button type="submit" class="btn btn-dark btn-lg">Mağaza Ekle</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>

<script>
    $('#logo').on('change', function() {

        const size =
            (this.files[0].size / 1024 / 1024).toFixed(2);

        if (size > 2) {
            alert("Dosya Boyutu Maks 2 MB arası olmalıdır.");
            $("#output").html('<b>' +
                'Dosya Boyutu: ' + size + " KB" + '</b>');
        } else {
            $("#output").html('<b>' +
                'Dosya Boyutu: ' + size + " KB" + '</b>');
        }
    });
</script>
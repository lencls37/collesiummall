<?php
if(isset($_GET['id'])){
    include "../db/database.php";
    $db = new Database();
    $db->connect();
    $veri = $db->row("*","magaza",array("id"=>$_GET['id']));
//    print_r($veri);
}else{
    exit();
}
?>

<div class="container" style="padding-top: 50px;">
    <div class="row">
        <div class="col-12 col-sm-12 col-lg-12 col-md-12 col-xl-12">
            <form id="magaza_ekle_form" enctype="multipart/form-data" method="post" action="/admin/api/magaza_ekle.php">
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="store-name">Mağaza Adı</label>
                                <input type="text" class="form-control" id="magaza_adi" name="magaza_adi" required value="<?php echo $veri['magaza_adi'];?>">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="store-name">Logo (Değişmeyecekse seçmeyin)</label>
                                <input type="file" class="form-control-file" id="logo" name="logo">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="store-address">INSTAGRAM URL</label>
                                <input type="text" class="form-control" id="instagram_url" name="instagram_url" placeholder="https://www.instagram.com/silviomassimonline/" value="<?php if($veri['instagram_url'] != NULL){echo $veri['instagram_url'];}?>">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="store-address">INSTAGRAM KULLANICI ADI</label>
                                <input type="text" class="form-control" id="instagram_kullanici_adi" name="instagram_kullanici_adi" placeholder="silviomassimonline" value="<?php if($veri['instagram_kullanici_adi'] != NULL){echo $veri['instagram_kullanici_adi'];}?>">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="store-address">WHATSAPP URL</label>
                                <input type="text" class="form-control" id="whatsapp_url" name="whatsapp_url" placeholder="wa.me/90555555555" value="<?php if($veri['whatsapp_url'] != NULL){echo $veri['whatsapp_url'];}?>">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="store-address">WHATSAPP NUMARA</label>
                                <input type="text" class="form-control" id="whatsapp_numara" name="whatsapp_numara" placeholder="90 555 555 5555" value="<?php if($veri['whatsapp_numara'] != NULL){echo $veri['whatsapp_numara'];}?>">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="store-address">TELEFON NUMARASI</label>
                                <input type="text" class="form-control" id="telefon" name="telefon" placeholder="+90 555 555 5555" value="<?php if($veri['telefon'] != NULL){echo $veri['telefon'];}?>">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label for="store-address">KAT</label>
                                <input type="text" class="form-control" id="kat" name="kat" required placeholder="3" value="<?php if($veri['kat'] != NULL){echo $veri['kat'];}?>">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label for="store-address">DÜKKAN NUMARASI</label>
                                <input type="text" class="form-control" id="no" name="no" required placeholder="120" value="<?php if($veri['no'] != NULL){echo $veri['no'];}?>">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="store-address">FACEBOOK URL</label>
                                <input type="text" class="form-control" id="facebook_url" name="facebook_url" placeholder="https://www.facebook.com/turkiye/" value="<?php if($veri['facebook_url'] != NULL){echo $veri['facebook_url'];}?>">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="store-address">FACEBOOK KULLANICI ADI</label>
                                <input type="text" class="form-control" id="facebook_kullanici_adi" name="facebook_kullanici_adi" placeholder="turkiye" value="<?php if($veri['facebook_kullanici_adi'] != NULL){echo $veri['facebook_kullanici_adi'];}?>">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="store-address">TELEGRAM URL</label>
                                <input type="text" class="form-control" id="telegram_url" name="telegram_url" placeholder="https://t.me/IP_TV9" value="<?php if($veri['telegram_url'] != NULL){echo $veri['telegram_url'];}?>">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="store-address">TELEGRAM KULLANICI ADI</label>
                                <input type="text" class="form-control" id="telegram_kullanici_adi" name="telegram_kullanici_adi" placeholder="silvio_massimo" value="<?php if($veri['telegram_kullanici_adi'] != NULL){echo $veri['telegram_kullanici_adi'];}?>">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="store-address">TİKTOK URL</label>
                                <input type="text" class="form-control" id="tiktok_url" name="tiktok_url" value="<?php if($veri['tiktok_url'] != NULL){echo $veri['tiktok_url'];}?>">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="store-address">TİKTOK KULLANICI ADI</label>
                                <input type="text" class="form-control" id="tiktok_kullanici_adi" name="tiktok_kullanici_adi" value="<?php if($veri['tiktok_kullanici_adi'] != NULL){echo $veri['tiktok_kullanici_adi'];}?>">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="store-address">YOUTUBE URL</label>
                                <input type="text" class="form-control" id="youtube_url" name="youtube_url" placeholder="https://www.youtube.com/GewerOfficial" value="<?php if($veri['youtube_url'] != NULL){echo $veri['youtube_url'];}?>">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="store-address">YOUTUBE KULLANICI ADI</label>
                                <input type="text" class="form-control" id="youtube_kullanici_adi" name="youtube_kullanici_adi" value="<?php if($veri['youtube_kullanici_adi'] != NULL){echo $veri['youtube_kullanici_adi'];}?>">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="store-address">İLETİŞİM MAİLİ</label>
                                <input type="text" class="form-control" id="mail" name="mail" placeholder="info@collesiummall.com" value="<?php if($veri['mail'] != NULL){echo $veri['mail'];}?>">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="store-address">WEBSİTE URL</label>
                                <input type="text" class="form-control" id="website" name="website" placeholder="www.collesiummall.com" value="<?php if($veri['website'] != NULL){echo $veri['website'];}?>"s>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="slider-img-1">Slider Resimleri (Maksimum 12 Değişmeyecekse Seçmeyin!)</label>
                                <input type="file" class="form-control-file" id="slider_img_1" name="slider_img_1[]" multiple>
                                <input type="text" class="form-control" id="slider_text_1" name="slider_text_1" placeholder="Açıklama" style="margin-top: 20px;">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="store-address">KONSEPT YAZISI</label>
                                <textarea class="form-control" id="konsept_yazi" name="konsept_yazi" rows="6"><?php if($veri['konsept_yazi'] != NULL){echo $veri['konsept_yazi'];}?></textarea>
                            </div>
                        </div>
                        <div class="col-12" style="margin-bottom: 50px;">
                            <button type="submit" class="btn btn-dark btn-lg">Mağazayı Güncelle</button>

                            <!-- Success/Error Messages -->
                            <div id="form-messages" class="alert" style="display:none;margin-top: 30px;"></div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
<?php
if (!isset($_POST['magaza_adi'])) {
    $response = array(
        "status" => "error",
        "message" => "Mağaza adı girmedin!"
    );
    header("Content-Type: application/json");
    echo json_encode($response);
    exit();
}
try{

}catch (Exception $exception){

}
include "../../db/database.php";
$db = new Database();
$db->connect();
$magaza_adi = !empty($_POST['magaza_adi']) ? $_POST['magaza_adi']: null;
$instagram_url = !empty($_POST['instagram_url']) ? $_POST['instagram_url']: null;
$instagram_kullanici_adi = !empty($_POST['instagram_kullanici_adi']) ? $_POST['instagram_kullanici_adi']: null;
$whatsapp_url = !empty($_POST['instagram_kullanici_adi']) ? $_POST['instagram_kullanici_adi']: null;
$whatsapp_numara = !empty($_POST['whatsapp_numara']) ? $_POST['whatsapp_numara']: null;
$telefon = !empty($_POST['telefon']) ? $_POST['telefon']: null;
$kat = !empty($_POST['kat']) ? $_POST['kat']: null;
$no = !empty($_POST['no']) ? $_POST['no']: null;
$facebook_url = !empty($_POST['facebook_url']) ? $_POST['facebook_url']: null;
$facebbok_kullanici_adi = !empty($_POST['facebook_kullanici_adi']) ? $_POST['facebook_kullanici_adi']: null;
$telegram_url = !empty($_POST['telegram_url']) ? $_POST['telegram_url']: null;
$telegram_kullanici_adi = !empty($_POST['telegram_kullanici_adi']) ? $_POST['telegram_kullanici_adi']: null;
$tiktok_url = !empty($_POST['tiktok_url']) ? $_POST['tiktok_url']: null;
$tiktok_kullanici_adi = !empty($_POST['tiktok_kullanici_adi']) ? $_POST['tiktok_kullanici_adi']: null;
$youtube_url = !empty($_POST['youtube_url']) ? $_POST['youtube_url']: null;
$youtube_kullanici_adi = !empty($_POST['youtube_kullanici_adi']) ? $_POST['youtube_kullanici_adi']: null;
$mail = !empty($_POST['mail']) ? $_POST['mail']: null;
$website = !empty($_POST['website']) ? $_POST['website']: null;
$konsept_yazi = !empty($_POST['konsept_yazisi']) ? $_POST['konsept_yazisi']: null;
try {
    $arr = Array('magaza_adi'=> $magaza_adi,
    'instagram_url'=> $instagram_url,
    'instagram_kullanici_adi'=> $instagram_kullanici_adi,
    'whatsapp_url'=> $whatsapp_url,
    'whatsapp_numara'=> $whatsapp_numara,
    'telefon'=> $telefon,
    'kat'=> $kat,
    'no' => $no,
    'facebook_url'=> $facebook_url,
    'facebook_kullanici_adi'=> $facebbok_kullanici_adi,
    'telegram_url'=> $telegram_url,
    'telegram_kullanci_adi'=> $telegram_kullanici_adi,
    'tiktok_url'=> $tiktok_url,
    'tiktok_kullanici_adi'=> $tiktok_kullanici_adi,
    'youtube_url'=> $youtube_url,
    'youtube_kullanici_adi'=> $youtube_kullanici_adi,
    'mail'=> $mail,
    'website'=> $website,
    'konsept_yazi'=> $konsept_yazi);

    global $sayi, $dosya;
    $dosya = null;

    //SLİDER RESİMLERİ
    for ($i = 0; $i <= 11; $i++) {
        if (isset($_FILES['slider_img_1']['name'][$i])) {
            $dosya = $_FILES['slider_img_1'];
            $dosya_ismi = $dosya['name'][$i];
            $temp_isim = $dosya['tmp_name'][$i];
            $boyut = $dosya['size'][$i];
            $hata = $dosya['error'][$i];
            $dosya_uzantisi = explode(".", $dosya_ismi);
            $dosya_uzantisi = strtolower(end($dosya_uzantisi));

            $kabul_edilen_uzanti = array("jpg", "jpeg", "gif", "tiff", "png", "svg");

            if (in_array($dosya_uzantisi, $kabul_edilen_uzanti)) {
                if ($hata === 0) {
                    $yeni_dosya_adi = uniqid('', true) . "." . $dosya_uzantisi;

                    $upload_konumu = "../../yuklenen/" . date("Ymd") . "/" . $yeni_dosya_adi;
                    if (!is_dir("../../yuklenen/" . date("Ymd") . "/")) {
                        mkdir("../../yuklenen/" . date("Ymd") . "/", 0777, true);
                    }
                    if (move_uploaded_file($temp_isim, $upload_konumu)) {
                        $dosya = "/yuklenen/" . date("Ymd") . "/" . $yeni_dosya_adi;
                        $arr['slider_img_' . strval($i+1)] = $dosya;
                    }
                }
            }
        } else {
            $dosya = null;
            $arr['slider_img_' . strval($i+1)] = $dosya;
        }
    }
    //LOGO
    if(isset($_FILES['logo']['name'])){
       $dosya = $_FILES['logo'];
       $dosya_ismi = $dosya['name'];
       $temp_isim = $dosya['tmp_name'];
       $boyut = $dosya['size'];
       $hata = $dosya['error'];
       $dosya_uzantisi = explode(".", $dosya_ismi);
       $dosya_uzantisi = strtolower(end($dosya_uzantisi));

       $kabul_edilen_uzanti = array("jpg", "jpeg", "gif", "tiff", "png", "svg");
       if (in_array($dosya_uzantisi, $kabul_edilen_uzanti)) {
           if ($hata === 0) {
               $yeni_dosya_adi = uniqid('', true) . "." . $dosya_uzantisi;

               $upload_konumu = "../../logo/" . $_POST['magaza_adi'] . "/" . $yeni_dosya_adi;
               if (!is_dir("../../logo/" . $_POST['magaza_adi'] . "/")) {
                   mkdir("../../logo/" . $_POST['magaza_adi'] . "/", 0777, true);
               }
               if (move_uploaded_file($temp_isim, $upload_konumu)) {
                   $dosya = "../../logo/" . $_POST['magaza_adi'] . "/" . $yeni_dosya_adi;
                   $arr['logo'] = $dosya;
               }
           }
       }
   }

    //ÇALIŞTIR
    $db->insert("magaza",$arr);
    // Execute Statement
//    $response = array(
//        "status" => "error",
//        "message" => "Mağaza ekleme başarılı."
//    );
//    header("Content-Type: text/html");
//    echo json_encode($response);
    include "../sayfa/magaza_ekle_basarili.php";
} catch (PDOException $e) {
    $response = array(
        "status" => "error",
        "message" => "Mağaza eklenirken bir hata oluştu.\n" . $e->getMessage()
    );
    header("Content-Type: text/html");
    echo json_encode($response);
    exit();
}
?>
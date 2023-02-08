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
include "../../db/database.php";
$db = new Database();
$db->connect();
$db->query("SET CHARSET 'utf8'");

function url_make($str)
{
    $before = array('ı', 'ğ', 'ü', 'ş', 'ö', 'ç', 'İ', 'Ğ', 'Ü', 'Ö', 'Ç'); // , '\'', '""'
    $after = array('i', 'g', 'u', 's', 'o', 'c', 'i', 'g', 'u', 'o', 'c'); // , '', ''

    $clean = str_replace($before, $after, $str);
    $clean = preg_replace('/[^a-zA-Z0-9 ]/', '', $clean);
    $clean = preg_replace('!\s+!', '-', $clean);
    $clean = strtolower(trim($clean, '-'));

    return $clean;
}
$magaza_adi = !empty($_POST['magaza_adi']) ? $_POST['magaza_adi']: null;
$instagram_url = !empty($_POST['instagram_url']) ? $_POST['instagram_url']: null;
$instagram_kullanici_adi = !empty($_POST['instagram_kullanici_adi']) ? $_POST['instagram_kullanici_adi']: null;
$whatsapp_url = !empty($_POST['instagram_kullanici_adi']) ? $_POST['instagram_kullanici_adi']: null;
$whatsapp_numara = !empty($_POST['whatsapp_numara']) ? $_POST['whatsapp_numara']: null;
$telefon = !empty($_POST['telefon']) ? $_POST['telefon']: null;
$kat = !empty($_POST['kat']) ? $_POST['kat']: "00";
$no = !empty($_POST['no']) ? $_POST['no']: null;
$facebbok_kullanici_adi = !empty($_POST['facebook_kullanici_adi']) ? $_POST['facebook_kullanici_adi']: null;
$telegram_url = !empty($_POST['telegram_url']) ? $_POST['telegram_url']: null;
$telegram_kullanici_adi = !empty($_POST['telegram_kullanici_adi']) ? $_POST['telegram_kullanici_adi']: null;
$tiktok_url = !empty($_POST['tiktok_url']) ? $_POST['tiktok_url']: null;
$tiktok_kullanici_adi = !empty($_POST['tiktok_kullanici_adi']) ? $_POST['tiktok_kullanici_adi']: null;
$youtube_url = !empty($_POST['youtube_url']) ? $_POST['youtube_url']: null;
$youtube_kullanici_adi = !empty($_POST['youtube_kullanici_adi']) ? $_POST['youtube_kullanici_adi']: null;
$mail = !empty($_POST['mail']) ? $_POST['mail']: null;
$website = !empty($_POST['website']) ? $_POST['website']: null;
$konsept_yazi = !empty($_POST['konsept_yazi']) ? $_POST['konsept_yazi']: null;
$konsept_yazi_en = !empty($_POST['konsept_yazi_en']) ? $_POST['konsept_yazi_en']: null;
$id = !empty($_POST['id']) ? $_POST['id']: null;

try {
    $arr = Array('magaza_adi'=> $magaza_adi,
        'instagram_url'=> "https://www.instagram.com/" . $instagram_kullanici_adi,
        'instagram_kullanici_adi'=> $instagram_kullanici_adi,
        'whatsapp_url'=> "https://wa.me/" . $whatsapp_numara,
        'whatsapp_numara'=> $whatsapp_numara,
        'telefon'=> $telefon,
        'kat'=> $kat,
        'no' => $no,
        'facebook_url'=> "https://www.facebook.com/" . $facebbok_kullanici_adi,
        'facebook_kullanici_adi'=> $facebbok_kullanici_adi,
        'telegram_url'=> "https://www.telegram.me/" . $telegram_kullanici_adi,
        'telegram_kullanci_adi'=> $telegram_kullanici_adi,
        'tiktok_url'=> "https://www.tiktok.com/@" . $tiktok_kullanici_adi,
        'tiktok_kullanici_adi'=> $tiktok_kullanici_adi,
        'youtube_url'=> $youtube_url,
        'youtube_kullanici_adi'=> $youtube_kullanici_adi,
        'mail'=> $mail,
        'website'=> $website,
        'konsept_yazi'=> $konsept_yazi,
        'konsept_yazi_en'=> $konsept_yazi_en);

    global $sayi, $dosya;
    $dosya = null;

    //SLİDER RESİMLERİ
    for ($i = 0; $i <= 11; $i++) {
        if (isset($_FILES['slider_img_1'][$i]) && $_FILES['slider_img_1'][$i]['error'] === UPLOAD_ERR_OK && $_FILES['slider_img_1'][$i]['size'] > 0) {
//             if (isset($_FILES['slider_img_1']['name'][$i])) {
            $dosya = $_FILES['slider_img_1'];
            $dosya_ismi = $dosya['name'][$i];
            $temp_isim = $dosya['tmp_name'][$i];
            $boyut = $dosya['size'][$i];
            $hata = $dosya['error'][$i];
            $dosya_uzantisi = explode(".", $dosya_ismi);
            $dosya_uzantisi = strtolower(end($dosya_uzantisi));

            $kabul_edilen_uzanti = array("jpg", "jpeg", "gif", "tiff", "png", "svg");

            if (in_array(strtolower($dosya_uzantisi), $kabul_edilen_uzanti)) {
                if ($hata === 0) {
                    $yeni_dosya_adi = uniqid('', true) . "." . $dosya_uzantisi;

                    $upload_konumu = "../../yuklenen/" . date("Ymd") . "/" . $yeni_dosya_adi;
                    if (!is_dir("../../yuklenen/" . date("Ymd") . "/")) {
                        mkdir("../../yuklenen/" . date("Ymd") . "/", 0777, true);
                    }
                    if (move_uploaded_file($temp_isim, $upload_konumu)) {
                        $dosya = "yuklenen/" . date("Ymd") . "/" . $yeni_dosya_adi;
                        $arr['slider_img_' . strval($i+1)] = $dosya;
                    }
                }
            }
        }
    }
    //LOGO
    try{
        if (isset($_FILES['logo']) && $_FILES['logo']['error'] === UPLOAD_ERR_OK && $_FILES['logo']['size'] > 0) {
//        if(isset($_FILES['logo']['name'])){
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
                    $yol = url_make($_POST['magaza_adi']);
                    $upload_konumu = "../../logo/" . $yol . "/" . $yeni_dosya_adi;
                    if (!is_dir("../../logo/" . $yol . "/")) {
                        mkdir("../../logo/" . $yol . "/", 0777, true);
                    }
                    if (move_uploaded_file($temp_isim, $upload_konumu)) {
                        $dosya = "logo/" . $yol . "/" . $yeni_dosya_adi;
                        $arr['logo'] = $dosya;
                    }else{
                        $arr['logo'] = "Yüklenen resim taşınamadı! Tekrar Deneyin!";
                    }
                }else{
                    $arr['logo'] = "Fotoğraf yüklenirken bir hata oluştu! :" . $hata;
                }
            }else{
                $arr['logo'] = "kabul edilmeyen dosya türü! : " . $dosya_uzantisi;
            }
        }
    }catch (Exception $e){
        $arr['logo'] = "Hata! : " . $e->getMessage();
    }

    try{
        $sonuc = $db->updatee("magaza", $arr,array('id'=>$id));

        $response = array(
            "status" => "success",
            "message" => "Mağaza başarıyla güncellendi." . $id
        );
    }catch (Exception $e){
        $response = array(
            "status" => "error",
            "message" => "Mağaza güncellenemedi!." . $e->getMessage()
        );
    }
    //ÇALIŞTIR

    // Execute Statement


    header("Content-Type: text/html");
    echo json_encode($response);
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
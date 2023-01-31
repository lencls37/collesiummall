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
$host = 'localhost';
$dbname = 'collesiummall';
$username = 'root';
$password = '';

$magaza_adi = !empty($_POST['magaza_adi']) ? $_POST['magaza_adi'] : null;
$instagram_url = !empty($_POST['instagram_url']) ? $_POST['instagram_url'] : null;
$instagram_kullanici_adi = !empty($_POST['instagram_kullanici_adi']) ? $_POST['instagram_kullanici_adi'] : null;
$whatsapp_url = !empty($_POST['instagram_kullanici_adi']) ? $_POST['instagram_kullanici_adi'] : null;
$whatsapp_numara = !empty($_POST['whatsapp_numara']) ? $_POST['whatsapp_numara'] : null;
$telefon = !empty($_POST['telefon']) ? $_POST['telefon'] : null;
$kat_ve_numara = !empty($_POST['kat_ve_numara']) ? $_POST['kat_ve_numara'] : null;
$facebook_url = !empty($_POST['facebook_url']) ? $_POST['facebook_url'] : null;
$facebbok_kullanici_adi = !empty($_POST['facebbok_kullanici_adi']) ? $_POST['facebbok_kullanici_adi'] : null;
$telegram_url = !empty($_POST['telegram_url']) ? $_POST['telegram_url'] : null;
$telegram_kullanici_adi = !empty($_POST['telegram_kullanici_adi']) ? $_POST['telegram_kullanici_adi'] : null;
$tiktok_url = !empty($_POST['tiktok_url']) ? $_POST['tiktok_url'] : null;
$tiktok_kullanici_adi = !empty($_POST['tiktok_kullanici_adi']) ? $_POST['tiktok_kullanici_adi'] : null;
$youtube_url = !empty($_POST['youtube_url']) ? $_POST['youtube_url'] : null;
$youtube_kullanici_adi = !empty($_POST['youtube_kullanici_adi']) ? $_POST['youtube_kullanici_adi'] : null;
$mail = !empty($_POST['mail']) ? $_POST['mail'] : null;
$website = !empty($_POST['website']) ? $_POST['website'] : null;
$konsept_yazi = !empty($_POST['konsept_yazi']) ? $_POST['konsept_yazi'] : null;



global $slider_img_1, $slider_img_2, $slider_img_3, $slider_img_4, $slider_img_5, $slider_img_6, $slider_img_7, $slider_img_8, $slider_img_9;
global $slider_img_10, $slider_img_11, $slider_img_12;

$slider_text_1 = !empty($_POST['slider_text_1']) ?? $_POST['slider_text_1'];
$slider_text_2 = !empty($_POST['slider_text_2']) ?? $_POST['slider_text_2'];
$slider_text_3 = !empty($_POST['slider_text_3']) ?? $_POST['slider_text_3'];
$slider_text_4 = !empty($_POST['slider_text_4']) ?? $_POST['slider_text_4'];
$slider_text_5 = !empty($_POST['slider_text_5']) ?? $_POST['slider_text_5'];
$slider_text_6 = !empty($_POST['slider_text_6']) ?? $_POST['slider_text_6'];
$slider_text_7 = !empty($_POST['slider_text_7']) ?? $_POST['slider_text_7'];
$slider_text_8 = !empty($_POST['slider_text_8']) ?? $_POST['slider_text_8'];
$slider_text_9 = !empty($_POST['slider_text_9']) ?? $_POST['slider_text_9'];
$slider_text_10 = !empty($_POST['slider_text_10']) ?? $_POST['slider_text_10'];
$slider_text_11 = !empty($_POST['slider_text_11']) ?? $_POST['slider_text_11'];
$slider_text_12 = !empty($_POST['slider_text_12']) ?? $_POST['slider_text_12'];

try {
    // Veritabanı Bağlantısı
    global $conn;
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Verileri Filtrele
//    $deger1 = filter_var($_POST['deger1'], FILTER_SANITIZE_STRING);
//    $deger2 = filter_var($_POST['deger2'], FILTER_SANITIZE_EMAIL);
//    $deger3 = filter_var($_POST['deger3'], FILTER_SANITIZE_NUMBER_INT);


    // Prepare Statement
    $stmt = $conn->prepare("INSERT INTO `magaza`(`magaza_adi`, `instagram_url`, `instagram_kullanici_adi`,
                     `whatsapp_url`, `whatsapp_numara`, `telefon`, `kat_ve_numara`, `facebook_url`, 
                     `facebook_kullanici_adi`, `telegram_url`, `telegram_kullanci_adi`, `tiktok_url`, 
                     `tiktok_kullanici_adi`, `youtube_url`, `youtube_kullanici_adi`, `mail`, `website`, 
                     `konsept_yazi`, `slider_img_1`, `slider_img_2`,`slider_img_3`,`slider_img_4`,
                     `slider_img_5`,`slider_img_6`,`slider_img_7`,`slider_img_8`, `slider_img_9`,
                     `slider_img_10`,`slider_img_11`,`slider_img_12`,
                     `logo`) VALUES (:magaza_adi,:instagram_url,:instagram_kullanici_adi,:whatsapp_url,
                                     :whatsapp_numara,:telefon,:kat_ve_numara,:facebook_url,:facebook_kullanici_adi,
                                     :telegram_url,:telegram_kullanici_adi,:tiktok_url,:tiktok_kullanici_adi,
                                     :youtube_url,:youtube_kullanici_adi,:mail,:website,:konsept_yazi,
                                     :slider_img_1,:slider_img_2,
                                     :slider_img_3,:slider_img_4,
                                     :slider_img_5,:slider_img_6,
                                     :slider_img_7,:slider_img_8,
                                     :slider_img_9,:slider_img_10,
                                     :slider_img_11,:slider_img_12,
                                     :logo)");

    // Bind Parameters
    $stmt->bindParam(':magaza_adi', $magaza_adi);
    $stmt->bindParam(':instagram_url', $instagram_url);
    $stmt->bindParam(':instagram_kullanici_adi', $instagram_kullanici_adi);
    $stmt->bindParam(':whatsapp_url', $whatsapp_url);
    $stmt->bindParam(':whatsapp_numara', $whatsapp_numara);
    $stmt->bindParam(':telefon', $telefon);
    $stmt->bindParam(':kat_ve_numara', $kat_ve_numara);
    $stmt->bindParam(':facebook_url', $facebook_url);
    $stmt->bindParam(':facebook_kullanici_adi', $facebook_kullanici_adi);
    $stmt->bindParam(':telegram_url', $telegram_url);
    $stmt->bindParam(':telegram_kullanici_adi', $telegram_kullanici_adi);
    $stmt->bindParam(':tiktok_url', $tiktok_url);
    $stmt->bindParam(':tiktok_kullanici_adi', $tiktok_kullanici_adi);
    $stmt->bindParam(':youtube_url', $youtube_url);
    $stmt->bindParam(':youtube_kullanici_adi', $youtube_kullanici_adi);
    $stmt->bindParam(':mail', $mail);
    $stmt->bindParam(':website', $website);
    $stmt->bindParam(':konsept_yazi', $konsept_yazi);

    global $sayi, $dosya;
    $dosya = null;
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
//                if (move_uploaded_file($temp_isim, $upload_konumu)) {
                    if (move_uploaded_file($temp_isim, $upload_konumu)) {
                        $dosya = "/yuklenen/" . date("Ymd") . "/" . $yeni_dosya_adi;
                        $stmt->bindParam(':slider_img_' . $i+1, $dosya,PDO::PARAM_STR);
                    }
                }
            }
        } else {
            $dosya = null;
            $stmt->bindParam(':slider_img_' . $i+1, $dosya,PDO::PARAM_NULL);

        }
    }
    $logo = null;
    $logo = isset($_FILES['logo']['name']) ?? $_FILES['logo']['name'];
    $stmt->bindParam(':logo', $logo);


    $stmt->execute();
    // Execute Statement
    $response = array(
        "status" => "success",
        "message" => "Mağaza başarıyla eklendi."
    );
} catch (PDOException $e) {
    $response = array(
        "status" => "error",
        "message" => "Mağaza eklenirken bir hata oluştu.\n" . $e->getMessage()
    );
    header("Content-Type: application/json");
    echo json_encode($response);
    exit();
}

// Return Response
header("Content-Type: application/json");
echo json_encode($response);
?>
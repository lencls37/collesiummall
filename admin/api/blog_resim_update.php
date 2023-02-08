<?php
if (isset($_FILES['bg']) && $_FILES['bg']['error'] === UPLOAD_ERR_OK && $_FILES['bg']['size'] > 0 && !empty($_POST['id'])) {
//RESİM YÜKLENDİ
    include "../../db/database.php";
    $db = new Database();
    $db->connect();
    $db->query("SET CHARSET 'utf8'");
    try {
        $dosya = $_FILES['bg'];
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
                $yol = $_POST['id'];
                $upload_konumu = "../../blog/" . $yol . "/" . $yeni_dosya_adi;
                if (!is_dir("../../blog/" . $yol . "/")) {
                    mkdir("../../blog/" . $yol . "/", 0777, true);
                }
                if (move_uploaded_file($temp_isim, $upload_konumu)) {
                    $dosya = "blog/" . $yol . "/" . $yeni_dosya_adi;
                    $sonuc = $dosya;
                    $mesaj ="";
                } else {
                    $sonuc ="";
                    $mesaj = "Yüklenen resim taşınamadı! Tekrar Deneyin!";
                }
            } else {
                $sonuc = "";
                $mesaj = "Fotoğraf yüklenirken bir hata oluştu! :" . $hata;
            }
        } else {
            $sonuc = "";
            $mesaj= "kabul edilmeyen dosya türü! : " . $dosya_uzantisi;
        }

    } catch (Exception $e) {
        $mesaj = "Hata! : " . $e->getMessage();
        $sonuc = "";
    }

    if(!empty($sonuc)){
        try{
            $db->updatee("blog",array("resim"=>$sonuc),array('id'=>$_POST['id']));
            echo "Dosya başarıyla eklendi!";
        }catch (Exception $e){
            echo "Dosya yükleme hatası!" . $e->getMessage();
        }

    }elseif(!empty($mesaj)){
        echo "Hata ! : ";
        echo $mesaj;
    }
} else {
    echo "Resim Yüklenmedi! Resim veya ID boş olamaz!";
    print_r($_FILES);
    echo $_POST['id'];
}
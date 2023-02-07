<?php
try {
    $db = new PDO('mysql:host=localhost;dbname=collesiummall_db', "collesiummall_admin", "*904f_Sj!8AqSxBP");
    $baslik = $_POST['baslik'];
    $tarih = $_POST['tarih'];
    $content = $_POST['html_yazi'];
    $id = $_POST['id'];
    $etiket = $_POST['etiket'];
    $sql = "UPDATE `blog` SET `baslik`='".$baslik."',`tarih`='".$tarih."',`html_yazi`='".$content."',`etiket`='".$etiket."' WHERE `id`='".$id."'";
    $veri = $db->query($sql);
    $sonuc = $veri->rowCount();
    echo "Blog yazısı başarıyla güncellendi : \n $sonuc \n";
    echo "Başlık : " . $baslik . "\nTarih: " . $tarih . "\nHTML : " . $content . "id: \n" . $id;
} catch(PDOException $e) {
// Print the error message
    echo "Hata! : " . $e->getMessage();
}
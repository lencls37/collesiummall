<?php
try {
include "../../db/database.php";
$db = new Database();
$db->connect();
$baslik = $_POST['baslik'];
$baslik_en = $_POST['baslik'];
$tarih = $_POST['tarih'];
$content = $_POST['html_yazi'];
$content_en = $_POST['html_yazi_en'];
$etiket =  $_POST['etiket'];
$etiket_en =  $_POST['etiket_en'];
$youtube = $_POST['youtube'];
$db->query("SET CHARSET 'utf8'");
$sonuc = $db->insert("blog",array("baslik" => $baslik,"baslik_en"=>$baslik_en,"tarih" => $tarih, "html_yazi" => $content,"html_yazi_en"=>$content_en,"etiket" => $etiket,"etiket_en"=>$etiket_en,"youtube"=>$youtube));

echo "Blog yazısı başarıyla eklendi";
} catch(PDOException $e) {
// Print the error message
echo "Hata! : " . $e->getMessage();
}
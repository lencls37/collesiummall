<?php
try {
include "../../db/database.php";
$db = new Database();
$db->connect();
$baslik = $_POST['baslik'];
$tarih = $_POST['tarih'];
$content = $_POST['html_yazi'];
$etiket =  $_POST['etiket'];
$db->query("SET CHARSET 'utf8'");
$sonuc = $db->insert("blog",array("baslik" => $baslik,"tarih" => $tarih, "html_yazi" => $content,"etiket" => $etiket));

echo "Blog yazısı başarıyla eklendi";
} catch(PDOException $e) {
// Print the error message
echo "Hata! : " . $e->getMessage();
}
<?php
try {
    include "../../db/database.php";
    $db = new Database();
    $db->connect();
//    $db = new PDO('mysql:host=localhost;dbname=collesiummall_db', "collesiummall_admin", "*904f_Sj!8AqSxBP");
//    $db->query("SET CHARSET 'utf8'");
    $baslik = $_POST['baslik'];
    $baslik_en = $_POST['baslik_en'];
    $tarih = $_POST['tarih'];
    $content = $_POST['html_yazi'];
    $content_en = $_POST['html_yazi_en'];
    $id = $_POST['id'];
    $etiket = $_POST['etiket'];
    $etiket_en = $_POST['etiket_en'];
    $youtube = $_POST['youtube'];
//    $sql = "UPDATE `blog` SET `baslik`='".$baslik."',`baslik_en`='".$baslik_en."',`tarih`='".$tarih."',`html_yazi`='".$content."',`html_yazi_en`='".$content_en."',`etiket_en`='".$etiket_en."',`youtube`='".$youtube."',`etiket`='".$etiket."'  WHERE `id`='".$id."'";
//    $veri = $db->query($sql);
    $veri = $db->update("blog",array("baslik"=>$baslik,"baslik_en"=>$baslik_en,"tarih"=>$tarih,"html_yazi"=>$content,"html_yazi_en"=>$content_en,"etiket"=>$etiket,"etiket_en"=>$etiket_en,"youtube"=>$youtube),array("id"=>$id));
    if($veri == true){
        echo "Blog yazısı başarıyla güncellendi";
    }else{
        echo "wrong sql: ";
    }

} catch(PDOException $e) {
// Print the error message
    echo "Hata! : " . $e->getMessage();
}
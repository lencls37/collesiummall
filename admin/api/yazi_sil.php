<?php
if (!isset($_GET['id'])) {
    $response = array(
        "status" => "error",
        "message" => "Eksik bilgi!"
    );
    header("Content-Type: application/json");
    echo json_encode($response);
    exit();
}
include "../db/database.php";
$db = new Database();
$db->connect();
$yazi_id = $_GET['id'];

if(isset($_GET['onay'])){
    if($_GET['onay'] === "1"){
        try{
            $db->delete("blog",array("id" => $yazi_id));
            include "yazi_sil_ok.php";
        }catch (Exception $ex){
            echo "Hata! : \n" . $ex;
            exit();
        }
    }
}else{
    include "yazi_sil_soru.php";
}
?>
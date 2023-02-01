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
$magaza_id = $_POST['id'];

if(isset($_GET['onay'])){
    if($_GET['onay'] === "1"){
        $db->delete("magaza",array("id" => $magaza_id));
    }
}
?>
<style>

    .hbir {
        color: #88B04B;
        font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
        font-weight: 900;
        font-size: 40px;
        margin-bottom: 10px;
    }

    .paragraf {
        color: #404F5E;
        font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
        font-size: 20px;
        margin: 0;
    }

    .checkmark {
        color: #9ABC66;
        font-size: 100px;
        line-height: 200px;
        margin-left: -15px;
    }

    .card {
        background: white;
        padding: 60px;
        border-radius: 4px;
        box-shadow: 0 2px 3px #C8D0D8;
        display: inline-block;
        margin: 0 auto;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col text-center">
            <div class="card" style="margin-top: 50px;">
                <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
                    <i class="checkmark">?</i>
                </div>
                <h1 class="hbir">Bu işlem geri alınamaz!</h1>
                <p class="paragraf">Mağazayı gerçekten silmek istiyormusunuz?<br><strong>Bu işlem geri alınamaz!!!</strong>></p>
                <button class="btn-danger btn" onclick=<?php echo "location.href='/admin/index.php?sayfa=magaza_sil&id=". $magaza_id ."&onay=1"?>>Silme işlemini onayla</button>

            </div>
        </div>
    </div>
</div>

</body>
</html>

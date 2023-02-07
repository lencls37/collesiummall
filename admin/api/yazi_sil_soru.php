<style>
    .hbir {
        color: #ff0000;
        font-family: 'Nunito Sans', 'Helvetica Neue', sans-serif;
        font-weight: 900;
        font-size: 40px;
        margin-bottom: 10px;
    }

    .paragraf {
        color: #404F5E;
        font-family: 'Nunito Sans', 'Helvetica Neue', sans-serif;
        font-size: 20px;
        margin: 0;
    }

    .checkmark {
        color: #ff0000;
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
<div class='container'>
    <div class='row'>
        <div class='col text-center'>
            <div class='card' style='margin-top: 50px;'>
                <div style='border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;'>
                    <i class='checkmark'>!!</i>
                </div>
                <h1 class='hbir'>Bu işlem geri alınamaz!</h1>
                <p class='paragraf'>Yazıyı gerçekten silmek istiyormusunuz?<br><strong>Bu işlem geri alınamaz!!!</strong></p>
                <a class='btn-danger btn' href='/admin/index.php?sayfa=yazi_sil&id=<?php echo $_GET['id']?>&onay=1'>Silme işlemini onayla</a>
            </div>
        </div>
    </div>
</div>
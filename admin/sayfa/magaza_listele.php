<?php
try {
    $db = new PDO("mysql:host=localhost;dbname=collesiummall_db", "collesiummall_admin", "*904f_Sj!8AqSxBP");
//    $db = new PDO("mysql:host=localhost;dbname=collesiummall", "root", "");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = "SELECT * FROM magaza";
    $stmt = $db->prepare($query);
    $stmt->execute();

    $veri = $stmt->fetchAll();
} catch(PDOException $e) {
    echo $e->getMessage();
}

?>

<div class="container">
    <div class="row">
        <div class="col">
            <table class="table table-dark">
                <thead>
                <tr>
                    <th scope="col">Mağaza Adı</th>
                    <th scope="col">Kat Ve No</th>
                    <th scope="col">Whatsapp</th>
                    <th scope="col">Düzenle & Sil</th>
                </tr>
                </thead>
                <tbody>
                <?php
                if(is_array($veri)){
                    foreach ($veri as $asd){
                        echo '<tr>
                            <td>'.$asd['magaza_adi'].'</td>
                            <td>Kat '.$asd['kat'].' Dükkan no: '.$asd['no'].'</td>
                            <td>'.$asd['whatsapp_numara'].'</td>
                            <td><a class="btn btn-light" href="/test/admin/index.php?sayfa=magaza_duzenle&id='.$asd['id'].'" style="margin-right: 20px;">Düzenle</a><a class="btn btn-danger" href="/test/admin/index.php?sayfa=magaza_sil&id='.$asd['id'].'">Sil</a></td>
                          </tr>
                          
                          ';
                    }

                };
                ?>

                </tbody>
            </table>

        </div>
    </div>
</div>

<?php
try {
    $db = new PDO("mysql:host=localhost;dbname=collesiummall_db", "collesiummall_admin", "*904f_Sj!8AqSxBP");
//    $db = new PDO("mysql:host=localhost;dbname=collesiummall", "root", "");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->query("SET CHARACTER SET utf8");

    $query = "SELECT * FROM `blog` ORDER BY `blog`.`id` ASC";

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
                    <th scope="col">Blog ID</th>
                    <th scope="col">Baslik</th>
                    <th scope="col">Tarih</th>
                </tr>
                </thead>
                <tbody>
                <?php
                if(is_array($veri)){
                    foreach ($veri as $asd){
                        echo '<tr>
                            <td>'.$asd['id'].'</td>
                            <td>'.$asd['baslik'].'</td>
                            <td><a class="btn btn-light" href="/admin/index.php?sayfa=yazi_duzenle&id='.$asd['id'].'" style="margin-right: 20px;">Düzenle</a><a class="btn btn-danger" href="/admin/index.php?sayfa=yazi_sil&id='.$asd['id'].'">Sil</a></td>
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

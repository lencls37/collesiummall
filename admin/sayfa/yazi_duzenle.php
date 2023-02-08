<?php
if(!isset($_GET['id'])){
    echo "ID boş olamaz!";
    exit();
}else{
    include "../db/database.php";
    $db = new Database();
    $db->connect();
    $db->query("SET CHARSET 'utf8'");
    $veri = $db->row("*","blog",array('id' => $_GET['id']));
}
?>

<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<div class="container" style="padding-top: 50px;">
    <div class="row">
        <div class="col-12 col-sm-12 col-lg-12 col-md-12 col-xl-12">
            <form id="form">
                <div class="container">
                    <div class="row">
                        <div class="col-3">
                            <div class="form-group">
                                <label for="store-name">Yazı Başlığı</label>
                                <input type="text" class="form-control" id="baslik" name="baslik" required <?php echo 'value="'. $veri['baslik'].'"';?>>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label for="store-name">Yazı Başlığı En</label>
                                <input type="text" class="form-control" id="baslik_en" name="baslik_en" required <?php echo 'value="'. $veri['baslik_en'].'"';?>>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="store-name">Tarih</label>
                                <input type="date" class="form-control" id="tarih" name="tarih" required  <?php echo 'value="'.$veri['tarih'].'"'?>>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="store-name">Yazı İçeriği</label>
                                <div id="editor"><?php echo $veri['html_yazi']?></div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="store-name">Yazı İçeriği EN</label>
                                <div id="editor_en"><?php echo $veri['html_yazi_en']?></div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="hash">Etiketler</label>
                                <input type="text" class="form-control" id="etiket" name="etiket" required placeholder="Virgülle ayırınız.." <?php echo 'value="'.$veri['etiket'].'"'?>>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="hash">Etiketler En</label>
                                <input type="text" class="form-control" id="etiket_en" name="etiket_en" required placeholder="Virgülle ayırınız.." <?php echo 'value="'.$veri['etiket_en'].'"'?>>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="hash">Youtube Embed</label>
                                <input type="text" class="form-control" id="youtube" name="youtube" placeholder="https://www.youtube.com/embed/7ZyX6uxitKI" <?php echo 'value="'.$veri['youtube'].'"'?>>
                            </div>
                        </div>
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-dark">Yazı Güncelle</button>
                        </div>
                        <div class="col-12" style="margin-top: 25px;">
                            <div class="alert alert-success" id="basarili" style="display: none;"></div>
                            <div class="alert alert-danger" id="basarisiz" style="display: none;"></div>
                        </div>
                        <div style="display: none;" id="id"><?php echo $_GET['id'];?></div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-12 col-lg-12 col-sm-12 col-xl-12 col-md-12">
            <form action="api/blog_resim_update.php" method="post" enctype="multipart/form-data">
                <div class="col-6">
                    <div class="form-group">
                        <label for="hash">Blog resmi (Değişmeyecekse Seçmeyin!)</label>
                        <input type="file" id="bg" name="bg">
                        <div id="output"></div>
                    </div>
                </div>
                <div class="form-group" style="display:none;"><input type="text" id="id" name="id" <?php echo 'value="' . $_GET['id'] . '"';?>></div>
                <div class="col-6">
                    <div class="form-group">
                        <button type="submit" class="btn btn-dark">Yükle</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Include the Quill library -->
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

<!-- Initialize Quill editor -->
<script>
    $('#resim').on('change', function() {

        const size =
            (this.files[0].size / 1024 / 1024).toFixed(2);

        if (size > 2) {
            alert("Dosya Boyutu Maks 2 MB arası olmalıdır.");
            $("#output").html('<b>' +
                'Dosya Boyutu: ' + size + " KB" + '</b>');
        } else {
            $("#output").html('<b>' +
                'Dosya Boyutu: ' + size + " KB" + '</b>');
        }
    });

    var toolbarOptions = [
        ['bold', 'italic', 'underline', 'strike'],        // toggled buttons
        ['blockquote', 'code-block'],
        ['image'],

        [{ 'header': 1 }, { 'header': 2 }],               // custom button values
        [{ 'list': 'ordered'}, { 'list': 'bullet' }],
        [{ 'script': 'sub'}, { 'script': 'super' }],      // superscript/subscript
        [{ 'indent': '-1'}, { 'indent': '+1' }],          // outdent/indent
        [{ 'direction': 'rtl' }],                         // text direction

        [{ 'size': ['small', false, 'large', 'huge'] }],  // custom dropdown
        [{ 'header': [1, 2, 3, 4, 5, 6, false] }],

        [{ 'color': [] }, { 'background': [] }],          // dropdown with defaults from theme
        [{ 'font': [] }],
        [{ 'align': [] }],
        ['image', 'code-block'],
        ['clean']                                         // remove formatting button
    ];

    var quill = new Quill('#editor', {
        modules: {
            toolbar: toolbarOptions
        },
        theme: 'snow'
    });

    var quill_en = new Quill('#editor_en', {
        modules: {
            toolbar: toolbarOptions
        },
        theme: 'snow'
    });

    const form = document.getElementById("form");
    form.addEventListener("submit", function(event) {
        event.preventDefault();
        let etiket = document.getElementById('etiket').value;
        let etiket_en = document.getElementById('etiket_en').value;
        let baslik = document.querySelector('#baslik').value;
        let baslik_en = document.querySelector('#baslik_en').value;
        let tarih = document.querySelector('#tarih').value;
        let content = quill.root.innerHTML;
        let content_En = quill_en.root.innerHTML;
        let id = document.getElementById("id").innerText;
        let youtube = document.getElementById("youtube").value;
        $.ajax({
            type: 'POST',
            url: 'api/yazi_duzenle.php',
            data:{
                baslik: baslik,
                baslik_en: baslik_en,
                tarih: tarih,
                html_yazi: content,
                html_yazi_en: content_En,
                etiket: etiket,
                etiket_en: etiket_en,
                youtube: youtube,
                id: id
            },
            success: function (data){
                let goster = $('#basarili');
                goster.html(data);
                document.getElementById("basarili").style.display = "block";
                console.log(id);
            },
            error: function (data){
                let goster = $('#basarisiz');
                goster.html(data);
                document.getElementById("basarisiz").style.display = "block";
                console.log(id);
            }
        })
    });
</script>

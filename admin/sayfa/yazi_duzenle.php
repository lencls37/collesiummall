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
                        <div class="col-6">
                            <div class="form-group">
                                <label for="store-name">Yazı Başlığı</label>
                                <input type="text" class="form-control" id="baslik" name="baslik" required <?php echo 'value="'. $veri['baslik'].'"';?>>
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
                                <label for="hash">Etiketler</label>
                                <input type="text" class="form-control" id="etiket" name="etiket" required placeholder="Virgülle ayırınız.." <?php echo 'value="'.$veri['etiket'].'"'?>>
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
    </div>
</div>

<!-- Include the Quill library -->
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

<!-- Initialize Quill editor -->
<script>
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

    const form = document.getElementById("form");
    form.addEventListener("submit", function(event) {
        event.preventDefault();
        let baslik = document.querySelector('#baslik').value;
        let tarih = document.querySelector('#tarih').value;
        let content = quill.root.innerHTML;
        let id = document.getElementById("id").innerText;
        let etiket = document.getElementById('etiket').value;
        $.ajax({
            type: 'POST',
            url: 'api/yazi_duzenle.php',
            data:{
                baslik: baslik,
                tarih: tarih,
                html_yazi: content,
                id: id,
                etiket: etiket
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

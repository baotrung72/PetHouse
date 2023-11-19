<div class="container ">
<h2 class="mb-5 mt-5" style="color: #fcb000; margin-bottom: 30px;">Chi Tiết Bài Viết</h2>

    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Mục Lục Bài Viết
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong>1.1</strong> <a href="#">Những chú chó béo kỷ lục</a> <br>
                    <strong>2.1</strong> <a href="#"> Hình ảnh chú chó cười nhe răng</a><br>
                    <strong>3.1</strong> <a href="#"> Hình ảnh những chú chó với gương mặt khó đỡ</a><br>
                    <strong>4.1</strong> <a href="#">Chú chó biết nói tiếng người</a><br>
                    <strong>5.1</strong> <a href="#">Chó Laika – chú chó đầu tiên bay vào vũ trụ</a><br>
                    <strong>6.1</strong> <a href="#">Những chú chó nổi tiếng trên mạng xã hội tại Việt Nam</a>


                </div>
            </div>
        </div>
    </div>
    <div class="section-p1">
        <img src="<?= $base_url ?>/template/assets_user/image/<?= $ctBaiViet['Hinh'] ?>" alt="" style="padding: 30px 20%;">
        <p><?= $ctBaiViet['TieuDe'] ?></p>
        <p><?= $ctBaiViet['NoiDung'] ?></p>
    </div>

</div>
<div class="form-p5">
    <div class="main-user">
        <div class="name-user">
            <div>
                <h2>Thêm Loại Bài Viết</h2>
            </div>
        </div>
        <div class="form-add1">
            <h4>Thông Tin Về Loại Bài Viết Mới </h4>
            <form action="" method="post" enctype="multipart/form-data">
                <input type="text" name="TenLoaiBV" placeholder="Tên Loại Bài Viết"><br><br>
                <input type="text" name="ThuTu" placeholder="Thứ Tự Sắp Xếp"><br><br>
                <select name="TrangThai">
                    <option>Trạng Thái</option>
                    <option value="1" >Ẩn</option>
                    <option value="0">Hiện</option>
                </select><br>
                <?php if (isset($_SESSION['error'])) : ?>
                    <div class="alert alert-danger" role="alert">
                        <?= $_SESSION['error'] ?>
                    </div>
                <?php endif; unset($_SESSION['error']); ?>
                <input style="background-color: #fcc850; color: white; " type="submit" value="Xác Nhận" name="submit">
            </form>
        </div>
    </div>
</div>
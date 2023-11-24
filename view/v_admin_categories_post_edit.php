<div class="form-p5">
    <div class="main-user">
        <div class="name-user">
            <div>
                <h2>Cập Nhật Loại Bài Viết</h2>
            </div>
        </div>
        <div class="form-add1">
            <h4>Thông Tin Về Loại Bài Viết Cập Nhật </h4>
            <form action="" method="post" enctype="multipart/form-data">
                <input type="text" name="TenLoaiBV" placeholder="Tên Loại Bài Viết" value="<?=$lbv['TenLoaiBV']?>"><br><br>
                <input type="text" name="ThuTu" placeholder="Thứ Tự Sắp Xếp" value="<?=$lbv['ThuTu']?>"><br><br>
                <select name="TrangThai">
                    <option>Trạng Thái</option>
                    <option value="1"  <?= ($lbv['TrangThai'] == 1) ? 'selected' : '' ?> >Ẩn</option>
                    <option value="0"  <?= ($lbv['TrangThai'] == 0) ? 'selected' : '' ?>>Hiện</option>
                </select><br>
                <?php if (isset($_SESSION['error'])) : ?>
                    <div class="alert alert-danger" role="alert">
                        <?= $_SESSION['error'] ?>
                    </div>
                <?php endif; unset($_SESSION['error']); ?>
                <input style="background-color: #fcc850; color: white; " type="submit" value="Cập Nhật" name="submit">
            </form>
        </div>
    </div>
</div>
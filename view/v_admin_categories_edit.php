<div class="form-p5">
    <div class="main-user">
        <div class="name-user">
            <div>
                <h2>Cập Nhật Danh Mục</h2>
            </div>
        </div>
        <div class="form-add1">
            <h4>Chỉnh Sửa Danh Mục</h4>
            <form action="" method="post" enctype="multipart/form-data">
                <input type="text" name="TenDM" placeholder="Tên Danh Mục" value="<?=$dm['TenDM']?>"><br><br>
                <input type="text" name="ThuTu" placeholder="Thứ Tự Sắp Xếp" value="<?=$dm['ThuTu']?>"><br><br>
                <select name="TrangThai">
                    <option>Trạng Thái</option>
                    <option value="1" <?= ($dm['TrangThai'] == 1) ? 'selected' : '' ?>>Ẩn</option>
                    <option value="0" <?= ($dm['TrangThai'] == 0) ? 'selected' : '' ?>>Hiện</option>
                </select><br>
                <h5>Ảnh Danh Mục:</h5>
                <img src="<?=$base_url?>/template/assets_user/image/<?=$dm['Hinhanh']?>" style="width: 120px;" alt=""> <br>
                <input style="width: 45%; height: 200px;" type="file" name="Hinhanh"><br><br>
                <?php if (isset($_SESSION['error'])) : ?>
                    <div class="alert alert-danger" role="alert">
                        <?= $_SESSION['error'] ?>
                    </div>
                <?php endif;
                unset($_SESSION['error']); ?>
                <input style="background-color: #fcc850; color: white; " type="submit" value="Cập Nhật" name="submit">
            </form>
        </div>


    </div>
</div>
<div class="form-p5">
    <div class="main-user">
        <div class="name-user">
            <div>
                <h2>Cập Nhật Sản Phẩm</h2>
            </div>
        </div>
        <div class="form-add">
            <h4>Chỉnh Sửa Thông Tin</h4>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="table_flex" style="font-size: 16px; color: #7a7a7a;">
                    <div class="left">
                        <input type="text" name="TenSP" placeholder="Tên Sản Phẩm" value="<?= $sp['TenSP'] ?>" /><br /><br />
                        <select name="MaDM" style="width: 400px; height:40px; outline:none; border: 1px solid #e1e1e1; color: #7a7a7a;">
                            <option>Danh Mục</option>
                            <option value="1" <?= ($sp['MaDM'] == 1) ? 'selected' : '' ?>>Chó</option>
                            <option value="2" <?= ($sp['MaDM'] == 2) ? 'selected' : '' ?>>Mèo</option>
                            <option value="3" <?= ($sp['MaDM'] == 3) ? 'selected' : '' ?>>Thức Ăn</option>
                            <option value="4" <?= ($sp['MaDM'] == 4) ? 'selected' : '' ?>>Dụng Cụ & Phụ Kiện</option>
                            <option value="5" <?= ($sp['MaDM'] == 5) ? 'selected' : '' ?>>Động Vật Bò Sát</option>
                            <option value="6" <?= ($sp['MaDM'] == 6) ? 'selected' : '' ?>>Thời Trang</option>
                        </select><br />
                        <div class="price">
                            <input type="text" name="Gia" placeholder="Giá Sản Phẩm" value="<?= $sp['Gia'] ?>" />
                            <input type="text" name="GiaKM" placeholder="Giá Khuyến Mãi" value="<?= $sp['GiaKM'] ?>" />
                        </div><br />
                        <div class="price">
                            <input type="text" name="hinhdang" placeholder="Hình Dáng" value="<?= $sp['hinhdang'] ?>" />
                            <select name="NoiBat" style="outline:none; width: 240px;height: 40px; border: 1px solid #e1e1e1; color: #7a7a7a ">
                                <option>Nổi Bật</option>
                                <option value="1" <?= ($sp['NoiBat'] == 1) ? 'selected' : '' ?>>Có</option>
                                <option value="0" <?= ($sp['NoiBat'] == 0) ? 'selected' : '' ?>>Không</option>
                            </select><br />
                        </div><br />
                        <input type="text" name="SoLuong" placeholder="Số Lượng" value="<?= $sp['SoLuong'] ?>" /><br /><br />
                        <textarea placeholder="Mô Tả" name="MoTa" id="" cols="20" rows="10" value=""><?= $sp['MoTa'] ?></textarea>
                        <select name="TrangThai" style="outline:none; border: 1px solid #e1e1e1; width: 400px; height:40px; color: #7a7a7a">
                            <option>Trạng Thái</option>
                            <option value="0" <?= ($sp['TrangThai'] == 0) ? 'selected' : '' ?>>Hiện</option>
                            <option value="1" <?= ($sp['TrangThai'] == 1) ? 'selected' : '' ?>>Ẩn</option>
                        </select><br />
                        <?php if (isset($_SESSION['error'])) : ?>
                            <div class="alert alert-danger" role="alert">
                                <?= $_SESSION['error'] ?>
                            </div>
                        <?php endif;
                        unset($_SESSION['error']); ?>
                        <input style="background-color: #fcc850; color: white;  font-size: 20px;font-weight: 600;" type="submit" value="Cập Nhật" name="submit" />
                    </div>
                    <div class="updateImg">
                        <h5 style="font-size: 16px;">Ảnh Sản Phẩm</h5>
                        <img src="<?= $base_url ?>/template/assets_user/image/<?= $sp['Hinh'] ?>" style="width: 140px; height: 120px; object-fit:cover;" alt="">
                        <input type="file" name="Hinh" style="height: 200px;" />
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
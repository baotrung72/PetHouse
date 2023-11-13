<div class="form-p5">
    <div class="main-user">
        <div class="name-user">
            <div>
                <h2>Cập Nhật Tài Khoản</h2>
                <p>Bạn có chỉnh sửa phân quyền truy cập cho mọi người khi bạn là admin</p>
            </div>
        </div>
        <div class="form-add1">
            <h4>Cập Nhật Thông Tin</h4>
            <form action="" method="post">
                <input type="text" name="HoTen" placeholder="Tên Người Dùng" value="<?= $kh['HoTen'] ?>"><br><br>
                <input type="email" name="Email" placeholder="Nhập email" value="<?= $kh['Email'] ?>"><br><br>
                <input type="text" name="MatKhau" placeholder="Nhập Mật Khẩu" value="<?= $kh['MatKhau'] ?>"><br><br>
                <select name="Quyen">
                    <option>Cấp Quyền</option>
                    <option value="1" <?= ($kh['Quyen'] == 1) ? 'selected' : '' ?>>Admin</option>
                    <option value="0" <?= ($kh['Quyen'] == 0) ? 'selected' : '' ?>>Người Dùng</option>
                </select><br>
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

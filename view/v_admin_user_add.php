<div class="form-p5">
    <div class="main-user">
        <div class="name-user">
            <div>
                <h2>THÊM TÀI KHOẢN</h2>
                <p>Bạn có thể phân quyền truy cập cho mọi người khi bạn là admin</p>
            </div>
        </div>
        <div class="form-add1">
            <h4>Tạo Mới Thông Tin</h4>
            <form action="" method="post" enctype="multipart/form-data">
                <input type="text" name="HoTen" placeholder="Tên Người Dùng"><br><br>
                <input type="email" name="Email" placeholder="Nhập email"><br><br>
                <input type="password" name="MatKhau" placeholder="Nhập Mật Khẩu"><br><br>
                <select name="Quyen">
                    <option>Cấp Quyền</option>
                    <option value="1">Admin</option>
                    <option value="0">Người Dùng</option>
                </select><br>
                <?php if (isset($_SESSION['error'])) : ?>
                    <div class="alert alert-danger" role="alert">
                        <?= $_SESSION['error'] ?>
                    </div>
                <?php endif;
                unset($_SESSION['error']); ?>
                <input style="background-color: #fcc850; color: white; " type="submit" value="Thêm Người Dùng" name="submit">
            </form>
        </div>
    </div>
</div>
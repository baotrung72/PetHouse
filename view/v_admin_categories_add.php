<div class="form-p5">
    <div class="main-user">
        <div class="name-user">
            <div>
                <h2>Sửa Danh Mục</h2>
            </div>
        </div>
        <div class="form-add1">
            <h4>Cập Nhật Danh Mục</h4>
            <form action="" method="post" enctype="multipart/form-data">
                <input type="text" name="TenDM" placeholder="Tên Danh Mục"><br><br>
                <input type="text" name="ThuTu" placeholder="Thứ Tự Sắp Xếp"><br><br>
                <select name="TrangThai">
                    <option>Trạng Thái</option>
                    <option value="1" >Ẩn</option>
                    <option value="0">Hiện</option>
                </select><br>
                <h5>Ảnh Danh Mục:</h5>
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
<div class="form-p5">
    <div class="main-user">
        <div class="name-user">
            <h2>Tài Khoản</h2>
            <div class="user-btn">
                <a href="<?= $base_url ?>/admin/user-add"><button><i class="fa-solid fa-plus"></i> &nbsp; Thêm Mới</button></a>
            </div>
        </div>

        <h4>Danh Sách Tài Khoản</h4>
        <div class="table-user">
            <?php if (isset($_SESSION['success'])) : ?>
                <div class="alert alert-success" role="alert">
                    <?= $_SESSION['success'] ?>
                </div>
            <?php endif;
            unset($_SESSION['success']); ?>
            <table width="100%">
                <thead border="1">
                    <tr>
                        <td>NO.</td>
                        <td>Ảnh</td>
                        <td>Họ Tên</td>
                        <td>Email</td>
                        <td>Mật Khẩu</td>
                        <td>Trạng Thái</td>
                        <td>Quyền</td>
                        <td>Hành Động</td>
                    </tr>
                </thead>

                <tbody>
                    <?php $i = 1;
                    foreach ($listKhachHang as $kh) : ?>
                        <tr>
                            <td><?= $i ?></td>
                            <td><img src="<?= $base_url ?>/template/assets_user/image/<?= $kh['HinhAnh'] ?>" style="width: 45px; height: 45px; border-radius: 50%; object-fit:cover;" alt=""></td>
                            <td><?= $kh['HoTen'] ?></td>
                            <td><?= $kh['Email'] ?></td>
                            <td><?= $kh['MatKhau'] ?></td>
                            <div class="color-td">
                                <td>
                                    <?php if ($kh['TrangThai'] == 1) : ?>
                                        <span style="font-size: 14px;">Hoạt Động</span>
                                    <?php else : ?>
                                        <span style="font-size: 14px;">Không HD</span>

                                    <?php endif; ?>
                                </td>
                            </div>
                            <td>
                                <?php if ($kh['Quyen'] == 1) : ?>
                                    <span style="padding: 5px 12px; color: #ffffff; height: 30px; border-radius: 5px;" class="bg-danger">
                                        Admin
                                    </span>
                                <?php else : ?>
                                    <span style="padding: 5px 12px; color: #ffffff; height: 30px; border-radius: 5px;" class="bg-success">User</span>
                                <?php endif; ?>
                            </td>
                            <td style="font-size: 16px;"><button style="border:none;" onclick="UserDelete(<?=$kh['MaKH']?>)"><i class="fa-solid fa-trash-can"></i></button> &nbsp;<a href="<?= $base_url ?>/admin/user-edit&id=<?= $kh['MaKH'] ?>"><i class="fa-solid fa-pen"></i></a></td>
                        </tr>
                    <?php $i++;
                    endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    function UserDelete(MaKH) {
        var userConfirm = confirm('Bạn có chắc muốn xóa tài khoản này không!');
        if (userConfirm) {
            window.location = '<?= $base_url ?>/admin/user-delete&id=' + MaKH;
        }
    }

</script>
<div class="form-p5">
    <div class="main-user">
        <div class="name-user">
            <h2>Sản Phẩm</h2>
            <div class="user-btn">
                <a href="<?=$base_url?>/admin/product-add"><button><i class="fa-solid fa-plus"></i> &nbsp; Thêm Mới</button></a>
            </div>
        </div>

        <h4>Danh Sách Sản Phẩm</h4>
        <?php if (isset($_SESSION['success'])) : ?>
            <div class="alert alert-success" role="alert">
                <?= $_SESSION['success'] ?>
            </div>
            <?php endif; unset($_SESSION['success']);?>
            <hr class="line1">
            <div class="table-product">
            <table width="100%">
                <thead border="1">

                    <tr>
                        <td>NO.</td>
                        <td>Ảnh</td>
                        <td style="width: 200px;">Tên</td>
                        <td style="width: 120px; text-align: center;">Giá</td>
                        <td style="width: 120px;"> Giá KM</td>
                        <td style="width: 80px;">Số Lượng</td>
                        <td style="width: 150px;">Trạng Thái</td>
                        <td>Hành Động</td>
                    </tr>
                </thead>

                <tbody>
                    <?php $i = 1;
                    foreach ($ListProduct as $sp) : ?>
                        <tr>
                            <td><?= $i ?></td>
                            <td><img src="<?= $base_url ?>/template/assets_user/image/<?= $sp['Hinh'] ?>" style="height: 50px; width: 50px;border-radius: 0%;object-fit:cover;" alt=""></td>
                            <td><?= $sp['TenSP'] ?></td>
                            <td style="text-align: center;"><?= $sp['Gia'] ?></td>
                            <td><?= $sp['GiaKM'] ?></td>
                            <td><?= $sp['SoLuong'] ?></td>
                            <td>
                                <?php if ($sp['TrangThai'] == 0) : ?>
                                    <span>
                                        Hiển Thị
                                    </span>
                                <?php else : ?>
                                    <span>Ẩn</span>
                                <?php endif; ?>
                            </td>
                            <td style="font-size: 16px;"><a href="#"><a href="<?= $base_url ?>/admin/product-edit&id=<?= $sp['MaSP'] ?>"><i class="fa-solid fa-pen"></i></a> <i class="fa-solid fa-trash-can"></i></a> &nbsp;</td>
                        </tr>
                    <?php $i++;
                    endforeach; ?>

                </tbody>
            </table>
        </div>

    </div>


</div>
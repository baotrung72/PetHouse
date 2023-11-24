<div class="form-p5">
    <div class="main-user">
        <div class="name-user">
            <h2>Danh Mục</h2>
            <div class="user-btn">
                <a href="<?= $base_url ?>/admin/categories-add"><button><i class="fa-solid fa-plus"></i> &nbsp; Thêm Mới</button></a>
            </div>
        </div>

        <h4>Danh Sách Danh Mục</h4>
        <?php if (isset($_SESSION['success'])) : ?>
            <div class="alert alert-success" role="alert">
                <?= $_SESSION['success'] ?>
            </div>
        <?php endif;
        unset($_SESSION['success']); ?>
        <hr class="line1">
        <div class="table-product">
            <table width="100%">
                <thead border="1">

                    <tr>
                        <td>NO.</td>
                        <td style="width: 250px">Ảnh</td>
                        <td style="width: 250px">Tên Danh Mục</td>
                        <td style="width: 120px;">Ngày Đăng</td>
                        <td style="width: 120px;"> Trạng Thái</td>
                        <td>Hành Động</td>
                    </tr>
                </thead>

                <tbody>
                    <?php $i = 1;
                    foreach ($listCategories as $dm) : ?>
                        <tr>
                            <td><?= $dm['MaDM'] ?></td>
                            <td><img src="<?=$base_url?>/template/assets_user/image/<?= $dm['Hinhanh'] ?>" alt="" style="width: 80px; border-radius: 0px; height: 60px; object-fit: cover;"></td>
                            <td><?= $dm['TenDM'] ?></td>
                            <td><?= $dm['ThuTu'] ?></td>
                            <td> &nbsp;<?php if ($dm['TrangThai'] == 1) : ?>
                                <span style="font-size: 14px; color:red;"><i class="fa-solid fa-circle"></i> &nbsp; Ẩn</span>
                            <?php else : ?>
                                <span style="font-size: 14px;color: green;"><i class="fa-solid fa-circle"></i> &nbsp;Hiển Thị</span>

                            <?php endif; ?>
                            </td>
                            <td><button style="border:none" ; onclick="CategoriesDelete(<?= $dm['MaDM'] ?>)"><i class="fa-solid fa-trash-can"></i></button> &nbsp;<a href="<?= $base_url ?>/admin/categories-edit&id=<?= $dm['MaDM'] ?>"><i class="fa-solid fa-pen"></i></a></td>
                        </tr>
                    <?php $i++;
                    endforeach; ?>

                </tbody>
            </table>
        </div>

    </div>
</div>
<script>
    function CategoriesDelete(MaDM) {
        var CategoriesConfirm = confirm('Bạn có chắc muốn xóa danh mục này không!');
        if (CategoriesConfirm) {
            window.location = '<?= $base_url ?>/admin/categories_delete&id=' + MaDM;
        }
    }
</script>
<div class="form-p5">
    <div class="main-user">
        <div class="name-user">
            <h2>Loại Bài Viết</h2>
            <div class="user-btn">
                <a href="<?= $base_url ?>/admin/categoriespost-add"><button><i class="fa-solid fa-plus"></i> &nbsp; Thêm Mới</button></a>
            </div>
        </div>

        <h4>Danh Sách Loại Bài viết</h4>
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
                        <td style="width: 250px">Tên Danh Mục</td>
                        <td style="width: 120px;">Thứ Tự </td>
                        <td style="width: 120px;"> Trạng Thái</td>
                        <td>Hành Động</td>
                    </tr>
                </thead>

                <tbody>
                    <?php $i = 1;
                    foreach ($listCatePost as $lbv) : ?>
                        <tr>
                            <td><?= $i ?></td>
                            <td><?= $lbv['TenLoaiBV'] ?></td>
                            <td ><?= $lbv['ThuTu'] ?></td>
                            <td> &nbsp;<?php if ($lbv['TrangThai'] == 0) : ?>
                                <span style="font-size: 14px; color:green;"><i class="fa-solid fa-circle"></i> &nbsp; Hiển Thị</span>
                            <?php else : ?>
                                <span style="font-size: 14px;color: red;"><i class="fa-solid fa-circle"></i> &nbsp; Ẩn</span>

                            <?php endif; ?>
                            </td>
                            <td><button style="border:none;" ; onclick="CategoriesPostDelete(<?= $lbv['MaLoaiBV'] ?>)"><i class="fa-solid fa-trash-can"></i></button> &nbsp;<a href="<?= $base_url ?>/admin/categoriespost-edit&id=<?= $lbv['MaLoaiBV'] ?>"><i class="fa-solid fa-pen"></i></a></td>
                        </tr>
                    <?php $i++;
                    endforeach; ?>

                </tbody>
            </table>
        </div>

    </div>
</div>
<script>
    function CategoriesPostDelete(MaLoaiBV) {
        var CategoriesPostConfirm = confirm('Bạn có chắc muốn xóa loại bài viết này không!');
        if (CategoriesPostConfirm) {
            window.location = '<?= $base_url ?>/admin/categoriespost-delete&id=' + MaLoaiBV;
        }
    }
</script>
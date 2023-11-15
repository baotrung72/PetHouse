<div class="form-p5">
    <div class="main-user">
        <div class="name-user">
            <div>
                <h2>Quản Lí Bình Luận</h2>
            </div>
            <!-- <div class="user-btn">
                        <a href="add_product.html"><button><i class="fa-solid fa-plus"></i> &nbsp; Thêm Mới</button></a>
                     </div> -->
        </div>
        <div class="form-add1">
            <h4>Danh Sách Bình Luận</h4>
            <?php if (isset($_SESSION['success'])) : ?>
                <div class="alert alert-success" role="alert">
                    <?= $_SESSION['success'] ?>
                </div>
            <?php endif;
            unset($_SESSION['success']); ?>
            <table>
                <thead border="1">
                    <tr>
                        <td>No.</td>

                        <td class="tacgia">Mã KH</td>
                        <td class="text-center" style="width: 80px">Mã SP</td>
                        <td class="noidung" style="width: 300px;">Nội Dung</td>
                        <td class="thoigian"> Thời gian </td>
                        <td>Trạng Thái</td>
                        <td style="width: 100px;">Hành Động</td>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1;
                    foreach ($listCmt as $cmt) : ?>
                        <tr>
                            <td><?= $i ?></td>
                            <td><?= $cmt['MaKH'] ?></td>
                            <td class="text-center"><?= $cmt['MaSP'] ?></td>
                            <td><?= $cmt['NoiDung'] ?></td>
                            <td><?= $cmt['NgayGui'] ?></td>
                            <td>
                                <?php if ($cmt['TrangThai'] == 0) : ?>
                                    <span>
                                        Hiển Thị
                                    </span>
                                <?php else : ?>
                                    <span>Ẩn</span>
                                <?php endif; ?>
                            </td>
                            <td style="width: 100px;"><button style="border: none;" onclick="commentDelete(<?= $cmt['MaBL'] ?>)"><i class="fa-solid fa-trash-can"></i></button></td>
                        </tr>
                    <?php $i++;
                    endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    function commentDelete(MaBL) {
        var commentConfirm = confirm('Bạn có chắc muốn xóa bình luận này không!');
        if (commentConfirm) {
            window.location = '<?= $base_url ?>/admin/comment-delete&id=' + MaBL;
        }
    }
</script>
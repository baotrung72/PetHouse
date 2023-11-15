<div class="form-p5">
    <div class="main-user">
        <div class="name-user">
            <h2>Bài Viết</h2>
            <div class="user-btn">
                <a href="<?=$base_url_?>/admin/post-add"><button><i class="fa-solid fa-plus"></i> &nbsp; Thêm Mới</button></a>
            </div>
        </div>
        <h4>Danh Sách Bài Viết</h4>
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
                        <td style="width: 80px;">Ảnh</td>
                        <td style="width: 200px;text-align: start;">Tiêu Đê</td>
                        <td style="width: 300px;">Nội Dung</td>
                        <td style="width: 120px;"> Thời Gian</td>
                        <td style="width: 80px;">Lượt Xem</td>
                        <td style="width: 150px;">Trạng Thái</td>
                        <td>Hành Động</td>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1;
                    foreach ($listPost as $post) : ?>
                        <tr>
                            <td><?= $i ?></td>
                            <td><img src="<?= $base_url ?>/template/assets_user/image/<?= $post['Hinh'] ?>" style="width: 50px; height: 50px; object-fit: cover; border-radius: 0% " alt=""></td>
                            <td style="text-align: start; ">
                                <p style="font-size:14px; "><?= $post['TieuDe'] ?></p>
                            </td>
                            <td style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;">
                                <p style="width: 300px; font-size:14px;"><?= $post['NoiDung'] ?></p>
                            </td>
                            <td><?= $post['NgayDang'] ?></td>
                            <td><?= $post['LuotXem'] ?></td>
                            <td>
                                <?php if ($post['TrangThai'] == 0) : ?>
                                    <span>
                                        Hiển Thị
                                    </span>
                                <?php else : ?>
                                    <span>Ẩn</span>
                                <?php endif; ?>
                            </td>
                            <td><button style="border:none;" onclick="postDelete(<?=$post['MaBV']?>)"><i class="fa-solid fa-trash-can"></i></button> &nbsp;<a href="<?=$base_url?>/admin/post-edit&id=<?=$post['MaBV']?>"><i class="fa-solid fa-pen"></i></a></td>
                        </tr>
                    <?php $i++;
                    endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    function postDelete(MaBV) {
        var postConfirm = confirm('Bạn có chắc muốn xóa bài viết này không!');
        if (postConfirm) {
            window.location = '<?= $base_url ?>/admin/post-delete&id=' + MaBV;
        }
    }
</script>
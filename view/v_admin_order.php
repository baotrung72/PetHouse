<div class="form-p5">
    <div class="main-user">
        <div class="name-user">
            <h2>Quản Lí Đơn Hàng</h2>
            <div class="user-btn">
                <a href="add_product.html"><button><i class="fa-solid fa-plus"></i> &nbsp; Thêm Mới</button></a>
            </div>
        </div>

        <h4>Danh Sách Đơn Hàng</h4>
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
                        <td>Mã ĐH</td>
                        <td style="width: 200px;"> Họ Tên</td>
                        <td style="width: 120px;">Mã SP</td>
                        <td style="width: 120px;"> Thời gian</td>
                        <td style="width: 80px;">Số Lượng</td>
                        <td style="width: 150px;">Thành tiền</td>
                        <td style="width: 120px;">Hành Động</td>
                    </tr>
                </thead>
                <tbody>
                    <?php $i =1; foreach ($listOrder as $order):?>
                    <tr>
                        <td>#<?=$order['MaDH']?></td>
                        <td><?=$order['HoTen']?></td>
                        <td><?=$order['MaSP']?></td>
                        <td><?=$order['NgayMua']?></td>
                        <td><?=$order['SoLuong']?></td>
                        <td><?=number_format($order['TongTien'],0,',','.')?> VNĐ</td>
                        <td><button type="submit" style="border:none;"  onclick="orderDelete(<?= $order['MaDH'] ?>)"><i class="fa-solid fa-trash-can"></i></button> &nbsp;</td>
                    </tr>
                        <?php $i++; endforeach;?>


                </tbody>
            </table>
        </div>

    </div>
    <script>
    function orderDelete(MaDH) {
        var orderConfirm = confirm('Bạn có chắc muốn xóa đơn hàng này không!');
        if (orderConfirm) {
            window.location = '<?= $base_url ?>/admin/delete-order&id=' + MaDH;
        }
    }
</script>
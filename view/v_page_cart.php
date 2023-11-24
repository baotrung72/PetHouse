<nav aria-label="breadcrumb" class="section-p2" style="padding: 20px 0 30px 7.5%;">
    <ol class="breadcrumb">
        <li class="breadcrumb-item" style="text-decoration: none; color: #212529;"><a href="#">Trang Chủ</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page" style="text-decoration: none; color: #212529;">
            Giỏ Hàng</li>
    </ol>
</nav>
<div class="container mb-5">
    <h2>Giỏ Hàng</h2>
    <span style="font-size: 14px; margin-bottom: 50px;">Sản phẩm bạn quan tâm sẽ được hiển thị tại đây</span>
    <hr style="border: 3px solid #138fd2;  margin-bottom: 50px;">
    <form action="<?= $base_url ?>/page/updateCart" method="post">

        <?php if (isset($_SESSION['error'])) : ?>
            <div class="alert alert-danger" style="font-size: 14px;" role="alert">
                <?= $_SESSION['error'] ?>
            </div>
        <?php endif;
        unset($_SESSION['error']); ?>
        <?php if (isset($_SESSION['success'])) : ?>
            <div class="alert alert-success" style="font-size: 14px;" role="alert">
                <?= $_SESSION['success'] ?>
            </div>
        <?php endif;
        unset($_SESSION['success']); ?>
        <div class="row">
            <div class="col-sm-8 mb-3 mb-sm-0">
                <form action="<?= $base_url ?>/page/updateCart" method="post">
                    <table class="table ">
                        <thead>
                            <tr>
                                <th style="width: 20px;">No.</th>
                                <th scope="col">Sản Phẩm</th>
                                <th scope="col" class="text-center">Đơn Giá</th>
                                <th scope="col" class="text-center">Số Lượng</th>
                                <th scope="col" class="text-center">Thành Tiền</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;
                            foreach ($Cart as $item) : ?>
                                <tr>
                                    <td><?= $i ?></td>
                                    <td>
                                        <img src="<?= $base_url ?>/template/assets_user/image/<?= $item['Hinh'] ?>" alt="" width="50px" style="margin-right: 10px; border-radius: 3px;"><?= $item['TenSP'] ?>
                                    </td>
                                    <td class="text-center" name="Gia" id="DonGiaProduct<?= $i ?>"><?= $item['Gia'] ?></td>
                                    <td class="text-center">
                                        <div class="btn-group me-1" role="group" aria-label="Second group" style="font-size: 12px;">
                                            <!-- Sử dụng chỉ số $i để tạo tên và id động cho input -->
                                            <input type="number" style="width: 60px; border:none;" class="btn btn" name="SoLuong[<?= $i ?>]" id="SoLuongProduct<?= $i ?>" value="<?= $item['SoLuong'] ?>" min="1">
                                        </div>
                                    </td>
                                    <td class="text-center" id="ThanhTien<?= $i ?>" name="ThanhTien"><?= $ThanhTien = $item['Gia'] * $item['SoLuong'] ?></td>
                                    <td style="width: 20px;"><a href="<?= $base_url ?>/page/delete-cart&id=<?= $item['MaSP'] ?>"><i class="fa-solid fa-trash"></i></a></td>
                                </tr>
                            <?php $i++;
                            endforeach; ?>
                        </tbody>
                    </table>
                    <div>
                        <span>
                            <input type="submit" name="submit" class="btn btn-secondary mt-2" value="Cập Nhật Giỏ Hàng"></input>
                        </span>
                    </div>
                    <div class="col-12 mt-5">
                        <a href="<?= $base_url ?>/page/payment" class="btn btn-warning" type="submit" style="padding: 10px 50px; font-size: 18px; font-weight: 600; margin-left: 72%; color: #ffffff">Thanh Toán</a>
                    </div>
                </form>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Đơn Hàng Của Bạn</h5>
                        <table class="table">
                            <thead>
                                <tr>

                                    <th scope="col">Sản Phẩm</th>
                                    <th scope="col">Tạm Tính</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($Cart as $item) : ?>
                                    <tr>
                                        <td><?= $item['TenSP'] ?> x<span class="quantity"><?= $item['SoLuong'] ?></span></td>
                                        <td class="price"><?= $ThanhTien = $item['Gia'] * $item['SoLuong'] ?>đ</td>
                                    </tr>
                                    <?php $TongTien += $ThanhTien; ?>
                                <?php endforeach; ?>
                                <tr>
                                    <td><strong>Tổng :</strong></td>
                                    <td class="total-price"><?= $TongTien ?>đ</td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Trả Tiền Khi Nhận Hàng</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </form>
    <button type="button" class="btn btn-warning" style="margin: 20px 0;"><i class="fa-solid fa-arrow-left" style="padding-right:10px ; color: #ffffff;"></i><span style="color: #ffffff;">Xem Sản Phẩm</span>
    </button>
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function() {
        $("input[name^='SoLuong']").on('change', function() {
            var index = $(this).attr('id').replace('SoLuongProduct', '');
            var quantity = parseInt($(this).val());
            var price = parseFloat($("#DonGiaProduct" + index).text());
            var total = quantity * price;
            $("#ThanhTien" + index).text(total);
        });
    });
</script> 
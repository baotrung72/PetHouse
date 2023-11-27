<div class="container mb-5">
    <nav aria-label="breadcrumb" class="section-p2" style="padding: 20px 0 30px 0%;">
        <ol class="breadcrumb">
            <li class="breadcrumb-item" style="text-decoration: none; color: #212529;"><a href="<?= $base_url ?>/page/home">Trang Chủ</a>
            </li>
            <li class="breadcrumb-item" style="text-decoration: none; color: #212529;"><a href="#">Giỏ Hàng</a></li>
            <li class="breadcrumb-item" style="text-decoration: none; color: #212529;">Thanh Toán</li>
        </ol>
    </nav>
    <h2>Thanh Toán</h2>
    <hr style="border: 3px solid #138fd2;  margin-bottom: 50px;">
    <div class="row">
        <div class="col-sm-8 mb-3 mb-sm-0">
        <form class="row g-3 needs-validation" novalidate>
                    <div class="col-md-12">
                        <label for="validationCustom01" class="form-label">Họ Và Tên:*</label>
                        <input type="text" class="form-control" id="validationCustom01" required>
                        <div class="valid-feedback">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom02" class="form-label">Số Điện Thoại:*</label>
                        <input type="text" class="form-control" id="validationCustom02" required>
                        <div class="valid-feedback">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustomUsername" class="form-label">Email:*</label>
                        <div class="input-group has-validation">
                            <input type="email" class="form-control" id="validationCustomUsername"
                                aria-describedby="inputGroupPrepend" required>
                            <div class="invalid-feedback">
                                Vui lòng nhập đúng định dạng Email
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom03" class="form-label">Tỉnh/Thành Phố:*</label>
                        <input type="text" class="form-control" id="validationCustom03" required>
                        <div class="invalid-feedback">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom04" class="form-label">Quận/Huyện:*</label>
                        <input type="text" class="form-control" id="validationCustom04" required>
                        <div class="invalid-feedback">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="validationCustom05" class="form-label">Địa Chỉ:*</label>
                        <input type="text" class="form-control" id="validationCustom05"
                            placeholder="Ví dụ Hẻm 45, Lê Quý Đôn" required>
                        <div class="invalid-feedback">
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="exampleFormControlTextarea1" class="form-label"><strong>Thông tin bổ
                                sung</strong></label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                            placeholder="Ghi chú về đơn hàng chi tiết hơn"></textarea>
                    </div>
                    <div class="col-12 pt-2 pb-2">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                            <label class="form-check-label" for="invalidCheck">
                                Tôi đồng ý với những điều khoản
                            </label>

                        </div>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-warning" type="submit"
                            style="padding: 10px 80px; font-size: 18px; font-weight: 600; margin-left: 72%; color: #ffffff;">Đặt
                            Hàng</button>
                    </div>
                </form>

        </div>
        <!-- <div class="col-sm-4">
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
        </div> -->
    </div>
</div>

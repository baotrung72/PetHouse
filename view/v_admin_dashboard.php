<div class="main-form">
    <div class="form-p1">

        <h2>Dashboards</h2>
        <div class="form-btn">
            <input type="date">
            <button>Xuất</button>
        </div>
    </div>

    <div class="form-p2">
        <div class="note1">
            <p>Khách Hàng Mới</p>
            <h2><?=$UserNew?></h2>
            <?php if ($UserNew > 10) : ?>
                <h5><?= number_format(($UserNew - 10) / $UserNew * 100, 1) ?>%</h5>
            <?php else : ?>
                <h5 class="text-danger"><?= number_format(($UserNew - 10) / $UserNew * 100, 1) ?>%</h5>
            <?php endif; ?>
            <span>So với Tháng 1/2022</span>
        </div>
        <div class="note1">
            <p>Đơn Hàng Mới</p>
            <h2><?= $orderNew ?></h2>
            <?php if ($orderNew > 20) : ?>
                <h5><?= number_format(($orderNew - 20) / $orderNew * 100, 1) ?>%</h5>
            <?php else : ?>
                <h5 class="text-danger"><?= number_format(($orderNew - 20) / $orderNew * 100, 1) ?>%</h5>
            <?php endif; ?>
            <span>So với Tháng 1/2022</span>
        </div>
        <div class="note1">
            <p>Tổng Doanh Thu</p>
            <h2><?= number_format($totalRevenue, 0, ',', '.') ?></h2>
            <?php if ($totalRevenue > 50000000) : ?>
                <h5><?= number_format(($totalRevenue - 50000000) / $totalRevenue * 100, 1) ?>%</h5>
            <?php else : ?>
                <h5 class="text-danger"><?= number_format(($totalRevenue - 50000000) / $totalRevenue * 100, 1) ?>%</h5>

            <?php endif; ?>
            <span>So với Tháng 1/2022</span>

        </div>
    </div>
    <div class="form-p3">
        <div class="note2">
            <h3>
                Tài Khoản hoạt động
            </h3>
            <div class="color-note">
                <h2 style="margin-left: 36px;"><?= $countUsers ?></h2>
            </div>
            <div class="span">
                <div class="active">
                    <span>Trang đang hoạt động</span>
                    <p>/page/home</p>
                    <p>/product/category</p>
                    <p>/product/details</p>
                    <p>/cart</p>
                    <p>/payment</p>
                    <p>/post</p>
                    <p>/contact</p>
                </div>
                <div class="user">
                    <span>Khách hàng</span>
                    <p>12</p>
                    <p>11</p>
                    <p>9</p>
                    <p>7</p>
                    <p>3</p>
                    <p>3</p>
                    <p>1</p>

                </div>
            </div>



        </div>
        <div class="chart">
            <canvas id="myChart" style="width:100%;max-width:800px; padding: 80px 50px;"></canvas>

            <script>
                const xValues = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];

                new Chart("myChart", {
                    type: "line",
                    data: {
                        labels: xValues,
                        datasets: [{
                            data: [860, 1140, 1060, 1060, 1070, 1110, 1330, 2210, 7830, 2478, 6700, 5600],
                            borderColor: "#EA4335",
                            fill: false
                        }, {
                            data: [1600, 1700, 1700, 1900, 2000, 2700, 4000, 5000, 6000, 7000, 8000, 6300],
                            borderColor: "#3FCE65",
                            fill: false
                        }, {
                            data: [300, 700, 2000, 5000, 6000, 4000, 2000, 1000, 200, 100, 5000, 8000],
                            borderColor: "#FCC850",
                            fill: false
                        }]
                    },
                    options: {
                        legend: {
                            display: false
                        }
                    }
                });
            </script>
            <h3>Biểu Đồ Mua Hàng Của Năm 2022</h3>
        </div>
    </div>

    <div class="form-p4">
        <table>
            <thead>
                <tr>
                    <td>NO.</td>
                    <td>Trạng Thái</td>
                    <td>Quốc Gia</td>
                    <td>Khách Hàng</td>
                    <td>Thời Gian</td>
                    <td>Tổng</td>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1;
                foreach ($listTopBuy as $top) : ?>
                    <tr>
                        <td>#<?= $i ?></td>
                        <td><?= $top['TrangThai'] ?></td>
                        <td><img src="<?= $base_url ?>/template/assets_user/image/viet-nam.png" alt="" width="40px;"></td>
                        <td><?= $top['HoTen'] ?></td>
                        <td><?= $top['NgayMua'] ?></td>
                        <td><?= number_format($top['TongTien'], 0, ',', '.') ?> VNĐ</td>
                    </tr>
                <?php $i++;
                endforeach; ?>
            </tbody>
        </table>

        <!-- <div class="footer">
                    <div class="mac">
                        <h4>Thanh Trung — Xuất Bản © 2023</h4>
                    </div>
                    <div class="mac2">
                        <h4>Thiết Kế HTML — bởi designer TrungToof</h4>
                    </div>
                </div> -->
    </div>
</div>
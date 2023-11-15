<div class="main-form">
            <div class="form-p1">

                <h2>Dashboards</h2>
                <div class="form-btn">
                    <input type="date">
                    <button>Export</button>
                </div>
            </div>

            <div class="form-p2">
                <div class="note1">
                    <p>Totals sell</p>
                    <h2>$272.98</h2>
                    <h5>14,7%</h5>
                    <span>Compared To October 2022</span>
                </div>
                <div class="note1">
                    <p>Totals sell</p>
                    <h2>$3799.00</h2>
                    <h5>34,7%</h5>
                    <span>Compared To October 2022</span>
                </div>
                <div class="note1">
                    <p>Totals sell</p>
                    <h2>$37.00</h2>
                    <h5>24,7%</h5>
                    <span>Compared To October 2022</span>
                </div>
            </div>
            <div class="form-p3">
                <div class="note2">
                    <h3>
                        Khách hàng hoạt động
                    </h3>
                    <div class="color-note">
                        <h2 style="margin-left: 36px;"><?=$countUsers?></h2>
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
                            <td>Status</td>
                            <td>Co.</td>
                            <td>Customer</td>
                            <td>Date</td>
                            <td>Total</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>#00745</td>
                            <td>Pending</td>
                            <td><img src="image/flag-vetnama-7.png" alt=""></td>
                            <td>Giordano Bruno</td>
                            <td>2020-11-02</td>
                            <td>$2,742.00</td>
                        </tr>
                        <tr>
                            <td>#00513</td>
                            <td>Hold</td>
                            <td><img src="image/flag-vetnama-7.png" alt=""></td>
                            <td>Giordano Bruno</td>
                            <td>2020-11-02</td>
                            <td>$2,742.00</td>
                        </tr>
                        <tr>
                            <td>#00745</td>
                            <td>Pending</td>
                            <td><img src="image/Philippines.png.jpg" alt=""></td>
                            <td>Giordano Bruno</td>
                            <td>2020-11-02</td>
                            <td>$2,742.00</td>
                        </tr>
                        <tr>
                            <td>#00745</td>
                            <td>Pending</td>
                            <td><img src="image/Thai-Lan.png.jpg" alt=""></td>
                            <td>Giordano Bruno</td>
                            <td>2020-11-02</td>
                            <td>$2,742.00</td>
                        </tr>
                        <tr>
                            <td>#00745</td>
                            <td>Pending</td>
                            <td><img src="image/Campuchia.jpg" alt=""></td>
                            <td>Giordano Bruno</td>
                            <td>2020-11-02</td>
                            <td>$2,742.00</td>
                        </tr>
                        <tr>
                            <td>#00745</td>
                            <td>Pending</td>
                            <td><img src="image/co-cac-nuoc-dong-nam-a-7.jpg" alt=""></td>
                            <td>Giordano Bruno</td>
                            <td>2020-11-02</td>
                            <td>$2,742.00</td>
                        </tr>
                        <tr>
                            <td>#00745</td>
                            <td>Pending</td>
                            <td><img src="image/co-cac-nuoc-dong-nam-a-7.jpg" alt=""></td>
                            <td>Giordano Bruno</td>
                            <td>2020-11-02</td>
                            <td>$2,742.00</td>
                        </tr>
                        <tr>
                            <td>#00745</td>
                            <td>Pending</td>
                            <td><img src="image/Campuchia.jpg" alt=""></td>
                            <td>Giordano Bruno</td>
                            <td>2020-11-02</td>
                            <td>$2,742.00</td>
                        </tr>
                    </tbody>
                </table>

                <div class="footer">
                    <div class="mac">
                        <h4>Stroyka Admin — eCommerce Dashboard Template © 2021</h4>
                    </div>
                    <div class="mac2">
                        <h4>Powered by HTML — Design by Kos</h4>
                    </div>
                </div>
            </div>
        </div>
<section>
    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?= $base_url ?>/template/assets_user/image/banner1.jpg" class="d-block w-100" alt="..." style="height: 560px;">
            </div>
            <div class="carousel-item">
                <img src="<?= $base_url ?>/template/assets_user/image/banner2.jpg" class="d-block w-100" alt="..." style="height: 560px;">
            </div>
            <div class="carousel-item">
                <img src="<?= $base_url ?>/template/assets_user/image/banner3.jpg" class="d-block w-100" alt="..." style="height: 560px;">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>
<section>
    <div class="container mt-4" style="margin-top: 40px;">
        <div class="row">
            <div class="col">
                <div class="title text-center ">
                    <strong><span class="">Hỗ Trợ Giao Hàng</span></strong>
                </div>
                <div class="content d-flex m-lg-3">
                    <div class="icon m-lg-2 pt-4">
                        <i class="fa-solid fa-truck-fast" style="font-size: 30px; color: #7a7a7a;"></i>
                    </div>
                    <div class="content-gh" style="font-size: 14px; line-height: 1.4rem;">
                        <p>Giao thú cưng toàn các tỉnh Tây Nam Bộ, giao trong ngày tại Tp.HCM. Giao phụ kiện, đồ
                            dùng toàn quốc.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="title text-center ">
                    <strong><span style="font-size: 16px;">Giá Cả Hợp Lý </span></strong>
                </div>
                <div class="content d-flex m-lg-3">
                    <div class="icon m-lg-2 pt-4">
                        <i class="fa-solid fa-tag" style="font-size: 30px; color: #7a7a7a;"></i>
                    </div>
                    <div class="content-gh" style="font-size: 14px; line-height: 1.4rem;">
                        <p>Sản phẩm đa dạng chủng loại và giá cả. Có Bảo hành với các loại thú cưng giá trị cao.
                            Chất lượng uy tín chi phí cạnh tranh</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="title text-center ">
                    <strong><span class="">Hỗ Trợ Mua Hàng</span></strong>
                </div>
                <div class="content d-flex m-lg-3">
                    <div class="icon m-lg-2 pt-4">
                        <i class="fa-solid fa-phone-volume" style="font-size: 30px; color: #7a7a7a;"></i>
                    </div>
                    <div class="content-gh" style="font-size: 14px; line-height: 1.4rem;">
                        <p>Alo tổng đài 028.7304.0479 để được tư vấn và hỗ trợ đặt hàng mua hàng và giải đáp
                            thắc
                            mắc khi nuôi dưỡng thú cưng</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="title text-center ">
                    <strong><span class="">Khuyến Mãi Ngập Tràn</span></strong>
                </div>
                <div class="content d-flex m-lg-3">
                    <div class="icon m-lg-2 pt-4">
                        <i class="fa-solid fa-percent" style="font-size: 30px; color: #7a7a7a;"></i>
                    </div>
                    <div class="content-gh" style="font-size: 14px; line-height: 1.4rem;">
                        <p>Chế độ hậu mãi hấp dẫn. Với nhiều chương trình chăm sóc khách hàng thân thiết với rất
                            nhiều ưu đãi và khuyến mại.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<hr class=" text-center  " style="width: 80%;margin-left: 10%; border: 1.5px solid gray;">
<section>
    <div class="container">
        <div class="title text-center m-5">
            <h2 style="font-weight: bolder; color: #fcb000;"> _ Thú Cưng Mới _</h2>
        </div>
        <div class="container ">
            <div class="row">
                <?php foreach ($newproducts as $sp) : ?>
                    <div class="col" style="height: 440px;">
                        <div class="card" style="width: 18rem;">
                            <img src="<?= $base_url ?>/template/assets_user/image/<?= $sp['Hinh'] ?>" class="card-img-top" style="height:250px; object-fit: cover;" alt="...">
                            <div class="badge badge-danger bg-danger position-absolute" style="top: 20px; right: 20px;">
                                Sale <?= number_format((($sp['Gia'] - $sp['GiaKM']) / $sp['Gia']) * 100, 1) ?>%
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><?= $sp['TenSP'] ?></h5>
                                <p class="card-text">Kích Thước: <?= $sp['hinhdang'] ?></p>
                                <p class="card-price">Giá: <del><?= $sp['Gia'] ?>đ</del><?= $sp['GiaKM'] ?>đ</p>
                                <div class="btn-buy d-flex text-center">
                                    <a href="#" class="btn btn-warning" style=" margin-left: 15px;">Chi
                                        Tiết</a>
                                    <a href="#" class="btn btn-warning" style=" margin-left: 50px;">Mua
                                        Ngay</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="title-bosat">
                <div class="title text-center mt-5 mt-5">
                    <h2 style="font-weight: bolder; color: #fcb000;"> _ Thú Cưng Bò Sát _</h2>
                </div>
                <div class="row mt-5">
                    <?php foreach ($reptileproducts as $sp) : ?>
                        <div class="col" style="height: 440px;">
                            <div class="card" style="width: 18rem;">
                                <img src="<?= $base_url ?>/template/assets_user/image/<?= $sp['Hinh'] ?>" class="card-img-top" style="height:250px; object-fit: cover;" alt="...">
                                <?php if (isset($sp['GiaKM']) && $sp['GiaKM']) : ?>
                                    <div class="badge badge-danger bg-danger position-absolute" style="top: 20px; right: 20px;">
                                        Sale <?= number_format((($sp['Gia'] - $sp['GiaKM']) / $sp['Gia']) * 100, 1) ?>%
                                    </div>
                                <?php endif; ?>
                                <div class="card-body">
                                    <h5 class="card-title"><?= $sp['TenSP'] ?></h5>
                                    <p class="card-text">Hình dạng: <?= $sp['hinhdang'] ?></p>
                                    <p class="card-price">Giá: <?= $sp['Gia'] ?></p>
                                    <div class="btn-buy d-flex text-center">
                                        <a href="#" class="btn btn-warning" style=" margin-left: 15px;">Chi Tiết</a>
                                        <a href="#" class="btn btn-warning" style=" margin-left: 50px;">Mua Ngay</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section>

    <div class="container">

        <div class="title  text-center mt-5 mt-5">
            <h2 style="font-weight: bolder; color: #fcb000;"> _ Dịch Vụ Thú Cưng _</h2>
        </div>
        <div class="row mt-5">
            <div class="col" style="height: 440px;">
                <div class="card" style="width: 18rem;">
                    <img src="<?= $base_url ?>/template/assets_user/image/dv1.jpg" class="card-img-top" alt="..." style="height: 250px; object-fit: cover;">
                    <div class="badge badge-danger bg-danger position-absolute" style="top: 20px; right: 20px;">
                        Sale 7%</div>
                    <div class="card-body">
                        <h5 class="card-title">Dịch vụ spa (Chó Mèo)</h5>
                        <p class="card-text">Cho thú cưng thư giản, tắm và cắt tỉa lông gọn gàn </p>
                        <p class="card-price">Giá: <del>860.000đ</del> 720.000 </p>
                        <div class="btn-buy d-flex text-center">
                            <a href="#" class="btn btn-warning" style=" margin-left: 15px;">Chi
                                Tiết </a>
                            <a href="#" class="btn btn-warning" style=" margin-left: 50px;">Đặt
                                Ngay</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col" style="height: 440px;">
                <div class="card" style="width: 18rem;">
                    <img src="<?= $base_url ?>/template/assets_user/image/dv2.jpg" class="card-img-top" alt="..." style="height: 250px; object-fit: cover;">
                    <div class="badge badge-danger bg-danger position-absolute d-none" style="top: 20px; right: 20px;">
                        Sale 7%</div>
                    <div class="card-body">
                        <h5 class="card-title">Tiêm Ngừa Phòng Tránh Bệnh Dại</h5>
                        <p class="card-text">Định kì 6 tháng cho một lần tiêm</p>
                        <p class="card-price">Giá: 1.700.000đ/mũi</p>
                        <div class="btn-buy d-flex text-center">
                            <a href="#" class="btn btn-warning" style=" margin-left: 15px;">Chi
                                Tiết </a>
                            <a href="#" class="btn btn-warning" style=" margin-left: 50px;">Đặt
                                Ngay</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col" style="height: 440px;">
                <div class="card" style="width: 18rem;">
                    <img src="<?= $base_url ?>/template/assets_user/image/dv3.jpg" class="card-img-top" alt="..." style="height: 250px; object-fit: cover;">
                    <div class="badge badge-danger bg-danger position-absolute" style="top: 20px; right: 20px;">
                        Sale 7%</div>
                    <div class="card-body">
                        <h5 class="card-title">Phối Giống các loài chó mèo anh quốc</h5>
                        <p class="card-text">Giống phối tốt khỏe mạnh và giá rẻ</p>
                        <p class="card-price">Giá: <del>1.660.000đ</del> 1.420.000 </p>
                        <div class="btn-buy d-flex text-center">
                            <a href="#" class="btn btn-warning btn-warning" style=" margin-left: 15px;">Chi
                                Tiết </a>
                            <a href="#" class="btn btn-warning btn-warning" style=" margin-left: 50px;">Đặt
                                Ngay</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col" style="height: 440px;">
                <div class="card" style="width: 18rem;">
                    <img src="<?= $base_url ?>/template/assets_user/image/dv4.jpg" class="card-img-top" alt="..." style="height: 250px; object-fit: cover;">
                    <div class="badge badge-danger bg-danger position-absolute d-none" style="top: 20px; right: 20px;">
                        Sale 7%</div>
                    <div class="card-body">
                        <h5 class="card-title">Dịch vụ trông giữ chó mèo</h5>
                        <p class="card-text">Tận tình chăm sóc đầy đủ và tốt nhất cho thú cưng của bạn
                        </p>
                        <p class="card-price">Giá: 120.000đ/ngày </p>
                        <div class="btn-buy d-flex text-center">
                            <a href="#" class="btn btn-warning" style="margin-left: 15px;">Chi
                                Tiết </a>
                            <a href="#" class="btn btn-warning " style="margin-left: 50px;">Đặt
                                Ngay</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container text-center">
        <div class="title  mt-5 ">
            <h2 style="font-weight: bolder; color: #fcb000; text-align: center;"> _ Thức Ăn & Đồ Dùng _
            </h2>
        </div>
        <div class="row mt-5">
            <div class="col" style="height: 440px;">
                <div class="card" style="width: 18rem;">
                    <img src="<?= $base_url ?>/template/assets_user/image/thucan1.jpg" class="card-img-top" alt="..." style="height: 250px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">Xương thưởng cho Chó Orgo vị bò nướng 90g</h5>
                        <p class="card-price">Giá: 60.000đ </p>
                        <div class="btn-buy d-flex text-center">
                            <a href="#" class="btn btn-warning" style=" margin-left: 15px;">Chi
                                Tiết </a>
                            <a href="#" class="btn btn-warning" style=" margin-left: 50px;">Mua
                                Ngay</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col" style="height: 440px;">
                <div class="card" style="width: 18rem;">
                    <img src="<?= $base_url ?>/template/assets_user/image/thucan2.jpg" class="card-img-top" alt="..." style="height: 250px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">Bánh thưởng cho chó hình xương Yaho 15g</h5>
                        <p class="card-price">Giá: 45.000đ </p>
                        <div class="btn-buy d-flex text-center">
                            <a href="#" class="btn btn-warning" style=" margin-left: 15px;">Chi
                                Tiết </a>
                            <a href="#" class="btn btn-warning" style=" margin-left: 50px;">Mua
                                Ngay</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col" style="height: 440px;">
                <div class="card" style="width: 18rem;">
                    <img src="<?= $base_url ?>/template/assets_user/image/thucan3.jpg" class="card-img-top" alt="..." style="height: 250px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">Bánh Immune Care tăng cường miễn dịch 60g</h5>
                        <p class="card-price">Giá: 65.000đ </p>
                        <div class="btn-buy d-flex text-center">
                            <a href="#" class="btn btn-warning" style=" margin-left: 15px;">Chi
                                Tiết </a>
                            <a href="#" class="btn btn-warning" style=" margin-left: 50px;">Mua
                                Ngay</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col" style="height: 440px;">
                <div class="card" style="width: 18rem;">
                    <img src="<?= $base_url ?>/template/assets_user/image/thucan4.jpg" class="card-img-top" alt="..." style="height: 250px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">Bánh Kanoodles chăm sóc răng miệng</h5>
                        <p class="card-price">Giá: 35.000đ </p>
                        <div class="btn-buy d-flex text-center">
                            <a href="#" class="btn btn-warning" style=" margin-left: 15px;">Chi
                                Tiết </a>
                            <a href="#" class="btn btn-warning" style=" margin-left: 50px;">Mua
                                Ngay</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col" style="height: 440px;">
                <div class="card" style="width: 18rem;">
                    <img src="<?= $base_url ?>/template/assets_user/image/dungcu1.jpg" class="card-img-top" alt="..." style="height: 250px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">Nhà vệ sinh mini cho mèo tơ</h5>
                        <p class="card-price">Giá: 235.000đ </p>
                        <div class="btn-buy d-flex text-center">
                            <a href="#" class="btn btn-warning" style=" margin-left: 15px;">Chi
                                Tiết </a>
                            <a href="#" class="btn btn-warning" style=" margin-left: 50px;">Mua
                                Ngay</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col" style="height: 440px;">
                <div class="card" style="width: 18rem;">
                    <img src="<?= $base_url ?>/template/assets_user/image/dc2.jpg" class="card-img-top" alt="..." style="height: 250px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">Bát đựng thức ăn cho chó mèo</h5>
                        <p class="card-price">Giá: 75.000đ </p>
                        <div class="btn-buy d-flex text-center">
                            <a href="#" class="btn btn-warning" style=" margin-left: 15px;">Chi
                                Tiết </a>
                            <a href="#" class="btn btn-warning" style=" margin-left: 50px;">Mua
                                Ngay</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col" style="height: 440px;">
                <div class="card" style="width: 18rem;">
                    <img src="<?= $base_url ?>/template/assets_user/image/dc3.jpg" class="card-img-top" alt="..." style="height: 250px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">Dụng cụ rọ mõm chó khi ra đường </h5>
                        <p class="card-price">Giá: 45.000đ </p>
                        <div class="btn-buy d-flex text-center">
                            <a href="#" class="btn btn-warning" style=" margin-left: 15px;">Chi
                                Tiết </a>
                            <a href="#" class="btn btn-warning" style=" margin-left: 50px;">Mua
                                Ngay</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col" style="height: 440px;">
                <div class="card" style="width: 18rem;">
                    <img src="<?= $base_url ?>/template/assets_user/image/dc4.jpg" class="card-img-top" alt="..." style="height: 250px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">Dụng cụ đựng nước riêng cho chó</h5>
                        <p class="card-price">Giá: 25.000đ </p>
                        <div class="btn-buy d-flex text-center">
                            <a href="#" class="btn btn-warning" style=" margin-left: 15px;">Chi
                                Tiết </a>
                            <a href="#" class="btn btn-warning" style=" margin-left: 50px;">Mua
                                Ngay</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container text-center" style="background-color: #ebf0f8; ">
        <div class="row">
            <div class="title  mt-5 mb-1">
                <h2 style="font-weight: bolder; color: #fcb000; text-align: center;"> _ Hướng Dẫn Chăm Sóc _
                </h2>
            </div>
            <div class="sub-title mb-5">
                <span style="font-size: 14px;">Đây là một số kỹ năng cần thiết cho một người mới chơi thú
                    cưng.</span>
            </div>
            <div class="col-md-6 ">
                <img src="<?= $base_url ?>/template/assets_user/image/hd1.jpg" alt="" style="width: 640px; border-radius: 5px;">
                <p class="p-3 pt-2" style="border-radius: 5px;width: 640px;background-color: #e2f2f2;box-shadow: 0.5px 0.5px gray;">
                    <a href="#" style="text-decoration: none; color: #212529;">Hướng dẫn chi tiết về chăm sóc
                        thú
                        cưng một cách tốt nhất</a>
                </p>
            </div>
            <div class="col-md-6">
                <div class="hd-right">
                    <div class="hd d-flex mb-3" style="border-radius: 5px; background-color: #e2f2f2; box-shadow: 2px 0.5px gray;">
                        <img src="<?= $base_url ?>/template/assets_user/image/hd2.jpg" alt="" style="width: 150px;border-radius: 5px; ">
                        <span class="text-center w-100 pt-4" style="font-size: 21px;"><a href="#" style="text-decoration:none; color:#212529;">Hướng dẫn nuôi mèo cưng cho người
                                mới</a></span>
                    </div>
                    <div class="hd d-flex mb-3" style="border-radius: 5px; background-color: #e2f2f2; box-shadow: 2px 0.5px gray;">
                        <img src="<?= $base_url ?>/template/assets_user/image/hd3.jpg" alt="" style="width: 150px;border-radius: 5px; ">
                        <span class="text-center w-100 pt-4" style="font-size: 21px;"><a href="#" style="text-decoration:none; color:#212529;">Chăm sóc chó Poodle từ A đến
                                Z</a></span>
                    </div>
                    <div class="hd d-flex mb-3" style="border-radius: 5px; background-color: #e2f2f2; box-shadow: 2px 0.5px gray;">
                        <img src="<?= $base_url ?>/template/assets_user/image/hd4.jpg" alt="" style="width: 150px;border-radius: 5px; ">
                        <span class="text-center w-100 pt-4" style="font-size: 21px;"><a href="#" style="text-decoration:none; color:#212529;">Cách nuôi, chăm sóc chó
                                Alaska</a></span>
                    </div>
                    <div class="hd d-flex mb-3" style="border-radius: 5px; background-color: #e2f2f2; box-shadow: 2px 0.5px gray;">
                        <img src="<?= $base_url ?>/template/assets_user/image/hd5.jpg" alt="" style="width: 150px;border-radius: 5px; ">
                        <span class="text-center w-100 pt-4" style="font-size: 21px;"><a href="#" style="text-decoration:none; color:#212529;">Kỹ thuật nuôi chó Corgi</a></span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<section>
    <div class="container-danhgia mt-5">
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner " style="height: 300px;">
                <div class="carousel-item active text-center p-3" style="background-color: #ebf0f8;">
                    <div class="col ">
                        <img src="<?= $base_url ?>/template/assets_user/image/goku.jpg" alt="" style="border-radius: 50%; width: 120px; height: 120px;">
                    </div>
                    <div class="m-4" style="padding: 0 20%;">
                        <span>Tôi rất vui được bình luận về thú cưng của bạn trên website này!
                            Đó có thể là loại thú cưng, đặc điểm nổi bật, tính cách tuyệt vời!</span>
                    </div>
                    <div class="tacgia mb-1">Tác giả: Anh Bảo Trung</div>
                    <div class="nghenghiep">Nghề Nghiệp: Lập Trình Web</div>
                </div>
                <div class="carousel-item text-center p-3" style="background-color: #ebf0f8;">
                    <div class="col ">
                        <img src="<?= $base_url ?>/template/assets_user/image/goku.jpg" alt="" style="border-radius: 50%; width: 120px; height: 120px;">
                    </div>
                    <div class="m-4">
                        <span class="text-center">Tôi rất vui được bình luận về thú cưng của bạn trên website
                            này!
                        </span>
                    </div>
                    <div class="tacgia mb-1">Tác giả: Anh Bảo Trung</div>
                    <div class="nghenghiep">Nghề Nghiệp: Lập Trình Web</div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden"></span>
            </button>
        </div>

    </div>
</section>
<section>
    <div class="container-news">
        <div class="title  mt-5 mb-5">
            <h2 style="font-weight: bolder; color: #fcb000; text-align: center;"> _ Tin Tức Mới Nhất _</h2>
        </div>
        <div class="container ">
            <div class="row">
                <div class="col m-2" style=" width: 310px; ">
                    <img src="<?= $base_url ?>/template/assets_user/image/tt5.webp" alt="" style="width: 400px; height: 250px; margin-right: 20px; object-fit: cover;">
                    <div style="margin: 10px 0;">
                        <strong><span>Ngày Hội SIÊU SALE “HAMSTER” 8/8</span></strong>
                    </div>
                    <p style="font-size: 14px;">Hòa vào không khí rộn ràng của Ngày hội siêu sale trên toàn
                        quốc.
                        Ngày Lễ hội mua sắm 8 tháng
                        8.</p>

                </div>
                <div class="col m-2" style=" width: 310px; ">
                    <img src="<?= $base_url ?>/template/assets_user/image/tt5.webp" alt="" style="width: 400px; height: 250px; margin-right: 20px; object-fit: cover;">
                    <div style="margin: 10px 0;">
                        <strong><span>Ngày Hội SIÊU SALE “HAMSTER” 8/8</span></strong>
                    </div>
                    <p style="font-size: 14px;">Hòa vào không khí rộn ràng của Ngày hội siêu sale trên toàn
                        quốc.
                        Ngày Lễ hội mua sắm 8 tháng
                        8.</p>

                </div>
                <div class="col m-2" style=" width: 310px; ">
                    <img src="<?= $base_url ?>/template/assets_user/image/tt5.webp" alt="" style="width: 400px; height: 250px; margin-right: 20px; object-fit: cover;">
                    <div style="margin: 10px 0;">
                        <strong><span>Ngày Hội SIÊU SALE “HAMSTER” 8/8</span></strong>
                    </div>
                    <p style="font-size: 14px;">Hòa vào không khí rộn ràng của Ngày hội siêu sale trên toàn
                        quốc.
                        Ngày Lễ hội mua sắm 8 tháng
                        8.</p>

                </div>
                <div class="text-center mt-3">
                    <button type="button" class="btn btn-warning text-center"><a href="#" style="color: #212529; text-decoration: none;">Xem Thêm</a></button>

                </div>
            </div>
        </div>
    </div>
</section>
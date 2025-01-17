<section>
    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?= $base_url ?>/template/assets_user/image/bannerpethouse1.jpg" class="d-block w-100" alt="..." style="height: 580px; object-fit:cover;">
            </div>
            <div class="carousel-item">
                <img src="<?= $base_url ?>/template/assets_user/image/bannerpethouse2.jpg" class="d-block w-100" alt="..." style="height: 580px;">
            </div>
            <div class="carousel-item">
                <img src="<?= $base_url ?>/template/assets_user/image/bannerpethouse3.jpg" class="d-block w-100" alt="..." style="height: 580px;">
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
                                <h5 class="card-title" style="height: 40px;"><?= $sp['TenSP'] ?></h5>
                                <p class="card-text">Size: <strong><?= $sp['hinhdang'] ?></strong></p>
                                <?php if (isset($sp['GiaKM']) && $sp['GiaKM'] > 0) : ?>
                                    <p class="card-price" style="font-size: 14px;">Giá: <del><?= number_format($sp['Gia'], 0, ',', '.') ?> VNĐ</del><strong><?= number_format($sp['GiaKM'], 0, ',', '.') ?> VNĐ</strong></p>
                                <?php else : ?>
                                    <p class="card-price d-n" style="font-size: 14px;">Giá: <strong><?= number_format($sp['Gia'], 0, ',', '.') ?> VNĐ</strong></p>
                                <?php endif; ?>
                                <div class="btn-buy d-flex text-center">
                                    <a href="<?= $base_url ?>/product/detail&id=<?= $sp['MaSP'] ?>" class="btn btn-warning" style=" margin-left: 15px; color:#ffffff;">Chi
                                        Tiết</a>
                                    <a href="<?= $base_url ?>/page/addToCart&id=<?= $sp['MaSP'] ?>" class="btn btn-warning" style=" margin-left: 50px; color:#ffffff;">Mua
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
                                    <h5 class="card-title" style="height: 40px;"><?= $sp['TenSP'] ?></h5>
                                    <p class="card-text">Size: <strong><?= $sp['hinhdang'] ?></strong></p>
                                    <?php if (isset($sp['GiaKM']) && $sp['GiaKM'] > 0) : ?>
                                        <p class="card-price" style="font-size: 14px;">Giá: <del><?= number_format($sp['Gia'], 0, ',', '.') ?> VNĐ</del><strong><?= number_format($sp['GiaKM'], 0, ',', '.') ?> VNĐ</strong></p>
                                    <?php else : ?>
                                        <p class="card-price d-n" style="font-size: 14px;">Giá: <strong><?= number_format($sp['Gia'], 0, ',', '.') ?> VNĐ</strong></p>
                                    <?php endif; ?>
                                    <div class="btn-buy d-flex text-center">
                                        <a href="<?= $base_url ?>/product/detail&id=<?= $sp['MaSP'] ?>" class="btn btn-warning" style=" margin-left: 15px; color:#ffffff;">Chi Tiết</a>
                                        <a href="<?= $base_url ?>/page/addToCart&id=<?= $sp['MaSP'] ?>" class="btn btn-warning" style=" margin-left: 50px; color:#ffffff;">Mua Ngay</a>
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

    <div class="container mb-5" style="margin-bottom:50px;">

        <div class="title  text-center mt-5 mt-5">
            <h2 style="font-weight: bolder; color: #fcb000;"> _ Dịch Vụ Thú Cưng _</h2>
        </div>
        <div class="row mt-5">
            <?php foreach ($dsServices as $dv) : ?>
                <div class="col" style="height: 440px;">
                    <div class="card" style="width: 18rem;">
                        <img src="<?= $base_url ?>/template/assets_user/image/<?= $dv['Hinh'] ?>" class="card-img-top" alt="..." style="height: 250px; object-fit: cover;">
                        <?php if (isset($dv['GiaKM']) && $dv['GiaKM']) : ?>
                            <div class="badge badge-danger bg-danger position-absolute" style="top: 20px; right: 20px;">
                                Sale <?= number_format((($dv['Gia'] - $dv['GiaKM']) / $dv['Gia']) * 100, 1) ?>%
                            </div>
                        <?php endif; ?>
                        <div class="card-body">
                            <h5 class="card-title" style="height: 40px;"><?= $dv['TenDV'] ?></h5>
                            <p class="card-text"><?= $dv['mota'] ?></p>
                            <?php if (isset($dv['GiaKM']) && $dv['GiaKM'] > 0) : ?>
                                <p class="card-price" style="font-size: 14px;">Giá: <del><?= number_format($dv['Gia'], 0, ',', '.') ?> VNĐ</del><strong><?= number_format($dv['GiaKM'], 0, ',', '.') ?> VNĐ</strong></p>
                            <?php else : ?>
                                <p class="card-price d-n" style="font-size: 14px;">Giá: <strong><?= number_format($dv['Gia'], 0, ',', '.') ?> VNĐ</strong></p>
                            <?php endif; ?>
                            <div class="btn-buy d-flex text-center">
                                <a href="<?= $base_url ?>/category/detail&id=<?= $dv['MaDV'] ?>" class="btn btn-warning" style=" margin-left: 15px; color:#ffffff;">Chi
                                    Tiết </a>
                                <a href="<?= $base_url ?>/page/addToCart&id=<?= $dv['MaDV'] ?>" class="btn btn-warning" style=" margin-left: 50px; color:#ffffff;">Đặt
                                    Ngay</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<br>
<section>
    <div class="container mt-5">
        <div class="title  mt-5 ">
            <h2 style="font-weight: bolder; color: #fcb000; text-align: center;"> _ Thức Ăn & Đồ Dùng _
            </h2>
        </div>
        <div class="row mt-5">
            <?php foreach ($dsToolFoods as $sp) : ?>
                <div class="col mb-5" style="height: 440px;">
                    <div class="card" style="width: 18rem;">
                        <img src="<?= $base_url ?>/template/assets_user/image/<?= $sp['Hinh'] ?>" class="card-img-top" alt="..." style="height: 250px; object-fit: cover;">
                        <?php if (isset($sp['GiaKM']) && $sp['GiaKM']) : ?>
                            <div class="badge badge-danger bg-danger position-absolute" style="top: 20px; right: 20px;">
                                Sale <?= number_format((($sp['Gia'] - $sp['GiaKM']) / $sp['Gia']) * 100, 1) ?>%
                            </div>
                        <?php endif; ?>
                        <div class="card-body">
                            <h5 class="card-title" style="height: 40px;"><?= $sp['TenSP'] ?></h5>
                            <p class="card-text " style="font-size: 14px;">Size: <strong><?= $sp['hinhdang'] ?></strong></p>

                            <?php if (isset($sp['GiaKM']) && $sp['GiaKM'] > 0) : ?>
                                <p class="card-price" style="font-size: 14px;">Giá: <del><?= number_format($sp['Gia'], 0, ',', '.') ?> VNĐ</del><strong><?= number_format($sp['GiaKM'], 0, ',', '.') ?> VNĐ</strong></p>
                            <?php else : ?>
                                <p class="card-price" style="font-size: 14px;">Giá: <strong><?= number_format($sp['Gia'], 0, ',', '.') ?> VNĐ</strong></p>
                            <?php endif; ?>
                            <div class="btn-buy d-flex text-center">
                                <a href="<?= $base_url ?>/product/detail&id=<?= $sp['MaSP'] ?>" class="btn btn-warning" style=" margin-left: 15px; color:#ffffff;">Chi
                                    Tiết </a>
                                <a href="<?= $base_url ?>/page/addToCart&id=<?= $sp['MaSP'] ?>" class="btn btn-warning" style=" margin-left: 50px; color:#ffffff;">Mua
                                    Ngay</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<section style="background-color: #ebf0f8; ">
    <div class="container text-center" >
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
                <p class="p-3 pt-2" style="border-radius: 5px;width: 640px;background-color: #e2f2f2;box-shadow: 1.5px 1.5px 5px gray;">
                    <a href="https://youtu.be/-nYYwsA7q5I?si=gElTiJSjbVbwojLn" style="text-decoration: none; color: #2e3192;">Hướng dẫn chi tiết về chăm sóc
                        thú cưng một cách tốt nhất</a>
                </p>
            </div>
            <div class="col-md-6">
                <div class="hd-right">
                    <div class="hd d-flex mb-3" style="border-radius: 5px; background-color: #e2f2f2; box-shadow: 1.5px 1.5px 5px gray;">
                        <img src="<?= $base_url ?>/template/assets_user/image/hd2.jpg" alt="" style="width: 150px;border-radius: 5px; ">
                        <span class="text-center w-100 pt-4" style="font-size: 21px;"><a href="https://youtu.be/XOITn1vW-6c?si=ekL2ce4zLeVxBcW0" style="text-decoration:none; color:#2e3192;">Hướng dẫn nuôi mèo cưng cho người
                                mới</a></span>
                    </div>
                    <div class="hd d-flex mb-3" style="border-radius: 5px; background-color: #e2f2f2; box-shadow:1.5px 1.5px 5px gray;">
                        <img src="<?= $base_url ?>/template/assets_user/image/hd3.jpg" alt="" style="width: 150px;border-radius: 5px; ">
                        <span class="text-center w-100 pt-4" style="font-size: 21px;"><a href="https://youtu.be/M7-9lI4JUpc?si=jh5Z6NqgDJFXWN5y" style="text-decoration:none; color:#2e3192;">Chăm sóc chó Poodle từ A đến
                                Z</a></span>
                    </div>
                    <div class="hd d-flex mb-3" style="border-radius: 5px; background-color: #e2f2f2; box-shadow: 1.5px 1.5px 5px gray;">
                        <img src="<?= $base_url ?>/template/assets_user/image/hd4.jpg" alt="" style="width: 150px;border-radius: 5px; ">
                        <span class="text-center w-100 pt-4" style="font-size: 21px;"><a href="https://youtu.be/TVedK3jdlr8?si=Ii4DmbEmYc-LF2rF" style="text-decoration:none; color:#2e3192;">Cách nuôi, chăm sóc chó
                                Alaska</a></span>
                    </div>
                    <div class="hd d-flex mb-3" style="border-radius: 5px; background-color: #e2f2f2; box-shadow: 1.5px 1.5px 5px gray;">
                        <img src="<?= $base_url ?>/template/assets_user/image/hd5.jpg" alt="" style="width: 150px;border-radius: 5px; ">
                        <span class="text-center w-100 pt-4" style="font-size: 21px;"><a href="https://youtu.be/evCJeF6t-OA?si=xKNe5FmEBy9UnkL0" style="text-decoration:none; color:#2e3192;">Kỹ thuật nuôi chó Corgi</a></span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<section>
    <div class="container-danhgia mt-5" >
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner " style="height: 300px;">
                <?php foreach ($dsComments as $cmt) : ?>
                    <div class="carousel-item active text-center p-3" style="background-color: #CCCCCC; padding: 30px 0; color: #212529;">
                        <div class="col ">
                            <img src="<?= $base_url ?>/template/assets_user/image/<?= $cmt['HinhAnh'] ?>" alt="" style="border-radius: 50%; width: 120px; height: 120px; object-fit: cover;">
                        </div>
                        <div class="m-4" style="padding: 0 20%;">
                            <span><?= $cmt['NoiDung'] ?></span>
                        </div>
                        <div class="tacgia mb-1">Tác giả: <?= $cmt['HoTen'] ?></div>
                        <div class="nghenghiep">Nghề Nghiệp: <?= $cmt['NgheNghiep'] ?> </div>
                    </div>
                <?php endforeach; ?>
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
                <?php foreach ($dsPosts as $bv) : ?>
                    <div class="col m-2" style=" width: 310px; ">
                        <img src="<?= $base_url ?>/template/assets_user/image/<?= $bv['Hinh'] ?>" alt="" style="width: 400px; height: 250px; margin-right: 20px; object-fit: cover;">
                        <div style="margin: 10px 0;height: 40px;">
                            <strong><span ><a href="<?= $base_url ?>/news/detail&id=<?= $bv['MaBV'] ?>"><?= $bv['TieuDe'] ?></a></span></strong>
                        </div>
                        <div style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; content:'...'">
                            <p href="<?=$base_url?>/news/new" style="font-size: 14px; ;"><?= $bv['NoiDung'] ?></p>
                        </div>

                    </div>
                <?php endforeach; ?>
                <div class="text-center mt-3">
                    <button type="button" class="btn btn-warning text-center"><a href="<?=$base_url?>/news/news" style=" text-decoration: none; color:#ffffff;">Xem Thêm</a></button>

                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="brands  mt-5 mb-5">
        <div class="container text-center">
            <div class="row ">
                <?php foreach($listPartners as $dt):?>
                <div class="col">
                    <img src="<?= $base_url ?>/template/assets_user/image/<?=$dt['Hinh']?>" alt="">
                </div>
                
                    <?php endforeach;?>
            </div>
        </div>
    </div>
</section>
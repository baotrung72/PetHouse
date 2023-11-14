<nav aria-label="breadcrumb" class="section-p2" style="padding: 20px 0 30px 7.5%;">
    <ol class="breadcrumb">
        <li class="breadcrumb-item" style="text-decoration: none; color: #212529;"><a href="#">Trang Chủ</a>
        </li>
        <li class="breadcrumb-item" style="text-decoration: none; color: #212529;"><a href="#">Sản Phẩm</a></li>

    </ol>
</nav>
<div class="container w-100">
    <div class="row">
        <div class="col-3" style="font-size: 20px; ">
            <div class="titledanhmuc" style="background-color: #f1b306; color:#ffffff; padding: 8px 10px; border-top-right-radius: 10px;border-top-left-radius: 10px;">
                <i class="fa-solid fa-bars"></i>
                <span style="margin-left: 10px; font-weight: 600;">Danh mục </span>
            </div>
            <!-- As a link -->
            <div class="container-fuild">
                <?php foreach ($dsdanhmuc as $dm) : ?>
                    <nav class="navbar bg-body-tertiary d-flex" style="padding-left: 42px;">
                        <a class="dropdown-item" style="padding: 10px 0;" href="#"><?= $dm['TenDM'] ?></a>
                    </nav>
                    <hr style="margin: 0;">
                <?php endforeach; ?>
            </div>
        </div>
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
                            <p class="card-price" style="font-size: 14px;">Giá: <del><?= $sp['Gia'] ?>đ</del><strong><?= $sp['GiaKM'] ?>đ</strong></p>
                        <?php else : ?>
                            <p class="card-price d-n" style="font-size: 14px;">Giá: <strong><?= $sp['Gia'] ?>đ</strong></p>
                        <?php endif; ?>
                        <div class="btn-buy d-flex text-center">
                            <a href="<?= $base_url ?>/product/detail&id=<?= $sp['MaSP'] ?>" class="btn btn-warning" style=" margin-left: 15px;">Chi
                                Tiết</a>
                            <a href="#" class="btn btn-warning" style=" margin-left: 50px;">Mua
                                Ngay</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

    </div>

    <div class="row mt-3">
        <div class="col-3" style="font-size: 20px;">
        </div>
        <?php foreach ($threeproducts as $sp) : ?>
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
                            <p class="card-price" style="font-size: 14px;">Giá: <del><?= $sp['Gia'] ?>đ</del><strong><?= $sp['GiaKM'] ?>đ</strong></p>
                        <?php else : ?>
                            <p class="card-price d-n" style="font-size: 14px;">Giá: <strong><?= $sp['Gia'] ?>đ</strong></p>
                        <?php endif; ?>
                        <div class="btn-buy d-flex text-center">
                            <a href="<?= $base_url ?>/product/detail&id=<?= $sp['MaSP'] ?>" class="btn btn-warning" style=" margin-left: 15px;">Chi
                                Tiết</a>
                            <a href="#" class="btn btn-warning" style=" margin-left: 50px;">Mua
                                Ngay</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

</div>
<nav aria-label="Page navigation example text-center" style="margin: 20px; margin-left: 45%;">
    <ul class="pagination ">
        <li class="page-item "><a class="page-link" href="#">
                < </a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">></a></li>
    </ul>
</nav>

</main>
<section>

    <div class="container text-center">
        <div class="title  mt-5 ">
            <h2 style="font-weight: bolder; color: #fcb000; text-align: center;"> _ Thức Ăn & Đồ Dùng _</h2>
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
                                <p class="card-price" style="font-size: 14px;">Giá: <del><?= $sp['Gia'] ?>đ</del><strong><?= $sp['GiaKM'] ?>đ</strong></p>
                            <?php else : ?>
                                <p class="card-price" style="font-size: 14px;">Giá: <strong><?= $sp['Gia'] ?>đ</strong></p>
                            <?php endif; ?>
                            <div class="btn-buy d-flex text-center">
                                <a href="<?= $base_url ?>/product/detail&id=<?= $sp['MaSP'] ?>" class="btn btn-warning" style=" margin-left: 15px;">Chi
                                    Tiết </a>
                                <a href="#" class="btn btn-warning" style=" margin-left: 50px;">Mua
                                    Ngay</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<section style="margin-bottom: 60px;">

    <div class="container ">
        <div class="title text-center mt-5 mt-5">
            <h2 style="font-weight: bolder; color: #fcb000;"> _ Thời Trang _</h2>
        </div>
        <div class="row mt-5">
        <?php foreach ($getFashion as $sp) : ?>
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
                                <p class="card-price" style="font-size: 14px;">Giá: <del><?= $sp['Gia'] ?>đ</del><strong><?= $sp['GiaKM'] ?>đ</strong></p>
                            <?php else : ?>
                                <p class="card-price" style="font-size: 14px;">Giá: <strong><?= $sp['Gia'] ?>đ</strong></p>
                            <?php endif; ?>
                            <div class="btn-buy d-flex text-center">
                                <a href="<?= $base_url ?>/product/detail&id=<?= $sp['MaSP'] ?>" class="btn btn-warning" style=" margin-left: 15px;">Chi
                                    Tiết </a>
                                <a href="#" class="btn btn-warning" style=" margin-left: 50px;">Mua
                                    Ngay</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
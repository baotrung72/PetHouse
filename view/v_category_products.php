<div class="container-fluid" style="padding: 20px 0 30px 7.5%;">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="">Trang chủ</a></li>
            <li class="breadcrumb-item"><a href="<?=$base_url?>/product/producy-total">Sản Phẩm</a></li>
            <li class="breadcrumb-item active" aria-current="page">Danh Mục Sản Phẩm</li>
        </ol>
    </nav>
</div>
<div class="title " style="padding: 0 0 30px 7.5%;">

    <h2 style="font-weight: bolder; color: #fcb000; "><?= $getDmById['TenDM'] ?></h2>
</div>
<div class="container ">
    <div class="row">
        <?php foreach ($productInCate as $sp) : ?>
            <div class="col mb-4" style="height: 440px;">
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
<div class="container text-center">
    <div class="row">
        <div class="col pt-3" style="margin-left: 43%;">
            <nav aria-label="Page navigation example d-block">
                <ul class="pagination text-center">
                    <li class="page-item"><a class="page-link" href="#">
                            < </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">></a></li>
                </ul>
            </nav>
        </div>

    </div>
</div>

<br>
<br><br>
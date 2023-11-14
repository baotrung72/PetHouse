<nav aria-label="breadcrumb" class="section-p2" style="padding: 20px 0 30px 7.5%;">
    <ol class="breadcrumb">
        <li class="breadcrumb-item" style="text-decoration: none; color: #212529;"><a href="<?=$base_url?>/page/home">Trang Chủ</a>
        </li>
        <li class="breadcrumb-item" style="text-decoration: none; color: #212529;">Dịch Vụ</li>

    </ol>
</nav>
<div class="title " style="padding: 0 0 30px 7.5%;">

    <h2 style="font-weight: bolder; color: #fcb000; ">Tất Cả Dịch Vụ</h2>
</div>
<div class="container w-100">
    <div class="row">
        
        <?php foreach ($dsAllServices as $dv) : ?>
            <div class="col" style="height: 440px;">
                <div class="card" style="width: 18rem;">
                    <img src="<?= $base_url ?>/template/assets_user/image/<?= $dv['Hinh'] ?>" class="card-img-top" style="height:250px; object-fit: cover;" alt="...">
                    <div class="badge badge-danger bg-danger position-absolute" style="top: 20px; right: 20px;">
                        Sale <?= number_format((($dv['Gia'] - $dv['GiaKM']) / $dv['Gia']) * 100, 1) ?>%
                    </div>
                    <div class="card-body">
                        <h5 class="card-title" style="height: 40px;"><?= $dv['TenDV'] ?></h5>
                        <?php if (isset($dv['GiaKM']) && $dv['GiaKM'] > 0) : ?>
                            <p class="card-price" style="font-size: 14px;">Giá: <del><?= $dv['Gia'] ?>đ</del><strong><?= $dv['GiaKM'] ?>đ</strong></p>
                        <?php else : ?>
                            <p class="card-price d-n" style="font-size: 14px;">Giá: <strong><?= $dv['Gia'] ?>đ</strong></p>
                        <?php endif; ?>
                        <div class="btn-buy d-flex text-center">
                            <a href="<?= $base_url ?>/category/detail&id=<?= $dv['MaDV'] ?>" class="btn btn-warning" style=" margin-left: 15px;">Chi
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


</main>

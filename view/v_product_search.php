<div class="container mb-5">
    <div class="trending">
        <h5 style="padding: 50px 0 20px 0; font-size: 16px;">Top thịnh hành:* </h5>
        <button type="button" class="btn " style="background-color: #dfdfdf;margin-right: 10px; padding: 5px 10px;">Chó Kiểng</button>
        <button type="button" class="btn " style="background-color: #dfdfdf;margin-right: 10px; padding: 5px 10px;">Mèo Kiểng</button>
        <button type="button" class="btn " style="background-color: #dfdfdf;margin-right: 10px; padding: 5px 10px;">Thức Ăn Vật Nuôi</button>
        <button type="button" class="btn " style="background-color: #dfdfdf;margin-right: 10px; padding: 5px 10px;">Thời Trang</button>
        <button type="button" class="btn " style="background-color: #dfdfdf;margin-right: 10px; padding: 5px 10px;">Động Vật Bò Sát</button>
    </div>
    <h2 class="text-center" style="color: #9e9e9e; padding: 40px 0 40px 0;">Kết quả tìm kiếm về <?= $_GET['keyword'] ?> của bạn</h2>
    <div class="container">
        <div class="row">
            <?php foreach ($ketQuaTimKiem as $sp) : ?>
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
                                <p class="card-price" style="font-size: 14px;">Giá: <del><?= $sp['Gia'] ?>đ</del><strong><?= $sp['GiaKM'] ?>đ</strong></p>
                            <?php else : ?>
                                <p class="card-price d-n" style="font-size: 14px;">Giá: <strong><?= $sp['Gia'] ?>đ</strong></p>
                            <?php endif; ?>
                            <div class="btn-buy d-flex text-center">
                                <a href="<?= $base_url ?>/product/detail&id=<?= $sp['MaSP'] ?>" class="btn btn-warning" style=" margin-left: 15px;">Chi Tiết</a>
                                <a href="#" class="btn btn-warning" style=" margin-left: 50px;">Mua Ngay</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <?php if (isset($_SESSION['thongbao'])) : ?>
                        <?= $_SESSION['thongbao'] ?>
                <?php endif;?>
    </div>
    <div class="container  text-center" style="padding-left: 43%; margin-top: 80px;">
        <nav aria-label="Page navigation example ">
            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
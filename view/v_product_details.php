<section>
    <nav aria-label="breadcrumb" class="section-p2" style="padding: 20px 0 30px 7.5%;">
        <ol class="breadcrumb">
            <li class="breadcrumb-item" style="text-decoration: none; color: #212529;"><a href="<?= $base_url ?>/page/home">Trang Chủ</a>
            </li>
            <li class="breadcrumb-item" style="text-decoration: none; color: #212529;"><a href="<?= $base_url ?>/paroduct/product-total">Sản Phẩm</a></li>
            <li class="breadcrumb-item" style="text-decoration: none; color: #212529;">Chi Tiết</li>
        </ol>
    </nav>

    <div class="container">
        <form action="<?= $base_url ?>/page/cart" method="post">
            <input type="hidden" name="SoLuong" id="SoLuong" value="<?= $detailProduct['SoLuong'] ?>">
            <input type="hidden" name="DonGia" id="Gia" value="<?= $detailProduct['Gia'] ?>">
            <div class="row">
                <div class="col">
                    <img src="<?= $base_url ?>/template/assets_user/image/<?= $detailProduct['Hinh'] ?>" alt="" style="height: 500px; width: 100%; object-fit: cover;">
                    <div class="row" style="padding-top: 50px;">
                        <div class="col">
                            <img src="<?= $base_url ?>/template/assets_user/image/<?= $detailProduct['Hinh'] ?>" alt="" width="190px">
                        </div>
                        <div class="col">
                            <img src="<?= $base_url ?>/template/assets_user/image/<?= $detailProduct['Hinh'] ?>" alt="" width="190px">
                        </div>
                        <div class="col">
                            <img src="<?= $base_url ?>/template/assets_user/image/<?= $detailProduct['Hinh'] ?>" alt="" width="190px">
                        </div>
                    </div>

                </div>
                <div class="col">
                    <h3><?= $detailProduct['TenSP'] ?></h3> <br>
                    <p><?= $detailProduct['MoTa'] ?></p>

                    <h3 style="padding-top: 50px;">Giá: <span class="text-danger"><?= number_format($detailProduct['Gia'], 0, ',', '.') ?> VNĐ</span></h3>

                    <h5 style="padding-top: 30px;">Size: <strong><?= $detailProduct['hinhdang'] ?></strong></h5>
                    <div class="quantity d-flex pt-5">
                        <h5 style="margin-right: 20px; padding-top: 5px;">Số Lượng:</h5>
                        <div class="btn-group me-1 text-center" role="group" aria-label="Second group" style="font-size: 12px;width:30px; ">
                            <button type="button" class="btn btn-secondary" id="subtractquantity">-</button>
                            <div style="width: 50px; ">
                                <input type="number" name="SoLuong" value="1" min="1" style="width: 50px; text-align:center;height: 40px;font-size:16px;">
                            </div>
                            <button type="button" class="btn btn-secondary" id="add">+</button>
                        </div>
                    </div>
                    <div style="padding-top: 70px; ">
                        <a href="<?= $base_url ?>/page/addToCart&id=<?= $detailProduct['MaSP'] ?>" type="submit" class="btn btn-warning" style="color:#ffffff;">Thêm Vào Giỏ Hàng</a>
                    </div>
                    <div style="padding-top: 50px; width: 250px;">
                        <h5>Tham Khảo Thêm Tại:</h5>
                        <div class="row mt-4" style="font-size: 20px;">
                            <div class="col">
                                <a href="#" style="text-decoration: none; color: blue;"><i class="fa-brands fa-twitter"></i></a>
                            </div>
                            <div class="col">
                                <a href="#" style="text-decoration: none; color: blue;"><i class="fa-brands fa-facebook"></i></i></a>
                            </div>
                            <div class="col">
                                <a href="#" style="text-decoration: none; color: orangered;"><i class="fa-brands fa-instagram"></i></a>
                            </div>
                            <div class="col">
                                <a href="#" style="text-decoration: none; color: red;"><i class="fa-brands fa-youtube"></i></a>
                            </div>
                            <div class="col">
                                <a href="#" style="text-decoration: none; color: #212529;"><i class="fa-solid fa-wifi"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <div style="padding: 50px;">
            <h4 class="pb-3">Thông Tin Chi Tiết</h4>
            <p style="padding-left: 30px;  line-height: 2rem; font-size: 18px">- PetHouse là điểm đến lý tưởng cho những người yêu thú cưng, nơi cung cấp một trải nghiệm mua sắm trực tuyến toàn diện và chất lượng. Với sự đa dạng của các sản phẩm từ thức ăn dinh dưỡng đến đồ chơi và thời trang thú cưng, PetHouse cam kết mang đến cho khách hàng không chỉ là sự thuận tiện mua sắm mà còn là trải nghiệm chăm sóc toàn diện cho thú cưng yêu quý của họ. Đội ngũ tư vấn viên chăm sóc khách hàng của chúng tôi sẵn sàng hỗ trợ bạn với mọi thắc mắc và đảm bảo bạn nhận được những sản phẩm và dịch vụ tốt nhất cho thú cưng của mình. PetHouse không chỉ là nơi để mua sắm, mà còn là cộng đồng đam mê thú cưng, nơi mà bạn có thể chia sẻ kinh nghiệm và kiến thức về việc chăm sóc thú cưng. Hãy thăm PetHouse ngay hôm nay và khám phá thế giới thú cưng đầy màu sắc cùng những trải nghiệm mới lạ!</p>
            <p style="padding-top: 10px; padding-left: 30px;  line-height: 2rem; font-size: 18px"> - PetHouse tự hào là một địa chỉ đáng tin cậy cho các sản phẩm chăm sóc thú cưng, đến từ những nguồn cung uy tín và có nguồn gốc rõ ràng. Chúng tôi đặt sự an toàn và chất lượng lên hàng đầu, chọn lựa kỹ lưỡng từ các nhà sản xuất và nhà cung cấp uy tín trên thị trường. Các sản phẩm thức ăn được chúng tôi cung cấp đến từ các nhãn hiệu nổi tiếng và đáng tin cậy, được sản xuất theo các tiêu chuẩn an toàn và dinh dưỡng cao. Chúng tôi cam kết chỉ cung cấp thức ăn có nguồn gốc từ các thành phố và nước có quy định nghiêm ngặt về chất lượng thực phẩm. Đồ chơi và phụ kiện thú cưng tại PetHouse được nhập khẩu trực tiếp từ các đối tác hàng đầu trên thế giới, đảm bảo rằng bạn nhận được những sản phẩm với thiết kế độc đáo và chất liệu an toàn. Chúng tôi hiểu rằng nguồn gốc và xuất xứ của sản phẩm là quan trọng. Do đó, PetHouse cam kết cung cấp thông tin đầy đủ và chính xác về nguồn gốc và xuất xứ của mỗi sản phẩm để khách hàng yên tâm khi lựa chọn cho thú cưng của mình.</p>
        </div>
        <div style="padding-top: 30px; max-width: 500px;">
            <h5>Viết Bình Luận</h5>
            <?php if (isset($_SESSION['user'])) : ?>
                <form action="<?= $base_url ?>/product/comment" method="post">
                    <div class="input-group mb-3 mt-3 " style="padding-left: 30px;">
                        <input type="text" class="form-control" name="NoiDung" placeholder="Bình luận về sản phẩm" aria-label="Recipient's username" aria-describedby="button-addon2">
                        <input type="hidden" class="form-control" name="MaSP" value="<?= $detailProduct['MaSP'] ?>" placeholder="Viết Đánh Giá" aria-label="Recipient's username" aria-describedby="button-addon2">
                        <button class="btn btn-warning" type="submit" name="submit" id="button-addon2">Gửi</button>
                    </div>
                </form>
            <?php endif; ?>
        </div>
        <?php if($countCmt > 0):?>
        <h2 style="padding-top: 50px;" class="text-warning">Một số bình luận</h2>
        <div class="row" style="padding-top: 50px;">
            <div class="col-12">
                <?php foreach ($dsComments as $cmt) : ?>
                    <div class="d-flex" style=" max-width: 500px;">
                        <div class="p-2flex-shrink-1 "><img src="<?= $base_url ?>/template/assets_user/image/<?= $cmt['HinhAnh'] ?>" alt="" style="width: 60px; height: 60px; object-fit: cover; border-radius: 50%;">
                        </div>
                        <div class="p-2 w-100 ">
                            <h6><?= $cmt['HoTen'] ?></h6>
                            <span style="font-size: 12px;">Thời Gian: <?= $cmt['NgayGui'] ?></span>
                            <p style="width: 600px; padding-top: 10px;"><?= $cmt['NoiDung'] ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="col-0">

            </div>
        </div>
        <?php endif; ?>
        <?php if ($productSimilar >= 0) : ?>
            <div class="title text-center m-5">
                <h2 style="font-weight: bolder; color: #fcb000;">Có Thể Bạn Thích</h2>
            </div>
            <div style="padding-bottom: 100px;">
                <div class="row">
                    <?php foreach ($productSimilar as $sp) : ?>
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
                                        <a href="#" class="btn btn-warning" style=" margin-left: 50px; color:#ffffff;">Mua Ngay</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>
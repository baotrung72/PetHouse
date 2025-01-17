<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PetHouse</title>
    <link rel="icon" href="<?= $base_url ?>/path/to/favicon.ico" type="image/x-icon">
    <link rel="icon" type="image/png" href="<?= $base_url ?>/template/assets_user/image/logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= $base_url ?>/template/assets_user/css/style.css">
</head>

<body>
    <header>
        <div class="container-header">
            <nav class="navbar navbar-expand-lg p-0" style="background-color: #f1b306;">
                <div class="container-fluid" style=" color: #ffffff;">
                    <a class="navbar-brand img-logo " href="<?= $base_url ?>/page/home"><img class="img-fluid" src="<?= $base_url ?>/template/assets_user/image/logopethouse.png" alt="" style="width: 250px;margin-left: 20px;" ></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left: 260px;">
                        <form class="d-flex " role="search" style="width: 450px; " method="post" action="<?= $base_url ?>/product/search">
                            <input class="form-control w-100" name="keyword" style=" border: 1.5px solid gray; border-top-left-radius: 20px;border-bottom-left-radius: 20px;border-top-right-radius: 0px; border-bottom-right-radius: 0px; " type="search" placeholder="Tìm Kiếm" aria-label="Search">
                            <button class="btn " type="submit" name="submit" style=" background-color: #ffffff;border-top-right-radius: 20px; border-bottom-right-radius: 20px; border-top-left-radius: 0;border-bottom-left-radius: 0; border: 1.5px solid gray;" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </form>
                    </div>
                    <nav class="navbar navbar-expand-lg ">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="<?= $base_url ?>/page/cart"><i class="fa-solid fa-cart-shopping" style="font-size: 24px;"></i></a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                                <ul class="navbar-nav">
                                    <li class="nav-item dropdown">
                                        <?php if (!isset($_SESSION['user'])) : ?>
                                            <a href="<?= $base_url ?>/user/login"><i class="fa-solid fa-user-tie" style="font-size: 24px; margin-right:10px;"></i></a>
                                        <?php else : ?>
                                            <button class="btn dropdown-toggle border-0" data-bs-toggle="dropdown" aria-expanded="false">
                                                <img src="<?= $base_url ?>/template/assets_user/image/<?= $_SESSION['user']['HinhAnh'] ?>" style="border-radius: 50%; object-fit:cover;" width="35px" height="35px" alt="">
                                            </button>
                                            <ul class="dropdown-menu end-0" style="left:auto">
                                                <li><a class="dropdown-item" href="<?= $base_url ?>/user/personal">Thông Tin</a></li>
                                                <li><a class="dropdown-item" href="#">Lịch Sử</a></li>
                                                <?php if ($_SESSION['user']['Quyen'] == 1) : ?>
                                                    <li><a class="dropdown-item" href="<?= $base_url ?>/admin/dashboard">Trang Quản Trị</a></li>
                                                <?php endif; ?>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="<?= $base_url ?>/user/logout">Đăng Xuất</a></li>
                                            </ul>
                                        <?php endif; ?>
                                        <img src="<?= $base_url ?>/template/assets_user/image/viet-nam.png" alt="" style="width: 20px;" class="ml-3">
                                        <span>VI</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </nav>
            <ul class="nav nav-underline justify-content-center h-90 p-sm-2" style="background-color:  #61402f; font-size: 20px; font-weight: 600; color: #ffffff;">
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="<?= $base_url ?>/page/home" style="color: #ffffff;">Trang Chủ</a>
                </li>
                <li class="nav-item dropdown pt-2 d-flex">
                    <a href="<?= $base_url ?>/product/product-total" style=" color: #ffffff;">Sản Phẩm</a>
                    <p class="  dropdown-toggle" data-bs-toggle="dropdown" style=" font-size: 20px; font-weight: 600;" aria-expanded="false">
                    </p>
                    <ul class="dropdown-menu dropdown-menu">
                        <?php foreach ($dsdanhmuc as $dm) : ?>
                            <li><a class="dropdown-item" href="<?= $base_url ?>/category/category-detail&id=<?= $dm['MaDM'] ?>"><?= $dm['TenDM'] ?></a></li>

                        <?php endforeach; ?>
                    </ul>
                </li>
                <li class="nav-item pt-2 ">
                    <p class=" " style=" font-size: 20px; font-weight: 600;margin-left: 20px;">
                        <a href="<?= $base_url ?>/product/service-total" style=" color: #ffffff;">Dịch Vụ</a>
                    </p>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= $base_url ?>/page/about" style="color: #ffffff; ">Giới Thiệu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= $base_url ?>/news/news" style="color: #ffffff;">Bài Viết</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= $base_url ?>/page/contact" style="color: #ffffff;">Liên Hệ</a>
                </li>

            </ul>
        </div>
    </header>
    <main>
        <!-- include phần ruột của trang chủ từ v_page_home -->
        <?php include_once 'view/v_' . $view_name . '.php'; ?>

    </main>
    <footer style="background-color: #fcb850; padding: 10px 0;">
        <div class="container  mt-5" style="margin-top: 50px;">
            <div class="row footer-main">
                <div class="col-4 ">
                    <div>
                        <h4>Hỗ Trợ Khách Hàng </h4>
                        <span class="mt-4" style="color: gray;">
                            CSKH: 0812720008(24/24)
                        </span>
                        <p style="font-size: 12px;color: gray;">Hỗ trợ quý khách một cách tốt nhất</p>
                    </div>
                    <!-- <div style="margin: 20px 0;">
                        <h5>Chi Nhánh 1</h5>
                        <span>
                            Thanh Xuân, Hà Nội
                        </span>
                    </div> -->
                    <div>
                        <h4>Địa Chỉ </h4>
                        <span style="color: gray;">
                            98 Tân Thới Nhất 5, phường Tân Thới Nhất, Quận 12,TP.HCM
                        </span>
                    </div>
                </div>
                <div class="col-2">
                    <h4>Góc Hỗ Trợ</h4>
                    <div class="mt-4">
                        <div class="mb-2">
                            <a href="<?= $base_url ?>/page/about" style="text-decoration: none; color: gray;">Giới Thiệu Về PetHouse</a>
                        </div>
                        <div class="mb-2">
                            <a href="<?= $base_url ?>/page/contact" style="text-decoration: none; color: gray;">Liên Hệ Với Chúng Tôi</a>
                        </div>
                        <div class="mb-2">
                            <a href="<?= $base_url ?>/news/detail&id=6" style="text-decoration: none; color: gray;">Ưu Đãi Khi Mua Hàng</a>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <h4>Chính Sách Mua Hàng</h4>
                    <div class="d-block mt-4  mb-2" style="color: #ffffff;">
                        <a href="<?= $base_url ?>/page/baomat" style="text-decoration: none; color: gray;">Chính Sách Bảo Mật</a>
                    </div>
                    <div class="d-block mb-2">
                        <a href="<?= $base_url ?>/page/dieukhoan" style="text-decoration: none; color: gray;">Điều Khoản Sử Dụng</a>
                    </div>
                    <div class="d-block mb-2">
                        <a href="<?= $base_url ?>/page/doitra" style="text-decoration: none; color: gray;">Chính Sách Đổi Trả</a>
                    </div>
                    <div class="d-block mb-2">
                        <a href="<?= $base_url ?>/page/buy-pay" style="text-decoration: none; color: gray;">Đặt Hàng Và Thanh Toán</a>
                    </div>
                </div>
                <div class="col-3">
                    <h4>Mạng Xã Hội</h4>
                    <div class="container text-center">
                        <div class="row mt-4 " style="font-size: 20px;">
                            <div class="col" style="color: #79d1e7;">
                                <a href="#" style="text-decoration: none; color: #79d1e7;"><i class="fa-brands fa-twitter"></i></a>
                            </div>
                            <div class="col" style="color: #4575cd;">
                                <a href="#" style="text-decoration: none; color: #4575cd;"><i class="fa-brands fa-facebook"></i></i></a>
                            </div>

                            <div class="col" style="color: #eb3e32;">
                                <a href="#" style="text-decoration: none; color: #ff958c;"><i class="fa-brands fa-instagram"></i></a>
                            </div>

                            <div class="col" style="color: #eb3e32;">
                                <a href="#" style="text-decoration: none; color: #eb3e32;"><i class="fa-brands fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>                   
                </div>
            </div>
        </div>
    </footer>
</body>
<script src="<?= $base_url ?>/template/assets_user/javascript/index.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
<script>
    (function() {
        'use strict';

        var forms = document.querySelectorAll('.needs-validation');

        Array.from(forms).forEach(function(form) {
            form.addEventListener('submit', function(event) {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }

                form.classList.add('was-validated');
            });
        });
    })();
</script>




</html>
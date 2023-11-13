<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PetHouse</title>
    <link rel="icon" href="<?= $base_url ?>/path/to/favicon.ico" type="image/x-icon">
    <link rel="icon" type="image/png" href="<?= $base_url ?>/template/assets_user/image/logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= $base_url ?>/template/assets_user/css/style.css">
</head>

<body>
    <header>
        <div class="container-header">
            <nav class="navbar navbar-expand-lg p-0">
                <div class="container-fluid">
                    <a class="navbar-brand " href="<?= $base_url ?>/page/home"><img src="<?= $base_url ?>/template/assets_user/image/logo.png" alt="" class="w-25 h-25"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <form class="d-flex " role="search" style="width: 450px; " method="post" action="<?= $base_url ?>/product/search">
                            <input class="form-control w-100" name="keyword" style="border-top-left-radius: 20px;border-bottom-left-radius: 20px;border-top-right-radius: 0px; border-bottom-right-radius: 0px; border: 1.5px solid #fcb000;" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit" name="submit" style="border-top-right-radius: 20px; border-bottom-right-radius: 20px; border-top-left-radius: 0;border-bottom-left-radius: 0; border: 1.5px solid #fcb000;" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </form>
                    </div>
                    <nav class="navbar navbar-expand-lg ">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="#"><i class="fa-solid fa-cart-shopping" style="font-size: 24px;"></i></a>
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
                                                <li><a class="dropdown-item active" href="#">Thông Tin</a></li>
                                                <li><a class="dropdown-item" href="#">Lịch Sử</a></li>
                                                <?php if ($_SESSION['user']['Quyen'] == 1) : ?>
                                                    <li><a class="dropdown-item" href="<?=$base_url?>/admin/dashboard">Trang Quản Trị</a></li>
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
            <ul class="nav nav-underline justify-content-center h-90 p-sm-2" style="background-color: #fcb000; font-size: 20px; font-weight: 600;">
                <li class="nav-item">
                    <a class="nav-link active " aria-current="page" href="<?= $base_url ?>/page/home" style="color: #212529;">Trang Chủ</a>
                </li>
                <li class="nav-item dropdown pt-2 d-flex">
                    <a href="<?= $base_url ?>/product/product-total">Sản Phẩm</a>
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
                        <a href="<?= $base_url ?>/product/service-total">Dịch Vụ</a>
                    </p>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color: #212529;">Giới Thiệu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color: #212529;">Tin Tức</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color: #212529;">Liên Hệ</a>
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
            <div class="row">
                <div class="col-4 ">
                    <div>
                        <h5>Hỗ Trợ Khách Hàng </h5>
                        <span class="mt-4">
                            Tổng Đài CSKH: 0999999009(24/24)
                        </span>
                        <p style="font-size: 12px;">Hỗ trợ quý khách một cách tốt nhất</p>
                    </div>
                    <div style="margin: 20px 0;">
                        <h5>Chi Nhánh 1</h5>
                        <span>
                            Thanh Xuân, Hà Nội
                        </span>
                    </div>
                    <div>
                        <h5>Chi Nhánh 2</h5>
                        <span>
                            Quận 12,TP.HCM
                        </span>
                    </div>
                </div>
                <div class="col-2">
                    <h5>Góc Hỗ Trợ</h5>
                    <div class="mt-4">
                        <a href="#" style="text-decoration: none; color: #212529;">Giới Thiệu Về PetHouse</a>
                        <a href="#" style="text-decoration: none; color: #212529;">Hướng Dẫn Mua Hàng</a>
                        <a href="#" style="text-decoration: none; color: #212529;">Liên Hệ Với Chúng Tôi</a>
                        <a href="#" style="text-decoration: none; color: #212529;">Ưu Đãi Khi Mua Hàng</a>
                    </div>
                </div>
                <div class="col-3">
                    <h5>Chính Sách Mua Hàng</h5>
                    <div class="d-block mt-4">
                        <a href="#" style="text-decoration: none; color: #212529;">Chính Sách Bảo Mật</a>
                    </div>
                    <div class="d-block">
                        <a href="#" style="text-decoration: none; color: #212529;">Điều Khoản Sử Dụng</a>
                    </div>
                    <div class="d-block">
                        <a href="#" style="text-decoration: none; color: #212529;">Chính Sách Đổi Trả</a>
                    </div>
                    <div class="d-block">
                        <a href="#" style="text-decoration: none; color: #212529;">Đặt Hàng Và Thanh Toán</a>
                    </div>
                </div>
                <div class="col-3">
                    <h5>Mạng Xã Hội</h5>
                    <div class="container text-center">
                        <div class="row mt-4">
                            <div class="col">
                                <a href="#" style="text-decoration: none; color: #212529;"><i class="fa-brands fa-twitter"></i></a>
                            </div>

                            <div class="col">
                                <a href="#" style="text-decoration: none; color: #212529;"><i class="fa-brands fa-facebook"></i></i></a>
                            </div>

                            <div class="col">
                                <a href="#" style="text-decoration: none; color: #212529;"><i class="fa-brands fa-instagram"></i></a>
                            </div>

                            <div class="col">
                                <a href="#" style="text-decoration: none; color: #212529;"><i class="fa-brands fa-youtube"></i></a>
                            </div>

                            <div class="col">
                                <a href="#" style="text-decoration: none; color: #212529;"><i class="fa-solid fa-wifi"></i></a>
                            </div>

                        </div>
                    </div>
                    <h5 class="mt-5">Chứng Nhận</h5>
                    <div class="mt-3">
                        <img src="<?= $base_url ?>/template/assets_user/image/chungnhan.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
<script src="<?= $base_url ?>/template/assets_user/javascript/index.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
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
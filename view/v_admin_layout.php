<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= $base_url ?>/template/assets_admin/css/admin.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js">
    <title>Dashboard</title>
</head>

<body>
    <section id="header">
        <a href="admin.html"><img src="<?= $base_url ?>/template/assets_admin/image/logopethouse.png" class="logo" alt=""></a>
        <span style="font-size: 16px;">PetHouse </span>

        <div>
            <ul id="navbar-contents">
                <li class="icons"><a href="#"><i class="fa-solid fa-magnifying-glass"></i></a></li>
                <li class="icons"><a href="#"><i class="fa-solid fa-bell"></i></a></li>
                <li class="icons"><a href="#"><i class="fa-solid fa-envelope"></i></a></li>
            </ul>
        </div>
        <div class="vertical-line"></div>
        <div id="user">
            <div class="btn-group">
                <?php if (!isset($_SESSION['user'])) : ?>
                    <a href="<?= $base_url ?>/user/login"><i class="fa-solid fa-user-tie" style="font-size: 24px; margin-right:10px;"></i></a>
                <?php else : ?>
                    <button class="btn dropdown-toggle border-0" data-bs-toggle="dropdown" aria-expanded="false">
                        <span><?= $_SESSION['user']['HoTen'] ?></span>
                        <img src="<?= $base_url ?>/template/assets_user/image/<?= $_SESSION['user']['HinhAnh'] ?>" style="border-radius: 50%; object-fit:cover;" width="35px" height="35px" alt="">

                    </button>
                    <ul class="dropdown-menu end-0" style="left:auto">
                        <li><a class="dropdown-item" href="#">Thông Tin</a></li>
                        <li><a class="dropdown-item" href="#">Lịch Sử</a></li>
                        <?php if ($_SESSION['user']['Quyen'] == 1) : ?>
                            <li><a class="dropdown-item" href="<?= $base_url ?>/page/home">Trang Chủ</a></li>
                        <?php endif; ?>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="<?= $base_url ?>/user/logout">Đăng Xuất</a></li>
                    </ul>
                <?php endif; ?>
            </div>

        </div>
    </section>
    <section id="category">

        <div id="menu">
            <div class="menuno1 collapse collapse-horizontal show" id="openMenu">
                <strong class=" d-block p-3 text-white" style="margin: 20px 30px;">Trang Quản Lý</strong>
                <div class="thanhmenu" style="<?= (strpos($view_name, 'dashboard')) ? 'background-color: #2e363f;' : '' ?>">
                    <div class="total-menu d-flex" style="background-color: #48525a;width: 300px; padding: 15px 0 15px 50px;">
                        <i class="fa-solid fa-gauge" style="font-size: 20px; margin-right: 20px;margin-top: 2px;"></i>
                        <a href="<?= $base_url ?>/admin/dashboard" class="list-group-item list-group-item-action active" aria-current="true">
                            Dashboard
                        </a>
                    </div>

                </div>
                <div class="thanhmenu " style="<?= (strpos($view_name, 'user')) ? 'background-color: #2e363f;' : '' ?>">
                    <div class="total-menu d-flex" style=" width: 300px; padding: 15px 0 15px 50px;">
                        <i class="fa-solid fa-user-pen" style="font-size: 20px; margin-right: 20px;margin-top: 2px;"></i>
                        <a href="<?= $base_url ?>/admin/user" class="list-group-item list-group-item-action active" aria-current="true">
                            Quản Lý Tài Khoản
                        </a>
                    </div>

                </div>
                <div class="thanhmenu " style="background-color: #2e363f;">
                    <div class="total-menu d-flex" style="width: 300px; padding: 15px 0 15px 50px;">
                        <i class="fa-solid fa-arrow-down-1-9" style="font-size: 20px; margin-right: 20px;margin-top: 2px;"></i>
                        <a href="<?= $base_url ?>/admin/product" class="list-group-item list-group-item-action active" aria-current="true">
                            Quản Lý Sản Phẩm
                        </a>
                    </div>

                </div>
                <div class="thanhmenu " style="background-color: #2e363f;">
                    <div class="total-menu d-flex" style="width: 300px; padding: 15px 0 15px 50px;">
                        <i class="fa-solid fa-layer-group" style="font-size: 20px; margin-right: 20px;margin-top: 2px;"></i>
                        <a href="<?= $base_url ?>/admin/categories" class="list-group-item list-group-item-action active" aria-current="true">
                            Quản Lý Danh Mục
                        </a>
                    </div>

                </div>
                <div class="thanhmenu " style="background-color: #2e363f;">
                    <div class="total-menu d-flex" style="width: 300px; padding: 15px 0 15px 50px;">
                        <i class="fa-solid fa-layer-group" style="font-size: 20px; margin-right: 20px;margin-top: 2px;"></i>
                        <a href="<?= $base_url ?>/admin/categoriespost" class="list-group-item list-group-item-action active" aria-current="true">
                            Quản Lý Loại Bài Viết
                        </a>
                    </div>

                </div>
                <div class="thanhmenu " style="background-color: #2e363f;">
                    <div class="total-menu d-flex" style="width: 300px; padding: 15px 0 15px 50px;">
                        <i class="fa-solid fa-blog" style="font-size: 20px; margin-right: 20px;margin-top: 2px;"></i>
                        <a href="<?= $base_url ?>/admin/post" class="list-group-item list-group-item-action active" aria-current="true">
                            Quản Lý Bài Viết
                        </a>
                    </div>

                </div>
                <div class="thanhmenu " style="background-color: #2e363f;">
                    <div class="total-menu d-flex" style="width: 300px; padding: 15px 0 15px 50px;">
                        <i class="fa-solid fa-comment" style="font-size: 20px; margin-right: 20px;margin-top: 2px;"></i>
                        <a href="<?= $base_url ?>/admin/comment" class="list-group-item list-group-item-action active" aria-current="true">
                            Quản Lý Bình Luận
                        </a>
                    </div>

                </div>
                <div class="thanhmenu " style="background-color: #2e363f;">
                    <div class="total-menu d-flex" style="width: 300px; padding: 15px 0 15px 50px;">
                        <i class="fa-solid fa-file-pen" style="font-size: 20px; margin-right: 20px;margin-top: 2px;"></i>
                        <a href="<?= $base_url ?>/admin/order" class="list-group-item list-group-item-action active" aria-current="true">
                            Quản Lý Đơn Hàng
                        </a>
                    </div>

                </div>
                <Br></Br>
                <div class="thanhmenu " style="background-color: #2e363f;">
                    <div class="total-menu d-flex" style="width: 300px; padding: 15px 0 15px 50px;">
                        <i class="fa-solid fa-gear" style="font-size: 20px; margin-right: 20px;margin-top: 2px;"></i>
                        <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                            Cài Đặt
                        </a>
                    </div>
                </div>
            </div>
        </div>
   
    <main>
        <?php include_once 'view/v_' . $view_name . '.php'; ?>
        <!-- <div class="footer">
                <div class="mac">
                    <h4>© 2021</h4>
                </div>
                
            </div> -->
        <!-- </div> -->
    </main>
    </section>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</html>
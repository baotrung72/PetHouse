<?php
// gửi nhận dữ liệu thông qua model
// hiển thị dữ liệu thông qua view

if (isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'home':
            //lấy dữ liệu từ model
            include_once 'model/m_products.php';
            include_once 'model/m_comment.php';
            include_once 'model/m_posts.php';

            $newproducts = getNew_products(); // lấy ra các sp mới
            $reptileproducts = getReptile_products(); // lấy ra các splà bò sát

            $dsServices = get_services(); // lấy ra các dịch vụ
            $dsToolFoods = getToolFood_products(); // lấy ra thức ăn và đò dùng

            $dsComments = getStand_comments(); //lấy comment nổi bật

            $dsPosts = getStand_posts(); // lấy bài viết nổi bật
            // hiển thị dữ liệu ra view
            $view_name = 'page_home';
            break;
        case 'contact':
            $view_name = 'page_contact';
            break;
        case 'about':
            $view_name = 'page_about';
            break;
        case 'posts':
            $view_name = 'page_post';
            break;
        case 'cart':
            include_once 'model/m_products.php';
            include_once 'model/m_cart.php';
            $MaKH = $_SESSION['user']['MaKH'];
            $checkcart = checkCart($MaKH);
            if ($checkcart) {
                $Cart = getCart($MaKH);
            } else {
                $Cart = [];
            }
            $TongTien = 0;
            $view_name = 'page_cart';
            break;
        case 'addToCart':
            include_once 'model/m_products.php';
            include_once 'model/m_cart.php';

            if (!isset($_SESSION['user'])) {
                $_SESSION['error'] = 'Bạn Chưa Đăng Nhập';
                header("Location: " . $base_url . "user/login");
                return;
            }
            //lấy dữ liệu
            $MaKH = $_SESSION['user']['MaKH'];
            $MaSP = $_GET['id'];
            // $SoLuong;
            // $Gia;
            // kiểm tra có giỏ hàng hay chưa
            $kq = checkCart($MaKH);
            if ($kq) {
                // Đơn hàng đã tồn tại, lấy MaDH
                $MaDH = $kq['MaDH'];
                // Kiểm tra xem sản phẩm đã có trong giỏ hàng chưa
                $productInCart = checkProductInCart($MaDH, $MaSP);
                if (!$productInCart) {
                    // Sản phẩm chưa có trong giỏ hàng, thêm mới
                    addToCart($MaSP, $MaDH, 'gio-hang');
                }
            } else {
                // Đơn hàng chưa tồn tại, tạo mới
                $MaDH = checkCart($MaKH);
                addToCart($MaSP, $MaDH, 'gio-hang');
            }
            $_SESSION['success'] = "Thêm Thành Công Sản Phẩm Vào Giỏ Hàng";

            header("Location: " . $base_url . "/page/cart");
            break;
        case 'updateCart':
            include_once 'model/m_products.php';
            include_once 'model/m_cart.php';

            if (!isset($_SESSION['user'])) {
                $_SESSION['error'] = 'Bạn Chưa Đăng Nhập';
                header("Location: " . $base_url . "user/login");
                return;
            }
            if(isset($_POST['submit'])){
                $MaKH = $_SESSION['user']['MaKH'];
                $MaSP = $_POST['MaSP']; 
                $MaDH = $_POST['MaDH'];
                
                $kq = checkCart($MaKH);
                if ($kq) {
                    // Đơn hàng đã tồn tại, lấy MaDH
                    $MaDH = $kq['MaDH'];
                    // Kiểm tra xem sản phẩm đã có trong giỏ hàng chưa
                    $productInCart = checkProductInCart($MaDH, $MaSP);
                    if ($productInCart) {
                        // Sản phẩm đã có trong giỏ hàng, cập nhật số lượng
                        $SoLuong = $_POST['SoLuong'];
                        $Gia = $_POST['Gia']; 
                        $TrangThai = 'gio-hang';  
                        $TongTien = $SoLuong * $Gia;  
                        updateQuantityInCart($MaSP, $MaDH, $SoLuong, $Gia, $TrangThai, $TongTien);
                    }
                }
            }


            $_SESSION['success'] = "Cập Nhật Giỏ Hàng Thành Công";

            header("Location: " . $base_url . "/page/cart");
            break;
        case 'delete-cart':
            include_once 'model/m_cart.php';
            $MaKH = $_SESSION['user']['MaKH'];
            $MaSP = $_GET['id'];
            $kq = checkCart($MaKH);
            if ($kq) {
                removePCart($kq['MaDH'], $MaSP);
            }

            header("Location: " . $base_url . "/page/cart");

            break;
        case 'payment':
            include_once 'model/m_cart.php';
            include_once 'model/m_products.php';
            $Cart = [];
            $TongTien= 0;

            $view_name = 'page_payment';
            break;
        case 'thanks':

            $view_name = 'page_thanks';
            break;
        default:
            # code...
            break;
    }
    include_once 'view/v_user_layout.php';
}

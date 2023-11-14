<?php
// gửi nhận duữ liệu thông qua model 
// hiển thị dữ liệu thông qua view
if (isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'dashboard':
            //lấy dữ liệu

            //hiển thị dữ liệu 
            $view_name = 'admin_dashboard';
            break;
        case 'user':
            //lấy dữ liệu
            include_once 'model/m_user.php';
            $listKhachHang = getAll_users();

            //hiển thị dữ liệu 
            $view_name = 'admin_user';
            break;
        case 'user-add':
            //lấy dữ liệu
            include_once 'model/m_user.php';
            if (isset($_POST['submit'])) {
                $Email = $_POST['Email'];
                $HoTen = $_POST['HoTen'];
                $MatKhau = $_POST['MatKhau'];
                $Quyen = $_POST['Quyen'];
                $checkEmail = user_checkEmail($Email);

                if ($checkEmail) {
                    $_SESSION['error'] = "Email đã được đăng ký vui lòng thử lại!";
                } else {
                    $HinhAnh = 'default-avtuser.png';
                    user_addNew($HoTen, $Email, $MatKhau, $Quyen, $HinhAnh);
                    $_SESSION['success'] = "Thêm Tài Khoản Thành Công";
                    header("Location: " . $base_url . "/admin/user");
                }
            }
            //hiển thị dữ liệu 
            $view_name = 'admin_user_add';
            break;
        case 'user-edit':
            //lấy dữ liệu
            include_once 'model/m_user.php';
            $MaKH = $_GET['id'];
            if (isset($_POST['submit'])) {
                $HoTen = $_POST['HoTen'];
                $Email = $_POST['Email'];
                $MatKhau = $_POST['MatKhau'];
                $Quyen = $_POST['Quyen'];
                user_edit($MaKH, $HoTen, $Email, $MatKhau, $Quyen);
                $_SESSION['success'] = "Cập Nhật Tài Khoản Thành Công";
                header("Location: " . $base_url . "/admin/user");
            }
            $kh = user_getById($MaKH);
            //hiển thị dữ liệu 
            $view_name = 'admin_user_edit';
            break;
        case 'user-delete':
            //lấy dữ liệu
            include_once 'model/m_user.php';
            user_delete($_GET['id']);
            $_SESSION['success'] = "Xóa Tài Khoản Thành Công!";

            header("Location: " . $base_url . "/admin/user");
            //hiển thị dữ liệu 
            break;
        case 'product':
            include_once 'model/m_products.php';
            //lay du lieu
            $ListProduct = getAll_productService();
            // $page = 1;
            // if(isset($_GET['page'])){
            //     $page = $_GET['page'];
            // }

            // hien thi du lieu
            $view_name = 'admin_product';
            break;
        case 'product-add':
            include_once 'model/m_products.php';
            //lay du lieu
            if (isset($_POST['submit'])) {
                $MaDM = $_POST['MaDM'];
                $TenSP = $_POST['TenSP'];
                $Gia = $_POST['Gia'];
                $GiaKM = $_POST['GiaKM'];
                $Hinh = $_FILES['Hinh']['name'];
                $MoTa = $_POST['MoTa'];
                $NoiBat = $_POST['NoiBat'];
                $hinhdang = $_POST['hinhdang'];
                $TrangThai = $_POST['TrangThai'];
                $SoLuong = $_POST['SoLuong'];

                // Thêm mã xử lý upload ảnh
                if ($_FILES['Hinh']['error'] == 0) {
                    $uploadDirectory = 'template/assets_user/image/';
                    $targetImagePath = $uploadDirectory . basename($_FILES['Hinh']['name']);

                    // Di chuyển tệp ảnh đến thư mục đích
                    if (move_uploaded_file($_FILES['Hinh']['tmp_name'], $targetImagePath)) {
                        Product_addNew($MaDM, $TenSP, $Gia, $GiaKM, $Hinh, $MoTa, $NoiBat, $TrangThai, $hinhdang, $SoLuong);
                    } else {
                        echo 'Có lỗi khi upload ảnh.';
                    }
                } else {
                    echo 'Không có tệp ảnh được chọn hoặc có lỗi khi upload.';
                }
                header("Location: " . $base_url . "/admin/product");
            }

            // hien thi du lieu
            $view_name = 'admin_product_add';
            break;
        case 'product-edit':
            include_once 'model/m_products.php';
            // lấy dữ liệu
            $MaSP = $_GET['id'];
            $sp = product_getByMaSP($MaSP);

            if (isset($_POST['submit'])) {
                $MaDM = $_POST['MaDM'];
                $TenSP = $_POST['TenSP'];
                $Gia = $_POST['Gia'];
                $GiaKM = $_POST['GiaKM'];
                $Hinh; 
                $MoTa = $_POST['MoTa'];
                $NoiBat = $_POST['NoiBat'];
                $hinhdang = $_POST['hinhdang'];
                $TrangThai = $_POST['TrangThai'];
                $SoLuong = $_POST['SoLuong'];

                // Kiểm tra nếu người dùng chọn ảnh mới
                if ($_FILES['Hinh']['error'] == 0) {
                    $uploadDirectory = 'template/assets_user/image/';
                    $targetImagePath = $uploadDirectory . basename($_FILES['Hinh']['name']);

                    // Di chuyển tệp ảnh đến thư mục đích
                    if (move_uploaded_file($_FILES['Hinh']['tmp_name'], $targetImagePath)) {
                        $Hinh = $_FILES['Hinh']['name'];  // Gán tên ảnh mới
                    }
                } else {
                    $Hinh = $sp['Hinh']; 
                     // Nếu không có ảnh mới, sử dụng ảnh cũ
                }

                product_edit($MaSP, $MaDM, $TenSP, $Gia, $GiaKM, $Hinh, $MoTa, $NoiBat, $TrangThai, $hinhdang, $SoLuong);
                header("Location: " . $base_url . "/admin/product");
                $_SESSION['success'] = 'Cập Nhật Thành Công Sản Phẩm!';
                $_SESSION['error'] = "Có Lỗi xảy ra vui lòng thử lại!";

            }
            $view_name = 'admin_product_edit';
            break;
        default:
            break;
    }
    include_once 'view/v_admin_layout.php';
}

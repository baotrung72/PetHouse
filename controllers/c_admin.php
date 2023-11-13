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
        default:
            break;
    }
    include_once 'view/v_admin_layout.php';
}

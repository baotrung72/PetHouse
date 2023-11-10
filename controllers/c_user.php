<?php
// gửi nhận dữ liệu thông qua model
// hiển thị dữ liệu thông qua view

if (isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'login':
            //lấy dữ liệu từ model
            include_once 'model/m_user.php';
            if (isset($_POST['Email']) && isset($_POST['MatKhau'])) {
                $ketqua = user_login($_POST['Email'], $_POST['MatKhau']);
                if ($ketqua) {
                    // nếu kết quả đúng -> đăng nhập thành công
                    $_SESSION['user'] = $ketqua; // lưu lại kết quả
                    header("Location: " . $base_url . "/page/home");
                } else {
                    $_SESSION['error'] = "Email hoặc Mật Khẩu không đúng! Vui lòng thử lại.";
                }
            }
            // hiển thị dữ liệu ra view
            $view_name = 'user_login';
            break;
        case 'logout':
            unset($_SESSION['user']);
            header("Location: " . $base_url . "/page/home");
            break;
        default:
            # code...
            break;
    }
    include_once 'view/v_user_layout.php';
}

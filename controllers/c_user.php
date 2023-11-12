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
        case 'signup':
            //lấy dữ liệu từ model
            include_once 'model/m_user.php';
            if(isset($_POST['submit'])){
                $HoTen = $_POST['HoTen'];
                $MatKhau = $_POST['MatKhau'];
                $Email = $_POST['Email'];
                $checkEmail = user_checkEmail($Email);
                if($checkEmail){
                    //bị trùng email -> tạo mới không thành công -> thông báo lỗi
                    $_SESSION['error'] = 'Email đã tồn tại vui lòng thử lại!';
                }else{
                    // k trùng email -> có thể tạo mới
                    $HinhAnh = 'default-avtuser.png';
                    user_signUp($HoTen, $Email, $MatKhau, $HinhAnh);
                    $_SESSION['success'] = 'Tạo Mới thành công. Bạn đã có thể đăng nhập!';
                    header("Location: " . $base_url . "/user/login");

                }
            }
            
            // hiển thị dữ liệu ra view
            $view_name = 'user_signup';
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

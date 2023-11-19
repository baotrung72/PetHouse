<?php
// gửi nhận duữ liệu thông qua model 
// hiển thị dữ liệu thông qua view
if (isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'dashboard':
            //lấy dữ liệu
            include_once 'model/m_user.php';
            $countUsers = user_countStatus();
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
            break;
        case 'product':
            include_once 'model/m_products.php';
            //lay du lieu
            $ListProduct = getAll_productService();
            
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
                $_SESSION['success'] = "Thêm sản Phẩm Thành Công!";

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
        case 'product-delete':
            include_once 'model/m_products.php';
            //lấy dữ liệu
            product_delete($_GET['id']);
            $_SESSION['success'] = 'Xóa thành công sản phẩm!';
            header("Location: " . $base_url . "/admin/product");

            break;
        case 'post':
            include_once 'model/m_posts.php';
            //lấy dữ liệu
            $listPost = getAll_posts();
            //hiển thị dữ liệu
            $view_name = 'admin_post';
            break;
        case 'post-add':
            include_once 'model/m_posts.php';
            //lấy dữ liệu
            if (isset($_POST['submit'])) {
                $TieuDe = $_POST['TieuDe'];
                $NoiDung = $_POST['NoiDung'];
                $TrangThai = $_POST['TrangThai'];
                $NoiBat = $_POST['NoiBat'];
                $Hinh = $_FILES['Hinh']['name'];
                

                // Thêm mã xử lý upload ảnh
                if ($_FILES['Hinh']['error'] == 0) {
                    $uploadDirectory = 'template/assets_user/image/';
                    $targetImagePath = $uploadDirectory . basename($_FILES['Hinh']['name']);

                    // Di chuyển tệp ảnh đến thư mục đích
                    if (move_uploaded_file($_FILES['Hinh']['tmp_name'], $targetImagePath)) {
                        Post_addNew($TieuDe, $NoiDung, $TrangThai, $NoiBat, $Hinh);
                    } else {
                        echo 'Có lỗi khi upload ảnh.';
                    }
                } else {
                    echo 'Không có tệp ảnh được chọn hoặc có lỗi khi upload.';
                }
                header("Location: " . $base_url . "/admin/post");
                $_SESSION['success'] = "Thêm Bài Viết Thành Công!";

            }


            //hiển thị dữ liệu
            $view_name = 'admin_post_add';
            break;
        case 'post-edit':
            include_once 'model/m_posts.php';
            //lấy dữ liệu
            $MaBV = $_GET['id'];
            $post = Post_getById($MaBV);

            if (isset($_POST['submit'])) {
                $TieuDe = $_POST['TieuDe'];
                $NoiDung = $_POST['NoiDung'];
                $TrangThai = $_POST['TrangThai'];
                $NoiBat = $_POST['NoiBat'];
                $Hinh;
                

                // Thêm mã xử lý upload ảnh
                // Kiểm tra nếu người dùng chọn ảnh mới
                if ($_FILES['Hinh']['error'] == 0) {
                    $uploadDirectory = 'template/assets_user/image/';
                    $targetImagePath = $uploadDirectory . basename($_FILES['Hinh']['name']);

                    // Di chuyển tệp ảnh đến thư mục đích
                    if (move_uploaded_file($_FILES['Hinh']['tmp_name'], $targetImagePath)) {
                        $Hinh = $_FILES['Hinh']['name'];  // Gán tên ảnh mới
                    }
                } else {
                    $Hinh = $post['Hinh'];
                    // Nếu không có ảnh mới, sử dụng ảnh cũ
                }
                Post_edit($MaBV, $TieuDe, $NoiDung, $TrangThai, $NoiBat, $Hinh);
                header("Location: " . $base_url . "/admin/post");
                $_SESSION['success'] = "Cập Nhật Bài Viết Thành Công!";

            }


            //hiển thị dữ liệu
            $view_name = 'admin_post_edit';
            break;
        case 'post-delete':
            include_once 'model/m_posts.php';
            Post_delete($_GET['id']);

            $_SESSION['success'] = "Xóa Bài Viết Thành Công!";
            header("Location: " . $base_url . "/admin/post");
            break;
        case 'comment':
            include_once 'model/m_comment.php';
            //lấy dữ liệu
            $listCmt = getAll_cmtWKh();
            //hiển thị dữ liệu
            $view_name = 'admin_comment';
            break;
        case 'comment-delete':
            include_once 'model/m_comment.php';
            //lấy dữ liệu
            comment_delete($_GET['id']);
            $_SESSION['success'] = "Xóa Bình Luận Thành Công!";
            header("Location: " . $base_url . "/admin/comment");
            break;
        case 'categories':
                //lấy dữ liệu
                include_once 'model/m_categories.php';
                $listCategories = getAll_categoris();
    
                //hiển thị dữ liệu 
                $view_name = 'admin_categories';
                break;
        case 'categories-add':
                include_once 'model/m_categories.php';
                if (isset($_POST['submit'])) {
                    // Lấy giá trị từ form
                    $TenDM = $_POST['TenDM'];
                    $ThuTu = $_POST['ThuTu'];
                    $TrangThai = $_POST['TrangThai'];
                    $Hinhanh = $_FILES['Hinhanh']['name'];
                
                    // Kiểm tra tên danh mục đã tồn tại hay chưa
                    $checkName = categories_checkName($TenDM);
                    if ($checkName) {
                        $_SESSION['error'] = "Tên danh mục đã được tạo!";
                    } else {
                        // Kiểm tra lỗi khi upload ảnh
                        if ($_FILES['Hinhanh']['error'] == 0) {
                            $uploadDirectory = 'template/assets_user/image/';
                            $targetImagePath = $uploadDirectory . basename($_FILES['Hinhanh']['name']);
                
                            // Di chuyển tệp ảnh đến thư mục đích
                            if (move_uploaded_file($_FILES['Hinhanh']['tmp_name'], $targetImagePath)) {
                                // Thêm mới danh mục vào cơ sở dữ liệu
                                categories_addNew($TenDM, $ThuTu, $TrangThai, $Hinhanh);
                                $_SESSION['success'] = "Thêm Danh Mục Thành Công";
                                header("Location: " . $base_url . "/admin/categories");
                                exit(); // Dừng script sau khi chuyển hướng
                            } else {
                                $_SESSION['error'] = 'Có lỗi khi upload ảnh.';
                            }
                        } else {
                            $_SESSION['error'] = 'Không có tệp ảnh được chọn hoặc có lỗi khi upload.';
                        }
                    }
                }
                //hiển thị dữ liệu
                $view_name = 'admin_categories_add';
                break;
        case 'categories-edit':
                include_once 'model/m_categories.php';
                $MaDM = $_GET['id'];
                $dm = getbyId_category($MaDM);
                if (isset($_POST['submit'])) {
                    $TenDM = $_POST['TenDM'];
                    $ThuTu = $_POST['ThuTu'];
                    $TrangThai = $_POST['TrangThai'];
                    $Hinhanh;
                    if ($_FILES['Hinhanh']['error'] == 0) {
                        $uploadDirectory = 'template/assets_user/image/';
                        $targetImagePath = $uploadDirectory . basename($_FILES['Hinhanh']['name']);
    
                        // Di chuyển tệp ảnh đến thư mục đích
                        if (move_uploaded_file($_FILES['Hinhanh']['tmp_name'], $targetImagePath)) {
                            $Hinh = $_FILES['Hinhanh']['name'];  // Gán tên ảnh mới
                        }
                    } else {
                        $Hinhanh = $dm['Hinhanh'];
                        // Nếu không có ảnh mới, sử dụng ảnh cũ
                    }
                    categories_edit($MaDM, $TenDM, $ThuTu, $TrangThai);
                    header("Location: " . $base_url . "/admin/categories");
                    $_SESSION['success'] = 'Cập Nhật Thành Công Danh Mục!';
                }
                //hiển thị dữ liệu
                $view_name = 'admin_categories_edit';
                break;
            case 'categories_delete':
                    include_once 'model/m_categories.php';
                    categories_delete($_GET['id']);
                    $_SESSION['success'] = "Xóa Danh Mục Thành Công!";
        
                    header("Location: " . $base_url . "/admin/categories");
                    break;
        default:
            break;
    }
    include_once 'view/v_admin_layout.php';
}

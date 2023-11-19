<?php
// gửi nhận dữ liệu thông qua model
// hiển thị dữ liệu thông qua view

if (isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'product-total':
            //lấy dữ liệu từ model
            include_once 'model/m_products.php';
            include_once 'model/m_comment.php';
            include_once 'model/m_categories.php';

            $dsdanhmuc = getAll_categoris(); //lấy ra danh mục

            $newproducts = getThree_products(); // lấy ra các sp mới
            $threeproducts = getThree2_products(); // lấy ra các sp mới
            $getFashion = getFashion_Products(); // ;lấy sản phầm là thời trang

            $dsServices = get_services(); // lấy ra các dịch vụ
            $dsToolFoods = getToolFood_products(); // lấy ra thức ăn và đò dùng

            // hiển thị dữ liệu ra view
            $view_name = 'product_total';
            break;
        case 'service-total':
            //lấy dữ liệu từ model
            include_once 'model/m_products.php';
            include_once 'model/m_comment.php';
            $dsAllServices = getAll_service();

            // hiển thị dữ liệu ra view
            $view_name = 'service_total';
            break;
        case 'detail':
            //lấy dữ liệu từ model
            include_once 'model/m_products.php';
            include_once 'model/m_comment.php';
            $detailProduct = product_getById($_GET['id']); // lấy 1 sản phẩm theo id
            $productSimilar = product_getSimilar($detailProduct['MaDM']); // lấy sản phẩm tượng tự theo danh mục 

            $dsComments = get_cmtByProduct($_GET['id']); //lấy comment nổi bật
            // hiển thị dữ liệu ra view
            $view_name = 'product_details';
            break;
        case 'search':
            //lấy dữ liệu từ model
            include_once 'model/m_products.php';
            if (isset($_POST['keyword'])) {
                header("Location: " . $base_url . "/product/search&keyword=" . $_POST['keyword']);
            }
            $ketQuaTimKiem = product_search($_GET['keyword']);

            // hiển thị dữ liệu ra view
            $view_name = 'product_search';
            break;
        case 'comment':
            //lấy dữ liệu từ model
            include_once 'model/m_comment.php';
            include_once 'model/m_products.php';
            comment_add($_SESSION['user']['MaKH'], $_POST['MaSP'], $_POST['NoiDung']);
            header("Location: " . $base_url . "/product/detail&id=" . $_POST['MaSP'] . "");
            break;
        


        default:
            # code...
            break;
    }
    include_once 'view/v_user_layout.php';
}

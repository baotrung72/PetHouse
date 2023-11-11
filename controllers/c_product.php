<?php
// gửi nhận dữ liệu thông qua model
// hiển thị dữ liệu thông qua view

if (isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'detail':
            //lấy dữ liệu từ model
            include_once 'model/m_products.php';
            include_once 'model/m_comment.php';
            $detailProduct = product_getById($_GET['id']);// lấy 1 sản phẩm theo id
            $productSimilar = product_getSimilar($detailProduct['MaDM']); // lấy sản phẩm tượng tự theo danh mục 
            
            $dsComments = getStand_comments(); //lấy comment nổi bật
            // hiển thị dữ liệu ra view
            $view_name = 'product_details';
            break;
        default:
            # code...
            break;
    }
    include_once 'view/v_user_layout.php';
}

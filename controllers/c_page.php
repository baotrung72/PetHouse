<?php
    // gửi nhận dữ liệu thông qua model
    // hiển thị dữ liệu thông qua view

    if(isset($_GET['act'])){
        switch ($_GET['act']){ 
            case 'home':
                //lấy dữ liệu từ model
                include_once 'model/m_categories.php';
                include_once 'model/m_products.php';
                
                $dsdanhmuc = getAll_categoris(); // lấy ra danh mục sản phẩm
                $dsdichvu = getAll_service();
                
                $newproducts = getNew_products();// lấy ra các sp mới
                $reptileproducts = getReptile_products();// lấy ra các splà bò sát
                // hiển thị dữ liệu ra view
                $view_name = 'page_home';
                break;
            
            default:
                # code...
                break;
        }
        include_once 'view/v_user_layout.php';
    }
?>
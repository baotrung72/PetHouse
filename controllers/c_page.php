<?php
    // gửi nhận dữ liệu thông qua model
    // hiển thị dữ liệu thông qua view

    if(isset($_GET['act'])){
        switch ($_GET['act']){ 
            case 'home':
                //lấy dữ liệu từ model
                include_once 'model/m_categories.php';
                include_once 'model/m_products.php';
                include_once 'model/m_comment.php';
                include_once 'model/m_posts.php';
                
                $dsdanhmuc = getAll_categoris(); // lấy ra danh mục sản phẩm
                $dsloaidv = getAll_cateService();
                
                $newproducts = getNew_products();// lấy ra các sp mới
                $reptileproducts = getReptile_products();// lấy ra các splà bò sát

                $dsServices = get_services(); // lấy ra các dịch vụ
                $dsToolFoods = getToolFood_products(); // lấy ra thức ăn và đò dùng

                $dsComments = getStand_comments(); //lấy comment nổi bật

                $dsPosts = getStand_posts(); // lấy bài viết nổi bật
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
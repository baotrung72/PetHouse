<?php
    // gửi nhận dữ liệu thông qua model
    // hiển thị dữ liệu thông qua view

    if(isset($_GET['act'])){
        switch ($_GET['act']){ 
            case 'news':
                include_once 'model/m_news.php';
                $allNews= news_getNew();
                $view_name = 'page_news';
                break;
            case 'detail':
                include_once 'model/m_news.php';
                $ctBaiViet= news_getById($_GET['id']);
                $view_name = 'news_detail';
                break;
            default:
                # code...
                break;
        }
        include_once 'view/v_user_layout.php';
    }
?>
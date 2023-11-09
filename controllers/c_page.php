<?php
    // gửi nhận dữ liệu thông qua model
    // hiển thị dữ liệu thông qua view

    if(isset($_GET['act'])){
        switch ($_GET['act']){ 
            case 'home':
                //lấy dữ liệu từ model
                
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
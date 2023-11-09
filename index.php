<?php
    //Điều hướng đến các controllers
    include_once 'config.php';

    if(isset($_GET['mod'])){
        switch ($_GET['mod']) {
            case 'page':
                $ctrl_name = 'page';
                break;
            
            default:
                # code...
                break;
        }
        include_once 'controllers/c_'.$ctrl_name.'.php';
    }else{
        //điều hướng về trang chủ
        header('Location: page/home');
    }
?>
<?php
//Điều hướng đến các controllers
include_once 'config.php';
include_once 'model/m_categories.php';
$dsdanhmuc = getAll_categoris(); // lấy ra danh mục sản phẩm
$dsloaidv = getAll_cateService();

if (isset($_GET['mod'])) {
    switch ($_GET['mod']) {
        case 'page':
            $ctrl_name = 'page';
            break;
        case 'user':
            $ctrl_name = 'user';
            break;
        case 'product':
            $ctrl_name = 'product';
            break;
        case 'category':
            $ctrl_name = 'category';
            break;

        default:
            # code...
            break;
    }
    include_once 'controllers/c_'.$ctrl_name.'.php';
} else {
    //điều hướng về trang chủ
    header('Location: page/home');
}

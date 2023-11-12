<?php 
    include_once 'model/m_pdo.php';
    // thực hiện các câu truy vấn
    function getNew_products(){
        return pdo_query("SELECT * FROM sanpham WHERE MaDM IN (1,2) ORDER BY ngaydang DESC LIMIT 4");
    }
    function getThree_products(){
        return pdo_query("SELECT DISTINCT * FROM sanpham WHERE MaDM IN (1,2) ORDER BY ngaydang DESC LIMIT 3");
    }
    function getThree2_products(){
        return pdo_query("SELECT DISTINCT * FROM sanpham WHERE MaDM IN (1,2)  LIMIT 3");
    }
    function getReptile_products(){
        return pdo_query("SELECT * FROM sanpham WHERE MaDM IN (5) Limit 4");
    }
    function getToolFood_products(){
        return pdo_query("(SELECT * FROM `sanpham` WHERE MaDM = 3 ORDER BY MaDM LIMIT 4) UNION ALL (SELECT * FROM `sanpham` WHERE MaDM = 4 ORDER BY MaDM LIMIT 4)");
    }
    // lấy ra một sản phẩm bằng id 
    function product_getById($id){
        return pdo_query_one("SELECT * FROM sanpham s inner join danhmuc dm ON s.MaDM = dm.MaDM WHERE s.MaSP = ?",$id);
    }
    function product_getSimilar($id){
        return pdo_query("SELECT DISTINCT *FROM sanpham where MaDM = $id and $_GET[id] !=$id ORDER BY rand() limit 4");
    }
    function getFashion_Products(){
        return pdo_query("SELECT DISTINCT * FROM sanpham where MaDM in (6)  limit 8");
    }
    
    function prodduct_getbyIdcategory($id){
        return pdo_query("SELECT * FROM sanpham where MaDM = $id");
    }
    function getAll_service(){
        return pdo_query("SELECT* From dichvu WHERE MaLoaiDV = 1");
    }
?>
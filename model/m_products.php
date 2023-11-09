<?php 
    include_once 'model/m_pdo.php';
    // thực hiện các câu truy vấn
    function getNew_products(){
        return pdo_query("SELECT * FROM sanpham WHERE MaDM IN (1,2) ORDER BY ngaydang DESC LIMIT 4");
    }
    function getReptile_products(){
        return pdo_query("SELECT * FROM sanpham WHERE MaDM IN (5) Limit 4");
    }
?>
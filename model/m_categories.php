<?php
    include_once 'model/m_pdo.php';
    // thao tác csdl
    function getAll_categoris(){
        return pdo_query("SELECT * FROM danhmuc");
    }
    function getAll_cateService(){
        return pdo_query("SELECT * FROM loaidichvu");
    }
    function get_services(){
        return pdo_query("SELECT * FROM dichvu LIMIT 4");
    }
    function category_getById($id){
        return pdo_query_one("SELECT * FROM dichvu d inner join loaidichvu l ON d.MaLoaiDV = l.MaLoaiDV WHERE d.MaDV = ?",$id);
    }
    function category_getSimilar(){
        return pdo_query("SELECT *FROM dichvu where MaLoaiDV = 1 ORDER BY rand() limit 4");
    }
    function getbyId_category($id){
        return pdo_query_one("SELECT * FROM danhmuc where MaDM = ?", $id);
    }
    
?>
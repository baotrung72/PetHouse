<?php
    include_once 'model/m_pdo.php';
    // thao tác csdl
    function getAll_categoris(){
        return pdo_query("SELECT * FROM danhmuc");
    }
    function getAll_service(){
        return pdo_query("SELECT * FROM loaidichvu");
    }
?>
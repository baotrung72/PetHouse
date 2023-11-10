<?php
    include_once 'model/m_pdo.php';
    //thực thi câu lệnh sql
    function getStand_posts(){
        return pdo_query("SELECT * FROM baiviet WHERE NoiBat = 1");
    }
?>
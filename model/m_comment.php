<?php
    include_once 'model/m_pdo.php';
    //thực thi câu lệnh sql
    function getStand_comments(){
        return pdo_query("SELECT * FROM binhluan bl INNER JOIN khachhang kh ON bl.MaKH = kh.MaKH;");
    }
?>
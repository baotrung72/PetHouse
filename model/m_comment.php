<?php
    include_once 'model/m_pdo.php';
    //thực thi câu lệnh sql
    function getStand_comments(){
        return pdo_query("SELECT * FROM binhluan bl INNER JOIN khachhang kh ON bl.MaKH = kh.MaKH where bl.NoiBat = 1");
    }
    
    function comment_add($MaKH, $MaSP, $NoiDung){
        pdo_execute("INSERT INTO binhluan(`MaKH`,`MaSP`,`NoiDung`) VALUES(?,?,?)",$MaKH,$MaSP,$NoiDung);
    }
    function get_cmtByProduct($MaSP){
        return pdo_query("SELECT * FROM binhLuan bl inner join khachhang kh on bl.MaKH = kh.MaKH WHERE bl.MaSP = ?",$MaSP);
    }
    function comment_addService($MaKH, $MaDV, $NoiDung){
        pdo_execute("INSERT INTO binhluan(`MaKH`,`MaDV`,`NoiDung`) VALUES(?,?,?)",$MaKH,$MaDV, $NoiDung);
    }
    function get_cmtByService($MaDV){
        return pdo_query("SELECT * FROM binhLuan bl inner join khachhang kh on bl.MaKH = kh.MaKH WHERE bl.MaDV = ?",$MaDV);
    }
    function count_cmt($MaSP){
        return pdo_query_value("SELECT COUNT(*) from binhluan where MaSP = ?",$MaSP);
    }
    //admin
    function getAll_cmtWKh(){
        return pdo_query("SELECT  * FROM binhluan");
    }
    function comment_delete($id){
        pdo_execute("DELETE from binhluan where MaBL = ?",$id);
    }
?>
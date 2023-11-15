<?php
    include_once 'model/m_pdo.php';
    //thực thi câu lệnh sql
    function getStand_comments(){
        return pdo_query("SELECT * FROM binhluan bl INNER JOIN khachhang kh ON bl.MaKH = kh.MaKH;");
    }
    function getAll_cmtWKh(){
        return pdo_query("SELECT  * FROM binhluan");
    }
    function comment_delete($id){
        pdo_execute("DELETE from binhluan where MaBL = ?",$id);
    }
    function comment_add($MaKH, $MaSP, $NoiDung){
        return pdo_execute("INSERT INTO binhluan (`MaKH`,`MaSP`,`NoiDung`) VALUES(?,?,?)",$MaKH,$MaSP,$NoiDung);
    }
?>
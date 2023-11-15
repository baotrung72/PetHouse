<?php
    include_once 'model/m_pdo.php';
    //thực thi câu lệnh sql
    function getStand_posts(){
        return pdo_query("SELECT * FROM baiviet WHERE NoiBat = 1");
    }
    // admin 
    function getAll_posts(){
        return pdo_query("SELECT * FROM baiviet");
    }
    function Post_addNew($TieuDe, $NoiDung, $TrangThai, $NoiBat, $Hinh){
        return pdo_execute("INSERT INTO baiviet(`TieuDe`,`NoiDung`,`TrangThai`,`NoiBat`,`Hinh`) values(?,?,?,?,?)", $TieuDe, $NoiDung, $TrangThai, $NoiBat, $Hinh);
    }
    function Post_getById($id){
        return pdo_query_one("SELECT * FROM baiviet WHERE MaBV = ?",$id);
    }
    function Post_edit($MaBV, $TieuDe, $NoiDung, $TrangThai, $NoiBat, $Hinh){
        pdo_execute("UPDATE baiviet set TieuDe = ?, NoiDung = ?, TrangThai = ?, NoiBat = ?, Hinh = ? WHERE MaBV = ?",$TieuDe, $NoiDung, $TrangThai, $NoiBat, $Hinh, $MaBV);
    }   
    function Post_delete($id) {
        pdo_execute("DELETE FROM baiviet WHERE MaBV = ?",$id);
    }
    
?>
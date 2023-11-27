<?php
    include_once 'model/m_pdo.php';
    //thực thi câu lệnh sql
   function news_getNew(){
    return pdo_query("SELECT * FROM baiviet");

   }
   function news_getById($id){
    return pdo_query_one("SELECT * FROM baiviet where MaBV = ?",$id ); 
   }
   function getAll_categorisPost(){
    return pdo_query("SELECT * FROM loaibaiviet where TrangThai = 0");
   }
   // admin
   function catePost_addNew($TenLoaiBV, $ThuTu, $TrangThai){
        return pdo_execute("INSERT INTO loaibaiviet(`TenLoaiBV`,`ThuTu`,`TrangThai`) VALUES(?,?,?)",$TenLoaiBV, $ThuTu, $TrangThai);
   }
   function getCatePost_byId($id){
        return pdo_query_one("SELECT * FROM loaibaiviet where MaLoaiBV = ?",$id);
   }
   function update_catePost($MaLoaiBV, $TenLoaiBV, $ThuTu, $TrangThai){
        pdo_execute("UPDATE loaibaiviet set TenLoaiBV = ?, ThuTu = ?, TrangThai = ? where MaLoaiBV = ?",$TenLoaiBV,$ThuTu, $TrangThai, $MaLoaiBV);
   }
   function delete_catePost($MaLoaiBV){
        pdo_execute("DELETE FROM loaibaiviet where MaLoaiBV = ?",$MaLoaiBV);
   }
?>
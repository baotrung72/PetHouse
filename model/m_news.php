<?php
    include_once 'model/m_pdo.php';
    //thực thi câu lệnh sql
   function news_getNew(){
    return pdo_query("SELECT * FROM baiviet");

   }
   function news_getById($id){
    return pdo_query_one("SELECT * FROM baiviet where MaBV = ?",$id ); 
   }
?>
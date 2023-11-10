<?php
    include_once 'model/m_pdo.php';
    // thao tác với csdl
    function user_login($email, $password){
        return pdo_query_one("SELECT * FROM  khachhang where Email = ? and MatKhau = ?",$email,$password);
    }

?>
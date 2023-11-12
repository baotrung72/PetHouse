<?php
    include_once 'model/m_pdo.php';
    // thao tác với csdl
    function user_login($email, $password){
        return pdo_query_one("SELECT * FROM  khachhang where Email = ? and MatKhau = ?",$email,$password);
    }
    // đăng ký mới
    function user_checkEmail($Email){
        return pdo_query("SELECT * FROM khachhang where Email = ?",$Email);
    }
    function user_signUp($HoTen, $Email, $MatKhau, $HinhAnh){
        return pdo_execute("INSERT INTO khachhang(`HoTen`,`Email`,`MatKhau`, `HinhAnh`) VALUES (?,?,?,?)",$HoTen,$Email,$MatKhau,$HinhAnh);
    }

?>
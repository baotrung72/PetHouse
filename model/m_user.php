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
    function user_getById($MaKH){
        return pdo_query_one("SELECT * from khachhang Where MaKH = ?", $MaKH);
    }
    // admin
    function getAll_users(){
        return pdo_query("SELECT * FROM khachhang");
    }
    function user_addNew($HoTen, $Email, $MatKhau, $Quyen, $HinhAnh){
        return pdo_execute("INSERT INTO khachhang(`HoTen`,`Email`,`MatKhau`,`Quyen`,`HinhAnh`) values (?,?,?,?,?)",$HoTen, $Email, $MatKhau, $Quyen, $HinhAnh);
    }
    function user_edit($MaKH, $HoTen, $Email, $MatKhau, $Quyen){
        pdo_execute("UPDATE khachhang SET HoTen = ?, Email = ?, MatKhau = ?, Quyen = ? WHERE MaKH = ?",  $HoTen, $Email, $MatKhau, $Quyen, $MaKH );
    }
    function user_delete($MaKH){
        pdo_execute("DELETE FROM khachhang WHERE MaKH = ?", $MaKH);
    }

?>
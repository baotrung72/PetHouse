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
    function user_countStatus(){
        return pdo_query_value("SELECT count(*) from khachhang WHERE TrangThai = 1");
    }

    // trang cá nhân
    function getUser_ById($MaKH){
        return pdo_query_one("SELECT * FROM khachhang WHERE MaKH = ?",$MaKH);
    }
    function user_edit_personal($MaKH, $HoTen, $Email, $SoDienThoai, $DiaChi){
        pdo_execute("UPDATE khachhang SET HoTen = ?, Email = ?, SoDienThoai = ?, DiaChi = ? WHERE MaKH = ?",  $HoTen, $Email, $SoDienThoai, $DiaChi, $MaKH );
    }
    function getUser_TopBuy(){
        return pdo_query("SELECT * FROM khachhang kh INNER JOIN donhang dh ON kh.MaKH = dh.MaKH INNER JOIN donhangchitiet ct ON dh.MaDH = ct.MaDH order by TongTien desc limit 5");
    }
    function count_UserNew(){
        return pdo_query_value("SELECT count(*) FROM khachhang where Quyen = 0 ");
    }
?>
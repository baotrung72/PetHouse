<?php
include_once 'model/m_pdo.php';
//thao tác với csdl

function checkCart($MaKH){
    return pdo_query_one("SELECT * FROM donhang where MaKH = ?", $MaKH);
}
function create_cart($MaKH,$MaDH){
    pdo_execute("INSERT INTO donhang(`MaKH`,`MaDH`) values(?,?)",$MaKH,$MaDH);
}
function checkProductInCart($MaDH, $MaSP){
    return pdo_query_one("SELECT * FROM donhangchitiet WHERE MaDH = ? AND MaSP = ?", $MaDH, $MaSP);
}
function addToCart($MaSP, $MaDH){
    pdo_execute("INSERT INTO donhangchitiet(`MaSP`, `MaDH`) VALUES(?, ?)", $MaSP, $MaDH);
}
function updateQuantityInCart($MaSP, $MaDH, $SoLuong,$TrangThai, $TongTien){
    pdo_execute("UPDATE donhangchitiet SET SoLuong = ?,TrangThai = ?, TongTien = ?  WHERE MaSP = ? AND MaDH = ?", $SoLuong, $TrangThai, $TongTien, $MaSP, $MaDH);
}



function getCart($MaKH){
    return pdo_query("SELECT dh.*, dhct.*, sp.*
    FROM donhang dh
    INNER JOIN donhangchitiet dhct ON dh.MaDH = dhct.MaDH
    INNER JOIN sanpham sp ON dhct.MaSP = sp.MaSP
    WHERE dh.MaKH = ?", $MaKH);
}
function removePCart($MaDH, $MaSP){
    return pdo_execute("DELETE FROM donhangchitiet WHERE MaDH = ? and MaSP = ?", $MaDH, $MaSP);
}

function Total_revenue(){
    return pdo_query_value("SELECT SUM(TongTien) as TongTien FROM donhangchitiet");
}
function count_order(){
    return pdo_query_value("SELECT count(*) FROM donhang WHERE NgayMua > 01-01-2022");
}

//admin
function getAll_order(){
    return pdo_query("SELECT * FROM khachhang kh INNER JOIN donhang dh ON kh.MaKH = dh.MaKH INNER JOIN donhangchitiet ct ON dh.MaDH = ct.MaDH");
}
function delete_order($MaDH){
    pdo_execute("DELETE FROM donhangchitiet WHERE MaDH = ?",$MaDH);
}
function countOrder_forMonth(){
    return pdo_query_value("SELECT YEAR(dh.NgayMua) AS Nam,MONTH(dh.NgayMua) AS Thang, SUM(dhct.SoLuong) AS SoLuongMuaHang
FROM 
    donhang dh
JOIN 
    donhangchitiet dhct ON dh.MaDH = dhct.MaDH
WHERE 
    dh.NgayMua >= DATE_SUB(NOW(), INTERVAL 12 MONTH)
GROUP BY 
    Nam, Thang
ORDER BY 
    Nam ASC, Thang ASC;");
}

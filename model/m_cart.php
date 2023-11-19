<?php
include_once 'model/m_pdo.php';
//thao tác với csdl

function checkCart($MaKH){
    return pdo_query_one("SELECT * FROM donhang where MaKH = ?", $MaKH);
}
function checkProductInCart($MaDH, $MaSP){
    return pdo_query_one("SELECT * FROM donhangchitiet WHERE MaDH = ? AND MaSP = ?", $MaDH, $MaSP);
}
function addToCart($MaSP, $MaDH, $TrangThai){
    pdo_execute("INSERT INTO donhangchitiet(`MaSP`, `MaDH`,`TrangThai`) VALUES(?, ?, ?)", $MaSP, $MaDH, $TrangThai);
}
function updateQuantityInCart($MaSP, $MaDH, $SoLuong,$Gia,$TrangThai, $TongTien){
    pdo_execute("UPDATE donhangchitiet SET SoLuong = ?, Gia = ?, TrangThai = ?, TongTien = ?  WHERE MaSP = ? AND MaDH = ?", $SoLuong,$Gia,$TrangThai, $TongTien, $MaSP, $MaDH);
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
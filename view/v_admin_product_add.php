<div class="form-p5">
    <div class="main-user">
        <div class="name-user">
            <div>
                <h2>Thêm Sản Phẩm</h2>
            </div>
        </div>
        <div class="form-add">
            <h4>Tạo Mới Thông Tin</h4>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="table_flex" style="font-size: 16px; color: #7a7a7a;">
                    <div class="left">
                        <input type="text" name="TenSP" placeholder="Tên Sản Phẩm" /><br /><br />
                        <select name="MaDM" style="width: 400px; height:40px; outline:none; border: 1px solid #e1e1e1; color: #7a7a7a;">
                            <option>Danh Mục</option>
                            <option value="1">Chó</option>
                            <option value="2">Mèo</option>
                            <option value="3">Thức Ăn</option>
                            <option value="4">Dụng Cụ & Phụ Kiện</option>
                            <option value="5">Động Vật Bò Sát</option>
                            <option value="6">Thời Trang</option>
                        </select><br />
                        <div class="price">
                            <input type="text" name="Gia" placeholder="Giá Sản Phẩm" />
                            <input type="text" name="GiaKM" placeholder="Giá Khuyến Mãi" />
                        </div><br />
                        <div class="price">
                            <input type="text" name="hinhdang" placeholder="Hình Dáng" />
                            <select name="NoiBat" style="outline:none; width: 240px; border: 1px solid #e1e1e1; color: #7a7a7a ">
                                <option>Nổi Bật</option>
                                <option value="1">Có</option>
                                <option value="0">Không</option>
                            </select><br />
                        </div><br />
                        <input type="text" name="SoLuong" placeholder="Số Lượng" /><br /><br />
                        <textarea placeholder="Mô Tả" name="MoTa" id="" cols="20" rows="10"></textarea>
                        <select name="TrangThai" style="outline:none; border: 1px solid #e1e1e1; width: 400px; height:40px; color: #7a7a7a">
                            <option>Trạng Thái</option>
                            <option value="0">Hiện</option>
                            <option value="1">Ẩn</option>
                        </select><br />
                        <input style="background-color: #fcc850; color: white;  font-size: 20px;font-weight: 600;" type="submit" value="Thêm Sản Phẩm" name="submit" />
                    </div>
                    <div class="updateImg">
                        <h5 style="font-size: 16px;">Ảnh Sản Phẩm</h5>
                        <input type="file" name="Hinh" style="height: 200px;" />
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
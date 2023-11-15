<div class="form-p5">
    <div class="main-user">
        <div class="name-user">
            <div>
                <h2>Thêm Bài Viết</h2>
            </div>
        </div>
        <div class="form-add">
            <h4>Tạo Mới Thông Tin</h4>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="table_flex">
                    <div class="left" style="width: 100%">
                        <input type="text" class="mb-3" name="TieuDe" placeholder="Tiêu Đề" />
                        <select name="NoiBat" style="height:40px; outline:none; border: 1px solid #e1e1e1; color: #7a7a7a;">
                            <option>Nổi Bật</option>
                            <option value="1">có </option>
                            <option value="0">Không</option>
                        </select>
                        <br/>
                        <textarea placeholder="Nội Dung" name="NoiDung" id="" cols="20" rows="10"></textarea>
                        <select name="TrangThai" style="height:40px; outline:none; border: 1px solid #e1e1e1; color: #7a7a7a;">
                            <option>Trạng Thái</option>
                            <option value="0">Hiện</option>
                            <option value="1">Ẩn</option>
                        </select><br />
                        <input style="background-color: #fcc850; color: white" type="submit" value="Thêm Sản Phẩm" name="submit" />
                    </div>
                    <div class="updateImg">
                        <h6>Hình Ảnh</h6>
                        <input type="file" name="Hinh" style="height: 180px;"/>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
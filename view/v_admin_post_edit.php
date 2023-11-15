<div class="form-p5">
    <div class="main-user">
        <div class="name-user">
            <div>
                <h2>Cập Nhật Bài Viết</h2>
            </div>
        </div>
        <div class="form-add">
            <h4>Chỉnh Sửa Thông Tin</h4>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="table_flex">
                    <div class="left" style="width: 100%">
                        <input type="text" class="mb-3" name="TieuDe" placeholder="Tiêu Đề" value="<?=$post['TieuDe']?>" />
                        <select name="NoiBat" style="height:40px; outline:none; border: 1px solid #e1e1e1; color: #7a7a7a;">
                            <option>Nổi Bật</option>
                            <option value="1" <?= ($post['NoiBat'] == 1) ? 'selected' : '' ?>>có </option>
                            <option value="0" <?= ($post['NoiBat'] == 0) ? 'selected' : '' ?>>Không</option>
                        </select>
                        <br/>
                        <textarea placeholder="Nội Dung" name="NoiDung" id="" cols="20" rows="10"><?=$post['NoiDung']?></textarea>
                        <select name="TrangThai" style="height:40px; outline:none; border: 1px solid #e1e1e1; color: #7a7a7a;">
                            <option>Trạng Thái</option>
                            <option value="0" <?= ($post['TrangThai'] == 0) ? 'selected' : '' ?>>Hiện</option>
                            <option value="1" <?= ($post['TrangThai'] == 1) ? 'selected' : '' ?>>Ẩn</option>
                        </select><br />
                        <input style="background-color: #fcc850; color: white" type="submit" value="Thêm Sản Phẩm" name="submit" />
                    </div>
                    <div class="updateImg">
                        <h6>Hình Ảnh</h6>
                        <img src="<?=$base_url?>/template/assets_user/image/<?=$post['Hinh']?>" style="width: 120px; height; 140px" alt="">
                        <input type="file" name="Hinh" style="height: 180px;"/>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
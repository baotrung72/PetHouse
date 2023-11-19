<div class="container" style="padding: 20px;">
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?=$base_url?>/page/home">Trang Chủ</a></li>
      <li class="breadcrumb-item " aria-current="">Cập Nhật Thông Tin</li>
      
    </ol>
  </nav>
    <h2 class="text-center mb-5 mt-5">Cập Nhật Thông Tin</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="left" style="width: 50%; margin-left: 36%">
            <div class="col-md-7 mb-3 mb-3">
                <label for="validationDefaultUsername" class="form-label">Tên Tài Khoản : </label>
                <input type="text" class="form-control" name="HoTen" value="<?= $kh['HoTen'] ?>">
            </div>
            <div class="col-md-7 mb-3">
                <label for="validationDefaultUsername" class="form-label">Mật Khẩu : </label>
                <input type="text" class="form-control" name="MatKhau" value="<?= $kh['MatKhau'] ?>">
            </div>

            <div class="col-md-7 mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email :</label>
                <input type="email" class="form-control" name="Email" value="<?= $kh['Email'] ?>">
            </div>

            <div class="col-md-7 mb-3">
                <label for="validationCustom03" class="form-label">Địa Chỉ :</label>
                <input type="text" class="form-control" name="DiaChi" value="<?= $kh['DiaChi'] ?>">
            </div>

            <div class="col-md-7 mb-3">
                <label for="validationCustom03" class="form-label">Số Điện Thoại :</label>
                <input type="number" class="form-control" name="SoDienThoai" value="<?= $kh['SoDienThoai'] ?>">
            </div>


            <div class="d-grid gap-2 mt-5 " style="width: 58.5%; ">
                <input class="btn btn-warning" type="submit" name="submit" style="padding: 10px 10px; font-size: 18px;font-weight: 600; color:aliceblue;"></input>
            </div>
        </div>
    </form>
</div>
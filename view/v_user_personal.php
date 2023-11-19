<div class="container">
  <nav aria-label="breadcrumb" class="mt-3">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Trang Chủ</a></li>
      <li class="breadcrumb-item " aria-current="page">Trang Cá Nhân</li>
    </ol>
  </nav>
  <div class="edit_personal">
    <button type="button" class="btn btn-secondary" style="margin-left: 75%;"><a href="<?= $base_url ?>/user/update-personal" style="color: #ffffff;"><i class="fa-solid fa-pen-to-square"></i></a></button>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-3">

      </div>
      <div class="col-6">
        <div class=" container infor d-flex justify-center " style=" padding-top: 30px;">
          <div class="avatar-user" style="padding: 10px;">
            <img src="<?= $base_url ?>/template/assets_user/image/<?= $userById['HinhAnh'] ?>" alt="" style="border-radius: 50%; height: 100px; width: 100px; object-fit:cover; margin-left: 40px;">

          </div>

          <div style="padding:20px 50px; height: 450px; ">
            <h5 style="margin-bottom: 50px;">Thông tin tài khoản</h5>
            <table>

              <body>
                <tr>
                  <div>
                    <td><strong>Tên Tài Khoản:</strong></td>
                    <td style="padding-left: 30px;"><?= $userById['HoTen'] ?></td>
                  </div>
                </tr>
                <tr>
                  <td><br> <br></td>
                  <td><br></td>
                </tr>
                <tr>
                  <td><strong>Address Email:</strong></td>
                  <td style="padding-left: 30px;"><?= $userById['Email'] ?></td>
                </tr>
                <tr>
                  <td><br> <br></td>
                  <td><br></td>
                </tr>
                <tr>
                  <td><strong>Số Điện Thoại:</strong></td>
                  <td style="padding-left: 30px;"><?= $userById['SoDienThoai'] ?></td>
                </tr>
                <tr>
                  <td><br> <br></td>
                  <td><br></td>
                </tr>
                <tr>
                  <td><strong>Địa Chỉ:</strong></td>
                  <td style="padding-left: 30px;"><?= $userById['DiaChi'] ?></td>
                </tr>
              </body>
            </table>
            <div style="font-size: 16px; margin-top: 30px; ">

              <span>Thông tin của bạn sẽ được giữ bí mật! yên tâm bạn nhé. </span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-3">

      </div>
    </div>
  </div>

</div>
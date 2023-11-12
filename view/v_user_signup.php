<nav aria-label="breadcrumb" class="section-p2" style="padding: 20px 0 30px 7.5%;">
    <ol class="breadcrumb">
        <li class="breadcrumb-item" style="text-decoration: none; color: #212529;"><a href="#">Trang Chủ</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page" style="text-decoration: none; color: #212529;">
            Đăng Ký</li>
    </ol>
</nav>
<div class="container ">
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4 mb-5" style="background-color: aliceblue; border: 0.5px solid gray; padding: 30px 20px; border-radius: 8px; box-shadow: rgb(161, 161, 161) 0px 3px 10px ;">
            <div class="title-signup ">
                <h2 class="text-center">Đăng Ký</h2>
            </div>
            <form class=" g-3 needs-validation" method="post" action="" novalidate>
                <div class="col mb-4">
                    <label for="validationCustom01" class="form-label">Họ Và Tên:* </label>
                    <input type="text" name="HoTen" class="form-control" id="validationCustom01" placeholder="VD: Thanh Trung" required>
                    <div class="valid-feedback">

                    </div>
                </div>
                <div class="col mb-4">
                    <label for="validationCustom02" class="form-label">Email:*</label>
                    <input type="email" name="Email" class="form-control" id="validationCustom02" placeholder="VD: name@gmail.com" required>
                    <div class="invalid-feedback">
                        Vui lòng cung cấp một địa chỉ email hợp lệ.
                    </div>
                </div>
                <div class="col mb-4">
                    <label for="validationCustom03" class="form-label">Mật khẩu:*</label>
                    <input type="password" name="MatKhau" class="form-control" id="validationCustom03" minlength="6" placeholder="Mật khẩu phải lớn 5 ký tự" required>
                    <div class="invalid-feedback">
                        Vui lòng cung cấp một mật khẩu.
                    </div>
                </div>
                <?php if (isset($_SESSION['error'])) : ?>
                    <div class="alert alert-danger" style="font-size: 14px;" role="alert">
                        <?= $_SESSION['error'] ?>
                    </div>
                <?php endif;
                unset($_SESSION['error']); ?>
                <?php if (isset($_SESSION['success'])) : ?>
                    <div class="alert alert-danger" style="font-size: 14px;" role="alert">
                        <?= $_SESSION['success'] ?>
                    </div>
                <?php endif;
                unset($_SESSION['success']); ?>
                <div class="row">
                    <div class="col-12 text-center mt-5">
                        <button class="btn btn-success" type="submit" name="submit" style="padding: 8px 152px;">Đăng Ký</button>
                    </div>
                </div>
                <div class="dacotk" style="font-size: 14px; padding:30px 0 20px 250px;">
                    <a href="<?= $base_url ?>/user/login" style="font-size: 14px; ">Bạn Đã Có Tài Khoản ?</a>
                </div>
            </form>

        </div>
        <div class="col-4"></div>
    </div>
</div>
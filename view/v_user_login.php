<nav aria-label="breadcrumb" class="section-p2" style="padding: 20px 0 30px 7.5%;">
    <ol class="breadcrumb">
        <li class="breadcrumb-item" style="text-decoration: none; color: #212529;"><a href="<?= $base_url ?>/page/home">Trang Chủ</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page" style="text-decoration: none; color: #212529;">
            Đăng Nhập</li>
    </ol>
</nav>
<div class="container ">
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4 mb-5" style="background-color: aliceblue; border: 0.5px solid rgb(193, 192, 192); padding: 30px 20px; border-radius: 8px; box-shadow: rgb(161, 161, 161) 0px 3px 10px ;">
            <div class="title-signup ">
                <h2 class="text-center">Đăng Nhập</h2>
            </div>

            <form class=" g-3 needs-validation" novalidate method="post" action="">
                <div class="col mb-4">
                    <label for="validationCustom02" class="form-label">Email:*</label>
                    <input type="email" name="Email" class="form-control" id="validationCustom02" placeholder="VD: name@gmail.com" required>
                    <div class="invalid-feedback">
                        Nhập đúng định dạng email!
                    </div>
                </div>
                <div class="col mb-4">
                    <label for="validationCustom03" class="form-label">Mật khẩu:*</label>
                    <input type="password" name="MatKhau" class="form-control" id="validationCustom03" minlength="6" placeholder="Mật khẩu phải lớn 5 ký tự" required>
                    <div class="invalid-feedback">
                        Vui lòng nhập mật khẩu!
                    </div>
                </div>
                <?php if (isset($_SESSION['error'])) : ?>
                    <div class="alert alert-danger" style="font-size: 14px;" role="alert">
                        <?= $_SESSION['error'] ?>
                    </div>
                <?php endif;
                unset($_SESSION['error']); ?>
                <div class="rememberme mt-5">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" >
                    <label class="form-check-label" for="invalidCheck">
                        Nhớ Mật Khẩu
                    </label>
                </div>
                <div class="row">
                    <div class="col-12 text-center mt-4">
                        <button class="btn btn-success" name="submit" type="submit" style="padding: 8px 152px;">Đăng
                            Nhập</button>
                    </div>
                </div>
                <div class="dacotk" style="font-size: 14px; padding:30px 0 20px 160px;">

                    <span style="font-size: 14px; ">Bạn Chưa Có Tài Khoản?</span>
                    <a href="<?=$base_url?>/user/signup" style="padding-left: 5px;">Regester?</a>
                </div>
                <div class="link text-center"> 
                    <i class="fa-brands fa-facebook text-primary" style="font-size: 40px; "></i>
                    <span style="padding: 0  20px; ">Hoặc</span>
                    <i class="fa-brands fa-google text-success" style="font-size: 40px;padding: 15px 0 ;"></i>
                </div>
            </form>

        </div>
        <div class="col-4"></div>
    </div>
</div>